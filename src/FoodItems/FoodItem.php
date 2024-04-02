<?php

namespace FoodItems;

abstract class FoodItem
{
    private string $name;
    private string $description;
    private float $price;

    abstract public static function getCategory(): string;
}