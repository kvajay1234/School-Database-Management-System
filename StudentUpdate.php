<?php
echo "<left>";
$database = "studentdatabase";
$con=mysqli_connect("localhost","root","airbusa380800");
mysqli_select_db($con,$database) or die(mysqli_error());
$sid = $_POST['sid'];
$substud = $_POST['substud'];
$result = mysqli_query($con,"UPDATE student SET Subject_ID=$substud where Student_ID=$sid");
if(!$result)
{
	echo "Tuple cannot be updated"."<br>";
	echo mysql_error()."<br>";
	echo "<a href='StudentUpdate.html'>Try updating again</a>"."<br>";
}
else
{
	echo "Tuple updated"."<br>";
	echo "<a href='StudentDB.php'>View the modified list in Student Database</a>";
	echo "<br>"."<br>";
}
echo "<br>"."Trigger table";
$result1=mysqli_query($con,"SELECT id, Student_ID, Subject_ID, changedat, action FROM student_audit");
if(!$result1)
{
	echo "Updation Errors"."<br>";
	echo mysql_error()."<br>";
}
else
{
	echo "<table border='1'>
	<tr>

<th> ID</th>

<th>Student ID</th>

<th>Subject ID</th>

<th>changedat</th>
<th>action</th>
</tr>";
	while($row1 = mysqli_fetch_array($result1))
	{
		
		 echo "<tr>";

  echo "<td>" . $row1['id'] . "</td>";

  echo "<td>" . $row1['Student_ID'] . "</td>";

  echo "<td>" . $row1['Subject_ID'] . "</td>";

  echo "<td>" . $row1['changedat'] . "</td>";
  echo "<td>".$row1['action'];
  echo "</tr>";

  }
echo "</table>";
echo "<br>";	
}


?>
