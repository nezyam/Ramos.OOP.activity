<?php

include 'Vehicle.php'; 

//3. Create a child class Bus that will inherit all of the variables and methods of the Vehicle class in Problem #1.

class Bus Extends Vehicle{ 

 // 4. Create a Bus class with a default seating capacity of 50.
    public $seating_capacity;
    public $total_fare;
    public function __construct($name, $speed, $mileage,$seating_capacity=50){
        parent::__construct($name, $speed, $mileage);
        $this->seating_capacity = $seating_capacity;
    }
    
 // 6. Override the fare() method to include a 10% maintenance charge for buses.
    public function busfare() {
    // Calculate the total fare based on seating capacity
        $base_fare = $this->seating_capacity * 100;
    // Add 10% maintenance charge
        $maintenance_charge = $base_fare * 0.1;
    // Final fare calculation
        $total_fare = $base_fare + $maintenance_charge;

    return $total_fare;
    }
}

$bus = new Bus("City Bus", 80, 15000,); // Seating capacity is 50

echo "Total Fare for Bus: " . $bus->busfare(); // Should output 5500