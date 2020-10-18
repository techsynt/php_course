<?php

class Car {
    public $cost = '1000 usd';
    public $color;
    public $type;
    public $fuel;
    
    public function __construct($cost, $color, $type, $fuel) {
        $this->cost = $cost;
        $this->color = $color;
        $this->type = $type;
        $this->fuel = $fuel;
    }
    public function fuelConsumption($distance) {
        $time = $distance/$this->fuel;
        return $time;
    }
    const const1 = 2;
    const const2 = 5;
    const const3 = 15;
    
    static function getMaxConstant() {
        if((self::const1 > self::const2) && (self::const1 > self::const3)):
            return self::const1;
        elseif((self::const2 > self::const1) && (self::const2 > self::const3)):
            return self::const2;
        else:
            return self::const3;
        endif;
    }
}

echo Car::const1.'<br>';
echo Car::const2.'<br>';
echo Car::const3.'<br>';
echo Car::getMaxConstant();


/*
 
$car1 = new Car;
$car1->cost = '3500 usd';
$car1->color = 'red';
$car1->type = 'sedan';


$car2 = new Car;
$car2->cost = '4500 usd';
$car2->color = 'green';
$car2->type = 'sedan';

*/
$car3 = new Car('1500 usd', 'black', 'sedan', 200);
//print_r($car3);
$car4 = new Car('2000 usd', 'pink', 'minivan', 250);
//print_r($car4);


$car3->fuelConsumption(1000);