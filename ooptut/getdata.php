<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "anlipo";

// Create connection
$conn = @mysql_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_connect_error());
}
$selectdb = mysql_select_db($dbname);
$sql = "SELECT id, NAME1, BONO FROM anliplotteryresult LIMIT 10";
$result = mysql_query($sql);

if (mysql_num_rows($result) > 0) {
    // output data of each row
    while($row = mysql_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["NAME1"]. " " . $row["BONO"]. "<br>";
    }
} else {
    echo "0 results";
}


var_dump(mysql_fetch_assoc($result));

mysql_close($conn);
?>