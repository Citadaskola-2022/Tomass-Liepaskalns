<?php

class Car
{
    private ?int $odometer;
    public string $number_plate;
    private float $fuelConsumption;


  public function __construct(
      int $odometer,
      string $number_plate,
      float $fuelConsumption
)
{
    $this->odometer = $odometer;
    $this->number_plate = $number_plate;
    $this->fuelConsumption = $fuelConsumption;
}

    public function addKilometers(int $kilometer): Car
    {
        $this->odometer += $kilometer;

        return $this;
    }
    public function getConsumedLiters()
    {
        return $this->odometer * $this->fuelConsumption / 100;
    }
    public function __destruct()
    {
        echo "Car $this->number_plate Destroyed </br>";

    }
}
