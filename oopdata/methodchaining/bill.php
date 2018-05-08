<?php
/**
* 
*/
class Bill
{
	
	function __construct()
	{
		# code...
	}

	public $dinner = 20;
	public $dessert = 5;
	public $coldDrink = 3;
	public $bill;

	public function dessert($person){
		$this->bill = $this->dessert * $person;
		//echo "dessert";
		return $this;
	}



	public function dinner($person){

		$this->bill = $this->dinner * $person;
		//echo "dinner";
		return $this;
	}

}

$bill = new Bill();
//echo $bill->dinner(2)->bill;
//echo $bill->dessert(2)->bill;

for ($i=0; $i < 10 ; $i++) { 
	# code...
	echo $i++."<br>";
}


?>