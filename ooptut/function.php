<?php
/**
* 
*/
class MyCalculation
{
	
	function __construct()
	{
		# code...
	}

	public function add($a, $b){
		echo "The Sum is : ". ($a+$b). "<br/>";
	}
	public function sub($a, $b){
		echo "The Sub is : ". ($a-$b). "<br/>";
	}
	public function multi($a, $b){
		echo "The Mul is : ". ($a*$b). "<br/>";
	}
	public function div($a, $b){
		echo "The Div is : ". ($a/$b);
	}
}

?>