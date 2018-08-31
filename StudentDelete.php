<?php
echo "<left>";
$database = "studentdatabase";
$con=mysqli_connect("localhost","root","airbusa380800");
mysqli_select_db($con,$database) or die(mysqli_error());


$sid = $_POST['sid'];


$result = mysqli_query($con,"DELETE FROM Student WHERE Student_ID=$sid");
if(!$result)
{
	echo "Tuple cannot be removed"."<br>";
	echo mysql_error()."<br>";
	echo "<a href='StudentDelete.html'>Insert again</a>"."<br>";
}
else
{
	echo "Tuple removed"."<br>";
	echo "<a href='StudentDB.php'>View the modified list in Student Database</a>";
}
?>
