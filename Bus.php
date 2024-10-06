<?php

//4. Create a Bus class that inherits from the Vehicle class in Problem #1.
// Give the capacity argument of Bus->seating_capacity() a default value of 50.

include "./Vehicle.php"; //import from other file

class Bus Extends Vehicle{
    public $seating_capacity;

    public function __construct($name, $speed, $mileage,int $seating_capacity=50) {
        $this->name = $name;
        $this->speed = $speed;
        $this->mileage = $mileage;
        $this->seating_capacity= $seating_capacity;
    }
    public function setseating_capacity(int $seating_capacity=50){
        $this->seating_capacity=$seating_capacity;
    }
    public function getseating_capacity()
    {
        return $this->seating_capacity;
    }
    public function displayInfo() {
        echo "Vehicle: $this->name, Speed: $this->speed, Mileage: $this->mileage<br>";
    }
}  

    $VLiner= new Bus("liner","20","100",);
    echo "Seating Capacity is=".$VLiner->getseating_capacity();
?>