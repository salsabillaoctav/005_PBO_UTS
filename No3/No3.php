<?php 

require_once '../No3/No3abstract.php';
require_once '../No3/No3interface.php';

class Animal  
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    
    public function eat()
    {
        return $this->name . ' sedang makan';
    }
}

class Homosapiens extends Animal {}

class Airplane2 extends Vehicle implements Flyer
{
    public function __construct($maxLoad, $name)
    {
        $this->maxLoad = $maxLoad;
        $this->name = $name;
    }
    
    public function takeOff()
    {
        return "$this->name lepas landas";
    }
    
    public function land()
    {
        return "$this->name mendarat";
    }

    public function fly()
    {
        return "$this->name dalam perjalanan";
    }

    public function calcFuelNeeds()
    {
        $fuel = $this->calcFuelEfficiency();
        $trip = $this->calcTripDistance();

        
        
        return ceil($fuel /= $trip);
    }
}

class Superman2 extends Homosapiens implements Flyer
{
    public function takeOff()
    {
        return "$this->name mengejar Batman";
    }
    
    public function land()
    {
        return "$this->name melawan Batman";
    }

    public function fly()
    {
        return "$this->name melancarkan pukulan";
    }

    public function leapBuilding()
    {
        return "Batman terpental menabrak bangunan pencakar langit";
    }

    public function stopBullet()
    {
        return "Polisi menembaki $this->name namun ditangkis";
    }
}

$singa = new Animal('Singa');
$manusia = new Homosapiens('Salsabilla');
$airplane2 = new Airplane2(25000, 'Lion Air');
$superman2 = new Superman2('Superman');