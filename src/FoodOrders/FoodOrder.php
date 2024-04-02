<?php

namespace FoodOrders;

use Cassandra\Timestamp;

class FoodOrder
{
    private array $items = [];
    private Timestamp $orderedAt;
}