<?php
include 'mobile.php';

include 'laser.php';

include 'projector.php';


/**
* 
*/
class Galaxy extends Mobile
{
	
	function __construct()
	{
		# code...
	}
use Laser, projector{

	Laser:: power insteadof projector;
	projector :: power as Ppower;
}

	
}


//$obj = new Galaxy;

//$obj->battery();

$obj1 = new Galaxy;
$obj1-> power();
$obj1->battery();
$obj1->range();
$obj1->power();
$obj1->Ppower();
?>