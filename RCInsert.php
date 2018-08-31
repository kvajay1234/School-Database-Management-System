<?php
echo "<center left>";
$database = "studentdatabase";
$con=mysqli_connect("localhost","root","airbusa380800");
mysqli_select_db($con,$database) or die(mysqli_error());
$sid = $_POST['sid'];
$did = $_POST['did'];
$dname = $_POST['dname'];
$ogr =  $_POST['ogr'];
$result = mysqli_query($con,"INSERT INTO report VALUES($sid,$did,'$dname','$ogr')");
if(!$result)
{
	echo "Tuple cannot be inserted"."<br>";
	echo mysql_error()."<br>";
	echo "<a href='ReportCardInsert.html'>Insert again</a>"."<br>";
}
else
{
	echo "Tuple inserted"."<br>";
	echo "<a href='StudentDB.php'>View the modified list in Student Database</a>";
}
?>
