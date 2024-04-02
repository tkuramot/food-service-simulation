<?php

namespace Persons\Customers;

use Invoices\Invoice;
use Persons\Person;
use Restaurants\Restaurant;

class Customer extends Person
{
    private array $interestedTestesMap;

    public function __construct(string $name, int $age, string $address, array $interestedTestesMap)
    {
        parent::__construct($name, $age, $address);
        $this->interestedTestesMap = $interestedTestesMap;

        # Print the customer's name and the categories they are interested in
        print $this->getName() . " wanted to eat ";
        $categories = array_keys($interestedTestesMap);
        foreach ($categories as $index => $category) {
            print $category;
            if ($index < count($categories) - 1)
                print ", ";
            else
                print ".\n";
        }
    }

    public function order(Restaurant $restaurant): Invoice
    {
        print $this->getName() . " was looking at the menu, and ordered ";
        $menu = $restaurant->getMenu();
        $order = [];
        foreach ($menu as $index => $foodItem) {
            $foodName = $foodItem->getName();
            if (!array_key_exists($foodName, $this->interestedTestesMap)) {
                continue;
            }
            # Print the food item and the quantity
            print $foodItem->getName() . " x " . $this->interestedTestesMap[$foodName];
            if ($index < count($menu) - 1)
                print ", ";
            else
                print ".\n";

            # Add the food item to the order array
            for ($i = 0; $i < $this->interestedTestesMap[$foodName]; $i++) {
                $order[] = $foodItem;
            }
        }

        # If the customer didn't order anything, print "nothing" and return an invoice with 0 total
        if (count($order) === 0) {
            print " nothing.\n";
            return new Invoice(0, time(), 0);
        }
        return $restaurant->order($order);
    }
}