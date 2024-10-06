<?php
//1. Write a PHP program to create a Vehicle class with name, speed and mileage instance attributes.


class Vehicle{

public $name;
public $speed;
public $mileage;

public function __construct($name, int $speed, int $mileage) {
    $this->name = $name;
    $this->speed = $speed;
    $this->mileage = $mileage;
    }

public function displayInfo() {
    echo "Vehicle: $this->name, 
    Speed: $this->speed, 
    Mileage: $this->mileage<br>";
    }
}
?>