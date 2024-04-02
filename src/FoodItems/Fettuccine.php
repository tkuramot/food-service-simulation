<?php

namespace FoodItems;

class Fettuccine extends FoodItem
{
    public function __construct()
    {
        parent::__construct("Fettuccine", "A delicious fettuccine", 7.0);
    }

    public static function getCategory(): string
    {
        return "Pasta";
    }
}