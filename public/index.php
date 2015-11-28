<?php

use Faker\Factory;

require __DIR__ . '/../vendor/autoload.php';

$faker = Factory::create();

die('WE DID IT ' . $faker->firstName);