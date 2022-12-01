<?php

namespace App;

class Transaction
{
    public float $amount;

    public function __construct(float $amount)
    {
        $this->amount = $amount;

    }

    public function process(): void
    {
        printf("Total amount is %.02f for the service", $this->amount);

    }

    public function getAmount(): float
    {
        return $this->amount;
     }
}
