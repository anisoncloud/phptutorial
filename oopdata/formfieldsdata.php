<?php
include ('personclass.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
<table>
	<tr>
		<td>Name</td>
		<td><input type="text" name="fullname"></td>
	</tr>
	<tr>
		<td>Phone</td>
		<td><input type="number" name="phone"></td>
	</tr>
	<tr>
		<td>email</td>
		<td><input type="text" name="email"></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="Insert" value="Insert Data"></td>
	</tr>
</table>
</form>
</body>
</html>

<?php
if (isset($_POST['Insert'])) {
	# code...
	$fullname = $_POST['fullname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];

	$datashak = array($fullname, $phone, $email);

	$person = new PersonClass;
	$person->insert($datashak);
	echo var_dump($datashak)."<br/>";
	echo implode(",", $datashak)."<br/>";
}

?>