<?php
interface UserInterface {
	public function setName($name);
	public function getName();
}
class User implements UserInterface {
	private $name;

	public function setName ($name) {
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
class Customer implements CustomerInterface {
	private $firstName;
	private $lastName;

	public function setFirstName ($fname) {
		$this->firstName = $fname;
	}
	public function getFirstName () {
		return $firstName;
	}
	public function setLastName ($lname) {
		$this->lastName = $lname;
	}
	public function getLastName () {
		return $lastName;
	}
}	
?>