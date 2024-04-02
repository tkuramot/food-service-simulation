<?php

namespace Persons\Employees;

use FoodOrders\FoodOrder;

class Chef extends Employee
{
    public function __construct(string $name, int $age, string $address, int $employeeId, float $salary)
    {
        parent::__construct($name, $age, $address, $employeeId, $salary);
    }

    public function prepareFood(FoodOrder $order): void
    {
        $foodItems = $order->getItems();
        if (count($foodItems) === 0) {
            print $this->getName() . " is preparing nothing.\n";
            return;
        }
        foreach ($foodItems as $foodItem) {
            print $this->getName() . " is preparing " . $foodItem->getName() . ".\n";
        }
    }
}