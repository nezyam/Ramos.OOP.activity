<?php

class Bus Extends Vehicle{
    public $seatingCap;

    public function __construct($name, $speed, $milage, $seatingCap=50){
        $this->name=$name;
        $this->speed=$speed;
        $this->milage=$milage;
        $this->seatingCap=$seatingCap;
    }
    function getName()
    {
        return $this->name;
    }
}

$euro= new Bus("nissan",50,"1000",);
echo $euro->getName();


?>
