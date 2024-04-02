<?php

namespace Restaurants;

use Invoices\Invoice;
use Persons\Employees\Cashier;
use Persons\Employees\Chef;
use Persons\Employees\Employee;

class Restaurant
{
    private array $menu;
    private array $employees;

    public function __construct(array $menu, array $employees)
    {
        $this->menu = $menu;
        $this->employees = $employees;
    }

    public function getMenu(): array
    {
        return $this->menu;
    }

    public function findCashier(): Cashier
    {
        $cashiers = array_filter($this->employees, function (Employee $employee) {
            return $employee instanceof Cashier;
        });
        $random_key = array_rand($cashiers);
        return $cashiers[$random_key];
    }

    public function findChef(): Chef
    {
        $chefs = array_filter($this->employees, function (Employee $employee) {
            return $employee instanceof Chef;
        });
        $random_key = array_rand($chefs);
        return $chefs[$random_key];
    }

    public function order(array $categories): Invoice
    {
        $cashier = $this->findCashier();
        $foodOrder = $cashier->generateOrder($categories, $this);
        $chef = $this->findChef();
        $chef->prepareFood($foodOrder);
        return $cashier->generateInvoice($foodOrder);
    }
}