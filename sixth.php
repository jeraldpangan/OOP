<?php
class Vehicle {
    public $name;
    public $speed;
    public $mileage;
    public $hasWheels = "true";
    public $seating_capacity;

    public function __construct($name, $speed, $mileage, $hasWheels, $seating_capacity = 50) {
        $this->name = $name;
        $this->speed = $speed;
        $this->mileage = $mileage;
        $this->hasWheels = $hasWheels;
        $this->seating_capacity = $seating_capacity;
    }

    public function showInfo() {
        echo "Vehicle name: " . $this->name . "<br>";
        echo "Speed: " . $this->speed . "<br>";
        echo "Mileage: " . $this->mileage . "<br>";
        echo "Seating capacity: " . $this->seating_capacity . "<br>";
    }

   
    public function fare() {
        return $this->seating_capacity * 100;
    }
}

class Bus extends Vehicle {
    public function __construct($name, $speed, $mileage, $seating_capacity = 50) {
        parent::__construct($name, $speed, $mileage, true, $seating_capacity);
    }

    
    public function fare() {
        $total_fare = parent::fare(); 
        return $total_fare + ($total_fare * 0.10); 
    }

    public function showInfo() {
        parent::showInfo();
        echo "Bus fare: " . $this->fare() . "<br>"; 
    }
}

class Car extends Vehicle {
    public function showInfo() {
        parent::showInfo();
        echo "Has wheels: " . $this->hasWheels . "<br>";
    }
}


$car1 = new Car("Toyota", "200", "100", "true");
$car1->showInfo();

echo "<br>";


$bus1 = new Bus("Volvo", "100", "300");
$bus1->showInfo(); 
?>