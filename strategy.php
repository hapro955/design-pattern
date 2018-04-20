<?php
interface Fuel {
	public function material();
}
class Gasoline implements Fuel {
	public function material () {
		echo "use Gasoline";
	}
}
class OilDiesel implements Fuel {
	public function material () {
		echo "use OilDiesel";
	}
}
class Electricity implements Fuel {
	public function material () {
		echo "use Electricity";
	}
}

abstract class Car {
	protected $fuel;
	abstract function display();
	public function UseFuel(Fuel $fuel) {
		$this->fuel->material();
	}
}
?>