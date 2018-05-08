<?php
$array = array('a'=>1, 'b'=>2, 'c'=>3, 'd'=>array('e'=>4, 'f'=>5));

//var_dump($array);

$serialize = serialize($array);

echo $serialize;

$unse = unserialize($serialize);

echo $unse['a'];

?>