<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','e_store');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"e_store");
$sql="SELECT * FROM tbl_employee WHERE employee_id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['employee_name'] . "</td>";
    echo "<td>" . $row['designation'] . "</td>";
    echo "<td>" . $row['hired_date'] . "</td>";
    echo "<td>" . $row['salary'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>