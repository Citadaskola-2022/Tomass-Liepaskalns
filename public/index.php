<?php

declare(strict_types=1);

require __DIR__ . '/../bootstrap/app.php';


$coffee = new \App\Cafe\CoffeeWithMilk();

$iced = new \App\Cafe\IcedCoffee($coffee);
$coffee->prepare(100);
$coffee->addIce(5);
$coffee->addIce(4);
$coffee->brew();

var_dump($iced);

}


