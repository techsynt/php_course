<?php

class Figure {
    public $area;
    public $color;
    const SIDES = 4;
    public function infoAbout() {
        return 'Это геометрическая фигура!';
    }
}

class Rectangle extends Figure {
    private $a;
    private $b;
    const SIDES = 4;
    public function __construct($a, $b) {
       $this->a = $a;
       $this->b = $b;
    }
    public function getArea() {
        $a = $this->a;
        $b = $this->b;
        return $s = $a * $b ;
    }
    final function infoAbout() {
        return 'Это класс прямоугольника . У него '.self::SIDES.' стороны!';
    }
}

class Square extends Figure {
    private $a;
    const SIDES = 4;
     public function __construct($a) {
     $this->a = $a;
     }
    public function getArea() {
//       return $s = $this->a * $this->a;
        $a = $this->a;
        return $a*$a;
    }
    final function infoAbout() {
        return 'Это класс квадрата . У него '.self::SIDES.' стороны!';
    }
}
class Triangle extends Figure {
    private $a;
    private $b;
    private $c;
    const SIDES = 3;
    public function __construct($a, $b, $c) {
       $this->a = $a;
       $this->b = $b;
       $this->c = $c;
}
    public function getArea() {
        $a = $this->a;
        $b = $this->b;
        $c = $this->c;
        $p = ($a + $b + $c) / 2;
        $s = $p * ($p - $a) * ($p - $b) * ($p - $c);
        return sqrt($s);
    }
    final function infoAbout() {
        return 'Это класс треугольника . У него '.self::SIDES.' стороны!';
    }
}

$square_obj1 = new Square(5);
$square_obj2 = new Square(7);
//print_r ($square_obj1->getArea());

$triangle_obj1 = new Triangle(5,3,2);
$triangle_obj2 = new Triangle(5,5,5);
print_r($triangle_obj2->getArea());

$rectangle_obj1 = new Rectangle(3,5);
print_r($rectangle_obj1->getArea());