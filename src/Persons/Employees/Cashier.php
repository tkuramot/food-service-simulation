<?php

namespace Persons\Employees;

use FoodOrders\FoodOrder;
use Restaurants\Restaurant;
use Invoices\Invoice;

class Cashier extends Employee
{
    public function __construct(string $name, int $age, string $address, int $employeeId, float $salary)
    {
        parent::__construct($name, $age, $address, $employeeId, $salary);
    }

    public function generateOrder(array $categories, Restaurant $restaurant): FoodOrder
    {
        print $this->getName() . " received the order.\n";
        if (count($categories) === 0) {
            return new FoodOrder([], time());
        }
        return new FoodOrder($categories, time());
    }

    public function generateInvoice(FoodOrder $order): Invoice
    {
        print $this->getName() . " made the invoice.\n";
        $finalPrice = 0;
        $items = $order->getItems();
        foreach ($items as $item) {
            $finalPrice += $item->getPrice();
        }
        return new Invoice($finalPrice, $order->getOrderedAt(), 7);
    }
}