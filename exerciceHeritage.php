<?php

abstract class Shape {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function getArea();
}

class Circle extends Shape {
    private $radius;

    public function __construct($name, $radius) {
        // TODO: Call the parent constructor and initialize the radius

        parent::__construct($name);
        $this->radius = $radius;
    }

    // TODO: Implement the getArea method for Circle

     public function getArea()
    {
        return M_PI * $this->radius * $this->radius;

    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($name, $width, $height) {
        // TODO: Call the parent constructor and initialize the width and height
        
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;

    }

    public function getArea() 
    {
        return $this->width * $this->height;
    }

    // TODO: Implement the getArea method for Rectangle
}

// TODO: Create instances and demonstrate area calculations
$circle = new Circle("Circle 1", 15);
$rectangle = new Rectangle("Rectangle 1", 10, 5);

echo $circle->getArea()."<br>"; // Output the area of the circle
echo $rectangle->getArea(); // Output the area of the rectangle
?>
