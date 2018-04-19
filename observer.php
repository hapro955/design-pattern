<?php
interface Observer {
	public function update();
}
interface Subject {
	public function attach(Observer $observer);
	public function detach(Observer $observer);
	public function notify(); 
}
?>