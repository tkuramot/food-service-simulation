<?php

namespace FoodOrders;

class FoodOrder
{
    private array $items = [];
    private int $orderedAt;

    public function __construct(array $items, int $orderedAt)
    {
        $this->items = $items;
        $this->orderedAt = $orderedAt;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function getOrderedAt(): int
    {
        return $this->orderedAt;
    }
}