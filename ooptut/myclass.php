<?php
/**
* 
*/
class MyClass
{
	public $user;
	public $id;
	const NAME = "Anisur Rahman";
	
	public function __construct($userName, $userId)
	{
		# code...
		$this->user = $userName;
		$this->id = $userId;

		
	}

	public function showdetails(){
		
		echo "User name is :  ". $this->user . "  Id is : ". $this->id. "<br/>";
	}

	public function __destruct(){
		unset($this->user);
		unset($this->user);
	}
}


?>