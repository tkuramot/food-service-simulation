<?php

namespace FoodItems;

class Spaghetti extends FoodItem
{
    public static function getCategory(): string
    {
        return "Pasta";
    }
}