<?php
echo "<left>";
$database = "studentdatabase";
$con=mysqli_connect("localhost","root","airbusa380800");
mysqli_select_db($con,$database) or die(mysqli_error());

$tid = $_POST['tid'];


$result = mysqli_query($con,"DELETE FROM Teacher WHERE Teacher_ID=$tid");
if(!$result)
{
	echo "Tuple cannot be removed"."<br>";
	echo mysql_error()."<br>";
	echo "<a href='TeacherDelete.html'>Insert again</a>"."<br>";
}
else
{
	echo "Tuple removed"."<br>";
	echo "<a href='TeacherDatabase.php'>View the modified list in teacher Database</a>";
}

?>
