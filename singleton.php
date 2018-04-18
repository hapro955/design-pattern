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
	public static function getInstance ($name) {
		if(!self::$singletonObject) {
			self::$singletonObject = new Student($name);
		}
		return self::$singletonObject;
	}
}


?>