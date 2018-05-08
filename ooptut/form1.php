<?php
/**
* 
*/
class MyPerson
{
	
	public $a;
	public $b;

	function __construct($a, $b)
	{
		echo "Constractor Created";
		# code...
		$this->a = $a;
		$this->b = $b;
	}

	public function showDetails(){
		echo "My name is :".$this->a." My Age is: ". $this->b;
	}	

}


$person = new MyPerson("Anisur Rahman", "40");
//$person->fullname = "Anisur Rahman";
//$person->age ="41";
$person->showDetails();

?>