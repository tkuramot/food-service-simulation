<?php

namespace FoodItems;

class HawaiianPizza extends FoodItem
{
    public function __construct()
    {
        parent::__construct("Hawaiian Pizza", "A delicious hawaiian pizza", 10.0);
    }

    public static function getCategory(): string
    {
        return "Pizza";
    }
}