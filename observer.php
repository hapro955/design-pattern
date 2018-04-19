<?php
interface Observer {
	public function update();
}
interface Subject {
	public function attach(Observer $observer);
	public function detach(Observer $observer);
	public function notify(); 
}
class Account implements Subject {
	const LOGIN_SECCESS = 1;
	const LOGIN_FAILURE = 2; 
	const LOGIN_IVALID = 3;
	const EXPIRED = 4;
	private $state;
	private $storage;
	private $data;

	public function __construct() {
		$this->storage =  array();
		$this->data = array();
	}
	public function attach (Observer $observer) {
		$isContain = array_search($observer, $this->storage);
		if($isContain == false) {
			$this->storage[] = $observer;	
		}
	}
	public function detach(Observer $observer) {
		foreach($this->storage as $key => $val) {
			if($val == $observer) {
				unser($this->storage[$key]);
			}
		}
	}
	public function notify () {
		foreach($this->storage	as $observer) {
			$observer->update($this);	
		}
	}
	public function save () {
		$this->notify();
	}
	public function setState ($state) {
		$this->state = $state;
	}
	public function getState () {
		return $this->state;
	}
	public function setData ($data) {
		$this->data = $data;
	}
	public function getData () {
		return $this->data;
	}
	public function process ($email) {
		if($email == "hapro955@gmail.com") {
			return true;
		}
		return false;
	}
}
?>