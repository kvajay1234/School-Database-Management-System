<?php
$database = "studentdatabase";
$con=mysqli_connect("localhost","root","airbusa380800");
mysqli_select_db($con,$database) or die(mysqli_error());
$result = mysqli_query($con,"SELECT Teacher_ID, Teacher_Fname, Teacher_Lname, Subject_ID FROM Teacher");

if(!$result)
{
	die(mysqli_error());
}
else
{   
	echo "<table border='1'>
	<tr>

<th>Teacher ID</th>

<th>Teacher First Name</th>

<th>Teacher Last Name</th>

<th>Subject ID Teaching</th>
</tr>";

	
	while($row = mysqli_fetch_array($result))
	{
		
		 echo "<tr>";

  echo "<td>" . $row['Teacher_ID'] . "</td>";

  echo "<td>" . $row['Teacher_Fname'] . "</td>";

  echo "<td>" . $row['Teacher_Lname'] . "</td>";

   echo "<td>" . $row['Subject_ID'] . "</td>";
  echo "</tr>";

  }

echo "</table>";

}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="TeacherInsert.html" method="post">
<input type="submit" name = "btnsub" value="Insert Details">
</form>
</body>
</html>
<?php
echo "<br>";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="TeacherDelete.html" method="post">
<input type="submit" name = "btnsub1" value="Delete">
</form>
</body>
</html>
<?php
echo "<br>";
?>
<?php

echo "<br>";
echo "<a href='Select.html'>Go Back to select page</a>"."<br>";
mysqli_close($con);
?>