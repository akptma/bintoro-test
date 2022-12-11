<?php
require_once "../config/database.php";
require_once '../vendor/autoload.php';

use Faker\Factory;

$faker = Factory::create('id_ID');


for ($i = 1; $i <= 500; $i++) {
    $name        = $faker->name;
    $birth_place = $faker->city;
    $birth_date  = $faker->date($format = 'Y-m-d', $max = '-19 years');
    $gender      = $faker->randomElements(['male', 'female'])[0];

    $query  = "INSERT INTO `test_bintoro`.`users` (`name`, `birth_place`, `birth_date`, `gender`) 
               VALUES ('$name', '$birth_place', '$birth_date', '$gender')";
    $connect->query($query);
}
