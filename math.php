<?php
// Rectangle class
class Rectangle {
    public $length;
    public $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function area() {
        return $this->length * $this->width;
    }
}

// Triangle class
class Triangle {
    public $base;
    public $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function area() {
        return 0.5 * $this->base * $this->height;
    }
}

// Circle class
class Circle {
    public $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * pow($this->radius, 2);
    }
}

// Square class
class Square {
    public $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function area() {
        return pow($this->side, 2);
    }
}

// Usage examples
$rectangle = new Rectangle(5, 10);
echo "Rectangle area: " . $rectangle->area()."<br>";

$triangle = new Triangle(4, 8);
echo "Triangle area: " . $triangle->area() ."<br>";

$circle = new Circle(3);
echo "Circle area: " . $circle->area() ."<br>";

$square = new Square(6);
echo "Square area: " . $square->area() ."<br>";
?>
