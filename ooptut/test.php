<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "anlipo";

$conn = @mysql_connect($hostname, $username, $password);

if (!$conn) {
	# code...

	die("Could not connect to Database". mysql_error());
}else{
	echo "Connection Success. <br/>";
}

$selectdb = mysql_select_db($dbname);
if (!$selectdb) {
	# code...
	die("Could not select Database");
}else{
	echo "Database selected successfully<br/>";
}

$query = "SELECT * FROM anliplotteryresult limit 10";
$result = mysql_query($query);

if (mysql_fetch_row($result)>0) {
	# code...

	while ($row = mysql_fetch_assoc($result)) {
		# code...

		echo "ID: ".$row['BONO']."<br/>";
	}
}


?>




























<?php
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "anlipo";

$conn = @mysql_connect($servername, $username, $password);

if (!$conn) {
	# code...
	die("Connection failed to". mysql_error());
}

$selectdb =  mysql_select_db($dbname);

if (!$selectdb) {
	# code...

	die("Cannot select Database". mysql_error());
}

$sql = "SELECT* FROM anliplotteryresult limit 10";
$result = mysql_query($sql);

if (mysql_num_rows($result)>0) {
	# code...
	while ($row = mysql_fetch_assoc($result)) {
		# code...
		echo "id:".$row['id'];
	}
}

mysql_close($conn);
*/

?>