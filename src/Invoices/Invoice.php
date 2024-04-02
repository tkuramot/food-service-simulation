<?php

namespace Invoices;

use Cassandra\Timestamp;

class Invoice
{
    private float $finalPrice;
    private Timestamp $orderedAt;
    private int $estimatedTimeInMinutes;
}