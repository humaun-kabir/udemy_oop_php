<?php include "inc/header.php"; ?>


<?php
class Person{
	public $name;

	public function __construct($n){
		$this->name = $n;
	}

	public function personDetails(){
		echo "Person Name : {$this->name}";
	}
}

$object = new Person("Humaun Kabir");

$object->personDetails();

?>
















<?php include "inc/footer.php"; ?>