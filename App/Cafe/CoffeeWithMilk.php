<?php

namespace App\Cafe;

class CoffeeWithMilk extends Coffee
{
    protected int $volume;

    public function __construct()
    {
        parent::__construct();
        $this->volume = 250;
    }

    public function brew(): void

    {
        foreach ($this->portions as $i => $portions)
            echo sprintf('%d: adding %dml portion to coffee with milk' . PHP_EOL , $i,  $portions);
        }

    public function addMilk()
    {
        $this->portions['milk'] = 100;
    }
}
