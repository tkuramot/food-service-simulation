<?php

namespace Person;

class Customer extends Person
{
    public function __construct(string $name, int $age, string $address)
    {
        parent::__construct($name, $age, $address);
    }
}