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
		return $this->name;
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
		return $this->firstName;
	}
	public function setLastName ($lname) {
		$this->lastName = $lname;
	}
	public function getLastName () {
		return $this->lastName;
	}
}	
class UserToCustomerAdapter implements CustomerInterface {
	protected $user;
	protected $firstName;
	protected $lastName;

	public function __construct (User $user) {
		$this->user = $user;
		$fullName = $this->user->getName();
		$pieces = explode(" ", $fullName);
		$this->firstName = $pieces[1];
		$this->lastName = $pieces[0];
	}
	public function setFirstName ($fname) {
		$this->firstName = $fname;
	}
	public function getFirstName () {
		return $this->firstName;
	}
	public function setLastName ($lname) {
		$this->lastName = $lname;
	}
	public function getLastName () {
		return $this->lastName;
	}
}

$user = new User();
$user->setName("Son Ha");
echo "User: ".$user->getName();

$adapter = new UserToCustomerAdapter($user);
echo "</br>Customer:</br> first Name: ".$adapter->getFirstName()."</br>last Name: ".$adapter->getLastName();	
?>