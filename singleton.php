<?php
class Student {
	private $name;
	private static $singletonObject;

	private function __construct ($name) {
		$this->name = $name;
	}
	public function setName ($name) {
		$this->name = $name;
	}
	public function getName () {
		return $this->name;
	}
}
?>