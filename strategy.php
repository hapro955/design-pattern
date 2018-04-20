<?php
interface Fuel {
	public function material();
}
class Gasoline implements Fuel {
	public function material () {
		echo "use Gasoline</br>";
	}
}
class OilDiesel implements Fuel {
	public function material () {
		echo "use OilDiesel</br>";
	}
}
class Electricity implements Fuel {
	public function material () {
		echo "use Electricity</br>";
	}
}

abstract class Car {
	protected $fuel;
	abstract function display();
	public function UseFuel () {
		$this->fuel->material();
	}
}

class GasolineCar extends Car { 
	public function __construct () {
		$this->fuel = new Gasoline();
	}
	public function display () {
		echo "this is Gasoline Car</br>";
	}
}
class ElectricityCar extends Car {
	public function __construct () {
		$this->fuel = new Electricity();
	}
	public function display () {
		echo "this is Electricity Car</br>";
	}
}

$gasolineCar = new GasolineCar();
$gasolineCar->display();
$gasolineCar->UseFuel();

$electricityCar = new ElectricityCar();
$electricityCar->display();
$electricityCar->UseFuel();
?>