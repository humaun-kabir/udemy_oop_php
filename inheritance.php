<?php include "inc/header.php"; ?>


<?php
class  UserData{
	public $user;
	public $userId;

	public function __construct($user,$userId){
		$this->user = $user;
		$this->userId = $userId;
	}

	public function display(){
		echo "User name is {$this->user} and User id is {$this->userId}";
	}
}

class admin extends UserData{
	public $level;
	public function display(){
		echo "User name is {$this->user} and User id is {$this->userId} and User level is {$this->level}";
	}
}

$user = "Arian";
$userId = "28";

$url = new UserData($user,$userId);
echo "<br>";
$url->display();
echo "<br>";

$user = "humaun";
$userId = "32";
$ad = new admin($user,$userId);
$ad->level = "administrator";
$ad->display();


?>






<?php include "inc/footer.php"; ?>