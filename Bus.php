<?php
include 'Vehicle.php';

class Bus extends Vehicle { 

 // 4. Create a Bus class with a default seating capacity of 50.
    public $seating_capacity;
    public $total_fare;
    public function __construct($name, $speed, $mileage,$seating_capacity=50){
        $this->seating_capacity = $seating_capacity;
    }
}
