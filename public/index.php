<?php

declare(strict_types=1);

use Doctrine\Inflector\InflectorFactory;
use Ramsey\Uuid\Uuid;

require __DIR__ . '/../bootstrap/app.php';


$transaction = new \App\Transaction(60);
//$transaction->process();
$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

echo '<pre>';
var_dump($_ENV['DB_USER']);
var_dump($_ENV[SECRET_KEY]);


$inflector = InflectorFactory::create()->build();

$name = 'comment';
printf(
    'vienskaitlis: %s, daudzskaitlis: %s',
    $name, $inflector->pluralize($name)
);
echo '<br>';

$blogPost = 'This is My Blog post';
printf(
    'title: %s, url: %s',
    $blogPost, $inflector->urlize($name)
);
echo '<br>';




$uuid = Uucompoid::uuid4();

printf(
    "UUID: %s\nVersion: %d\n",
    $uuid->toString(),
    $uuid->getFields()->getVersion()
);

