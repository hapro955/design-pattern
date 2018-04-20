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

?>