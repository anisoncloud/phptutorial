<?php
include ("myclass.php");
/**
* 
*/
class MyAdmin extends MyClass
{
	
	/*function __construct()
	{
		# code...
	}*/
}




$userName = "Anisur Rahman";
$userId = "20";
$person = new MyClass($userName, $userId);
$person->showdetails();

$person->user = "Ashad";
$person->id = "40";
$person->showdetails();

$userName = "Rahman";
$userId = "30";

$adm = new MyAdmin($userName, $userId);
$adm->showdetails();

?>