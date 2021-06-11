<?php include "inc/header.php"; ?>


<?php
class UserData{
	public $user;
	public $userId;
	const NAME = "sazzad hossain";
	public static $age = "27";

	public function __construct($user,$userId){
		$this->user = $user;
		$this->userId = $userId;

		echo "User name is : {$this->user} and User Id is : {$this->userId}";
	}

	public function display(){
		echo "Bhai name is :".UserData::NAME."<br>";
		echo "Age is :".self::$age;
	}

	public function __destruct(){
		unset($this->user);
		unset($this->userId);
	}
}

$user = "Humaun";
$userId = "10";

$url = new UserData($user,$userId);
echo "<br>";
UserData::display();


?>






<?php include "inc/footer.php"; ?>