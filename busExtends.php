<?php

Include "./Vehicle.php";

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
    function getspeed()
    {
        return $this->speed;
    }
    function getmilage()
    {
        return $this->milage;
    }
    function getsseatingcap()
    {
        return $this->seatingCap;
    }
}

$euro= new Bus("nissan",50,"1000",);
echo $euro->getName()."<br>";
echo $euro->getspeed()."<br>";
echo $euro->getmilage()."<br>";
echo $euro->getsseatingcap()."<br>";
?>
