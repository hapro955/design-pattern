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

?>