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
class Blue implements Color {
	public function fill () {
		echo "fill Blue";
	}
}

abstract class AbstractFactory {
	public function getShape () {} 
	public function getColor () {}
}
class FactoryShape extends AbstractFactory {
	public function getShape ($type) {
		switch($type){
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
class FactoryColor extends AbstractFactory {
	public function getColor ($color) {
		switch(strtolower($color)){
			case 'red':
				return new Red();
				break;
			case 'yellow':
				return new Yellow();
				break;
			case 'blue':
				return new Blue();
				break;
			default:
				return null;
				break;
		}
	}
}
?>