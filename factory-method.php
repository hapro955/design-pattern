<?php
interface Shape {
	const SQUARE = 1;
	const CIRCLE = 2;
	const RECTANGLE = 3;
	public function draw();
}
class Square implements Shape {
	public function draw () {
		echo "draw Square";
	}
}
class Rectangle implements Shape {
	public function draw () {
		echo "draw Rectangle";
	}
}
class Circle implements Shape {
	public function draw () {
		echo "draw Circle";
	}
}

class ShapeFactory {
	public function getShape ($type) {
		switch ($type) {
			case Shape::SQUARE:
				return new Square();
				break;
			case Shape::RECTANGLE:
				return new Rectangle();
				break;
			case Shape::CIRCLE:
				return new Circle();
				break;
			default: 
				return null;
				break;
		}
	}
}

$shapeFactory = new ShapeFactory();
$shape = $shapeFactory->getShape(Shape::SQUARE);
$shape->draw();
?>