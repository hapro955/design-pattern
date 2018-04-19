<?php
interface UserInterface {
	public function setName($name);
	public function getName();
}
class User implements UserInterface {
	private $name;
	pubic function setName ($name) {
		$this->name = $name;
	}
	public function getName () {
		return $name;
	}
}
interface CustomerInterface {
	public function setFirstName($fname);
	public function getFirstName();
	public function setLastName($lname);
	public function getLastName();
}
?>