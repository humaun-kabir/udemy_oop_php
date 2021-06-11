<?php include "inc/header.php"; ?>


<?php
class UserData{
	public $user;
	public $userId;

	public function __construct($user,$userId){
		$this->user = $user;
		$this->userId = $userId;

		echo "User name is : {$this->user} and User Id is : {$this->userId}";
	}

	public function __destruct(){
		unset($this->user);
		unset($this->userId);
	}
}

$user = "Humaun";
$userId = "10";

$url = new UserData($user,$userId);

?>






<?php include "inc/footer.php"; ?>