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
?>