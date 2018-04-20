<?php
interface Fuel {
	public function use();
}
class Gasoline implements Fuel {
	public function use () {
		echo "use Gasoline";
	}
}
class OilDiesel implements Fuel {
	public function use () {
		echo "use OilDiesel";
	}
}
?>