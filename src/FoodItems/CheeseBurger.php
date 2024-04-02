<?php

namespace FoodItems;

class CheeseBurger extends FoodItem
{
    public static function getCategory(): string
    {
        return "Burger";
    }
}