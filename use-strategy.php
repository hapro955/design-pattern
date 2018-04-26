<?php
interface FlyBehavior {
	public function fly();
}

interface SwimBehavior {
	public function swim();
}

class FlyWithWing implements FlyBehavior {
	public function fly () {
		echo "fly hight</br>";
	}
}

class FlyNoWay implements FlyBehavior {
	public function fly () {
		echo "no fly</br>";
	}
}

class SwimWithDuckLeg implements SwimBehavior {
	public function swim () {
		echo "dive deep</br>";
	}
}

class SwimNoWay implements SwimBehavior {
	public function swim () {
		echo "no swim</br>";
	}
}

abstract class Bird {
	private $flyBehavior;
	private $swimBehavior;

	public abstract function display();

	public function setFlyBehavior (FlyBehavior $fb) {
		$this->flyBehavior = $fb;
	}
	public function performFly () {
		$this->flyBehavior->fly();
	}

	public function setSwimBehavior (SwimBehavior $sw) {
		$this->swimBehavior = $sw;
	}
	public function performSwim () {
		$this->swimBehavior->swim();
	}
}

class Penguins extends Bird {
	public function display () {
		echo "I am a Penguin";
	}
}
class Sparrows extends Bird {
	public function display () {
		echo " I am Jack Sparrow</br>";
	}
}

$sparrow = new Sparrows();
$sparrow->display();

$sparrow->setFlyBehavior(new FlyWithWing);
$sparrow->performFly();

$sparrow->setSwimBehavior(new SwimNoWay);
$sparrow->performSwim();
?>