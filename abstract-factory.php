<?php
interface Shape {
	CONST SQUARE = 1;
	CONST RECTANGLE = 2;
	CONST CIRCLE = 3;
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
class FactoryShape {
	public function getShape($type) {
		switch ($type) {
			case Shape::SQUARE: 
				return new Square();
				break;
			case Shape::RECTANGLE:
				return new Rectangle();
				break;
			case Shape::Circle:
				return new Circle();
				break;
			default:
				return null;
				break;
		}
	}
}
interface Color {
	public function fill();
}
class Red implements Color {
	public function fill () {
		echo "fill Red";
	}
}
class Yellow implements Color {
	public function fill () {
		echo "fill Yellow";
	}
}
?>