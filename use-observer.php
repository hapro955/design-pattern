<?php
interface Observer {
	public function update (Number $number);
}
interface Subject {
	public function attach (Observer $observer);
	public function detach (Observer $observer);
	public function notify();
}

class Number implements Subject {
	private $number;
	private $storage;

	public function __construct ($number = 0) {
		$this->number = $number;
		$this->storage = array();
	}
	public function attach (Observer $observer) {
		$isObserver = array_search($observer, $this->storage);
		if($isObserver == false) {
			$this->storage[] = $observer;
		}
	}
	public function detach (Observer $observer) {
		foreach ($this->storage as $key => $value) {
			if($value == $observer) {
				unset($this->storage[$key]);
			}
		}
	}
	public function notify () {
		foreach ($this->storage as $observer) {
			$observer->update($this);
		}
	}

	public function setNumber ($number) {
		$this->number = $number;
		$this->notify();
	}
	public function getNumber () {
		return $this->number;
	}
}

class FollowNumber implements Observer {
	public function update (Number $num) {
		$number = $num->getNumber();
		echo "You just entered the number: ".$number."</br>";
	}
}
class Square implements Observer {
	public function update (Number $num) {
		$number = $num->getNumber();
		echo "The square of ".$number." is ".$number*$number."</br>";
	}
}
$number = new Number();
$number->attach(new FollowNumber());
$number->attach(new Square());
$number->detach(new Square());
$number->setNumber(12);

?> 