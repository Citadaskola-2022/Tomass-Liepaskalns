<?php

declare(strict_types=1);

require_once '../src/Car.php';

// HW: Driver (name, surname, age)


$car = (new Car(odometer: 1000,number_plate: 'LN-333',fuelConsumption: 14.5))
    ->addKilometers(200)
    ->addKilometers(500);

$liters = $car->getConsumedLiters();

$car = null;

var_dump($liters);
