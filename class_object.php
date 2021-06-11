<?php include "inc/header.php"; ?>


<?php
	class Person{
		public $name;

		public function personName(){
			echo "Person Name is :". $this->name;
		}
	}

	$object = new person();
	$object->name = "Humaun Kabir";
	$object->personName();
?>








<?php include "inc/footer.php"; ?>