<?php
echo "<left>";
$database = "studentdatabase";
$con=mysqli_connect("localhost","root","airbusa380800");
mysqli_select_db($con,$database) or die(mysqli_error());
$sfname = $_POST['sfname'];
$slname = $_POST['slname'];
$sid = $_POST['sid'];
$sdob =  $_POST['sdob'];
$substud = $_POST['substud'];
$result = mysqli_query($con,"INSERT INTO Student VALUES($sid,'$sfname','$slname','$sdob','$substud')");
if(!$result)
{
	echo "Tuple cannot be inserted"."<br>";
	echo mysql_error()."<br>";
	echo "<a href='StudentInsert.html'>Insert again</a>"."<br>";
}
else
{
	echo "Tuple inserted"."<br>";
	echo "<a href='StudentDB.php'>View the modified list in Student Database</a>";
}
?>
