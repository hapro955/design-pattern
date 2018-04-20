<?php
interface Fuel {
	public function use();
}
class Gasoline implements Fuel {
	public function use () {
		echo "use Gasoline";
	}
}
?>