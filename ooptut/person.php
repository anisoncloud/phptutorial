<?php
/**
* 
*/
class Person
{
	public $name;
	public $age;


	function __construct()
	{
		# code...
	}

	public function showdetails(){
		echo "Person name is: ".$this->name. "  and Age is : ".$this->age."<br/>";
	}



}




$pers = new Person;
$pers->name = "Anisur Rahman";
$pers->age = "40";
$pers-> showdetails();

$cod = new Person;
$cod->name = "Abdur Rahman";
$cod->age = "30";
$cod->showdetails();

?>