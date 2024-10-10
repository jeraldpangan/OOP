<?php 
class Vehicle{
    public $name;
    public $speed;
    public $mileage;

    public function __construct($name, $speed, $mileage)
    {
        $this->name=$name;
        $this->speed=$speed;
        $this->mileage=$mileage;
    }   
    public function showInfo(){
        echo "Vehicle name: ".$this->name. "<br>";
        echo "Speed: ".$this->speed. "<br>";
        echo "Mileage: ".$this->mileage. "<br>";
    }
}
?>