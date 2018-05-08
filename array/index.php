<?php

$cars = array("Valvo", "Toyota", "Ford");

echo $cars[0]."<br/>";
echo $cars[1]."<br/>";
echo $cars[2]."<br/>";


foreach ($cars as $car) {
	# code...
	echo $car."<br/>";
}


$age = array("Anis"=>40, "Kamrun"=>35, "Rahman"=>30);

echo $age["Anis"]."<br/>";
echo $age["Kamrun"]."<br/>";
echo $age["Rahman"]."<br/>";



foreach ($age as $y => $values) {
	# code...

	echo "The Key is: ". $y . " & The value is : " .$values."<br/>";
}

//$jsons = array();
$jsons = json_encode($age);

echo $jsons;

echo "<br/>";
echo "<br/>";

//var_dump($jsons);

echo "<br/>";
echo "<br/>";
//$justs = json_decode($jsons);

var_dump(json_decode($jsons, true));

?>