<?php include "inc/header.php"; ?>


<?php
	class Person{
		public $name;
		public $id;

		public function __construct($name){
			$this->name = $name;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function __destruct(){
			if (!empty($this->id)) {
				echo "Saving Person";
			}
		}
	}

	$object = new Person("Humaun Kabir");
	$object->setId(12);
	unset($object);



?>
















<?php include "inc/footer.php"; ?>