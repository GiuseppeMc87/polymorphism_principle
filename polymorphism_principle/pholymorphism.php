<?php
//polimorphism principle with interface

interface Shape {
  public function calcArea();
}

class Circle implements Shape {
  private $radius;
   
  public function __construct($radius)
  {
    $this -> radius = $radius;
  }
  
  // calcArea calculates the area of circles 
  public function calcArea()
  {
    return $this -> radius * $this -> radius * pi();
  }
}

class Rectangle implements Shape {
  private $width;
  private $height;
   
  public function __construct(array $rectangle)
  {
    $this -> width = $rectangle['width'];
    $this -> height = $rectangle['height'];
  }
  
  // calcArea calculates the area of rectangles   
  public function calcArea()
  {
    return $this -> width * $this -> height;
  }
}

$radius=3;
$rectangle['width']=3;
$rectangle['height']=4;

$circ = new Circle($radius);
$rect = new Rectangle($rectangle);


echo 'Area circle (radius='.$radius.')= '.$circ -> calcArea()."\n";
echo 'Area rectangle (width= '.$rectangle['width'].' and height= '.$rectangle['height'].')= '.$rect -> calcArea();