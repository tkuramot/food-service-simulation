<?php

namespace Invoices;

class Invoice
{
    private float $finalPrice;
    private int $orderedAt;
    private int $estimatedTimeInMinutes;

    public function __construct(float $finalPrice, int $orderedAt, int $estimatedTimeInMinutes)
    {
        $this->finalPrice = $finalPrice;
        $this->orderedAt = $orderedAt;
        $this->estimatedTimeInMinutes = $estimatedTimeInMinutes;
    }

    public function getEstimatedTimeInMinutes(): int
    {
        return $this->estimatedTimeInMinutes;
    }

    public function printInvoice(): void
    {
        print "------------------------------\n";
        print "Date: " . date("D M d, Y G:i", $this->orderedAt) . "\n";
        print "Final price: " . $this->finalPrice . "\n";
        print "------------------------------\n";
    }
}