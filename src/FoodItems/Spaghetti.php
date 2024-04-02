<?php

namespace FoodItems;

class Spaghetti extends FoodItem
{
    public function __construct()
    {
        parent::__construct("Spaghetti", "A delicious spaghetti", 8.0);
    }

    public static function getCategory(): string
    {
        return "Pasta";
    }
}