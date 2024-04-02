<?php

namespace FoodItems;

class CheeseBurger extends FoodItem
{
    public function __construct()
    {
        parent::__construct("Cheese Burger", "A delicious cheese burger", 5.0);
    }

    public static function getCategory(): string
    {
        return "Burger";
    }
}