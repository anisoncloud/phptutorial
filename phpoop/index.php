<?php error_reporting(0);
include_once 'dbMySql.php';
$con = new DB_con();
$table = "users";
$res=$con->select($table);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP Data Insert and Select Data Using OOP - By Cleartuts</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<center>

<div id="header">
	<div id="content">
    <label>PHP Data Insert and Select Data Using OOP - By Cleartuts</label>
    </div>
</div>
<div id="body">
	<div id="content">
    <table align="center">
    <tr>
    <th colspan="3"><a href="add_data.php">add data here...</a></th>
    </tr>
    <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>City</th>
    </tr>
    <?php
	while($row=mysql_fetch_row($res))
	{
			?>
            <tr>
            <td><?php echo $row[1]; ?></td>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?></td>
            </tr>
            <?php
	}
	?>
    </table>
    </div>
</div>

<div id="footer">
	<div id="content">
    <hr /><br/>
    <label>for more tutorials and blog tips visit : <a href="http://cleartuts.blogspot.com">cleartuts.com</a></label>
    </div>
</div>

</center>
</body>
</html>