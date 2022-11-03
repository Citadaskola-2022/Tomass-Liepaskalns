<?php

declare(strict_types=1);

spl_autoload_register(function ($class) {
    require_once __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';
});

$transaction = new \App\Transaction(50);

var_dump($transaction->getAmount());

$transaction->process();

