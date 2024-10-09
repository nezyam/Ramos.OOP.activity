<?php

include 'Vehicle.php'; 

//3. Create a child class Bus that will inherit all of the variables and methods of the Vehicle class in Problem #1.

class Bus Extends Vehicle{ 
    public function __construct($name, $speed, $mileage){
    parent::__construct($name, $speed, $mileage);

}
}