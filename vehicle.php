<?php
//1. Write a PHP program to create a Vehicle class with name, speed and mileage instance attributes.

class Vehicle{

public $name;
public $speed;
public $mileage;

public function __construct($name, $speed, $mileage) {
    $this->name = $name;
    $this->speed = $speed;
    $this->mileage = $mileage;

    }
}
?>