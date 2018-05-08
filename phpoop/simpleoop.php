<?php
class MyClass{
	
	


	public $prop1 = "I am a property";
	
	public function __construct(){
		echo 'The class is "' , __CLASS__ , '"was initiated.<br/>';
	}
	
	
	
	public function setProperty($newval){
		$this->prop1 = $newval;
	}
	
	public function getProperty(){
		return $this->prop1.'<br/><br/>';
	}
	
}


$obj = new MyClass;
$obj2 = new MyClass;

echo $obj->getProperty();
//echo $obj2->getProperty();

//$obj->setProperty("I m trying to do");
//$obj2->setProperty("This is Object 2");

//echo $obj->getProperty();
//echo $obj2->getProperty();


//echo $obj->prop1;

//var_dump($obj);

?>