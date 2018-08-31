<?php
echo "<left>";
$database = "studentdatabase";
$con=mysqli_connect("localhost","root","airbusa380800");
mysqli_select_db($con,$database) or die(mysqli_error());
$tfname = $_POST['tfname'];
$tlname = $_POST['tlname'];
$tid = $_POST['tid'];

$subteach = $_POST['subteach'];
$result1 = mysqli_query($con,"INSERT INTO Teacher VALUES($tid,'$tfname','$tlname','$subteach')");
if(!$result1)
{
	echo "Tuple cannot be inserted"."<br>";
	echo mysql_error()."<br>";
	echo "<a href='TeacherInsert.html'>Insert again</a>"."<br>";
}
else
{
	echo "Tuple inserted"."<br>";
	echo "<a href='TeacherDatabase.php'>View the modified list in Student Database</a>";
}
?>
