<?php
include 'first.php';
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
    $bus = new Bus("Bus", "100", "10");
    $bus->showInfo();

?>