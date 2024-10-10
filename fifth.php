<?php
class Vehicle{
    public $name;
    public $speed;
    public $mileage;
    public $hasWheels;
    public function __construct($name, $speed, $mileage,$hasWheels)
    {
        $this->name=$name;
        $this->speed=$speed;
        $this->mileage=$mileage;
        $this->hasWheels=$hasWheels;
    }   
    public function showInfo(){
        echo "Vehicle name: ".$this->name. "<br>";
        echo "Speed: ".$this->speed. "<br>";
        echo "Mileage: ".$this->mileage. "<br>";
    }
}
class Bus extends Vehicle{
    public $seating_capacity;
    public function __construct($name, $speed, $mileage,$seating_capacity=50)
    {
        parent::__construct($name,$speed,$mileage);
        $this->seating_capacity=$seating_capacity;
    }   
    public function showInfo(){
        parent::showInfo();
        echo "Seating capacity: ".$this->seating_capacity."<br>";
    }
}
class Car extends Vehicle {
    public function showInfo(){
        parent::showInfo();
        echo "Has wheels: ".$this->hasWheels;
    }
}
    $car1 = new Car("Toyota", "200","100", "true");
    $car1->showInfo();
?>