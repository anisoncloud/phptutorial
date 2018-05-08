<?php

$host = "localhost";    /* Host name */
$user = "root";         /* User */
$password = "";         /* Password */
$dbname = "dd3";   /* Database name */

$con = mysql_connect($host, $user, $password) or die("Unable to connect");

// selecting database
$db = mysql_select_db($dbname, $con) or die("Database not found");


/*try{
		
		$con = new PDO("mysql:host={$host};dbname={$dbname}",$user,$password);
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	}catch(PDOException $ex){
		
		die($ex->getMessage());
	}*/