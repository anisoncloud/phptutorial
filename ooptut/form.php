<?php
include "function.php";
?>

<form action="" method="post">
	
<table>
	<tr>
		<td>Number One</td>
		<td><input type="number" name="numberone"></td>
	</tr>
<tr>
		<td>Number Two</td>
		<td><input type="number" name="numbertwo"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="calculation" value="Calculation"></td>
	</tr>
</table>

</form>

<?php

if (isset($_POST['calculation'])) {
	# code...

	$numone = $_POST['numberone'];
	$numtwo = $_POST['numbertwo'];

	if (empty($numone) or empty($numtwo)) {
		# code...

		echo "Please input two number in those fields";
	}

	$sum = new MyCalculation;
	$sum->add($numone, $numtwo);
	$sum->sub($numone, $numtwo);
	$sum->multi($numone, $numtwo);
	$sum->div($numone, $numtwo);
}

?>