<?php
echo "<title> Student Details </title>";
echo "<center>";
$database = "studentdatabase";
$con=mysqli_connect("localhost","root","airbusa380800");
mysqli_select_db($con,$database) or die(mysqli_error());
$result = mysqli_query($con,"SELECT Student_ID, Student_Fname, Student_Lname, Student_DOB, Subject_ID FROM Student");
echo "<u><b>Student Details</b></u>"."<br>"."<br>";

if(!$result)
{
	die(mysqli_error());
}
else
{  
	echo "<table border='1'>
	<tr>

<th>Student ID</th>

<th>Student First Name</th>

<th>Student Last Name</th>

<th>Student Date of Birth</th>
<th>Subject ID Studying</th>
</tr>";

	
	while($row = mysqli_fetch_array($result))
	{
		
		 echo "<tr>";

  echo "<td>" . $row['Student_ID'] . "</td>";

  echo "<td>" . $row['Student_Fname'] . "</td>";

  echo "<td>" . $row['Student_Lname'] . "</td>";

  echo "<td>" . $row['Student_DOB'] . "</td>";
   echo "<td>" . $row['Subject_ID'] . "</td>";
  echo "</tr>";

  }

echo "</table>";
echo "<br>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="StudentInsert.html" method="post">
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
<form action="StudentDelete.html" method="post">
<input type="submit" name = "btnsub1" value="Delete">
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
<form action="StudentUpdate.html" method="post">
<input type="submit" name = "btnsub2" value="Update Details">
</form>
</body>
</html>
<?php 
echo "<a href='Select.html'>Go Back to select page</a>"."<br>";
echo "<br>"."<b>------------------------------------------------------------</b>"."<br>"."<br>";

?>
<?php
$result1 = mysqli_query($con,"call p1()");
echo "<b><i><u>Student List Report Card</u></i></b>"."<br>"."<br>";
if(!$result1)
{
	die(mysqli_error());
}
else
{  
	echo "<table border='1'>
	<tr>

	<th>Student ID</th>

	<th>Department ID</th>

	<th>Department Name</th>

	<th>Overall Grade</th>
	</tr>"; 

	while($row1 = mysqli_fetch_array($result1))
	{
		
		 echo "<tr>";

  echo "<td>" . $row1['Student_ID'] . "</td>";

  echo "<td>" . $row1['Department_ID'] ."</td>";

  echo "<td>" . $row1['Dept_Name'] ."</td>";

  echo "<td>" . $row1['Overall_Grade']."</td>";
  echo "</tr>";

  }
echo "</table>";
echo "<br>";	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="ReportCardInsert.html" method="post">
<input type="submit" name = "btnsub3" value="Insert Report">
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
<form action="ReportCardDelete.html" method="post">
<input type="submit" name = "btnsub4" value="Delete Report">
</form>
</body>
</html>
<?php
echo "<br>";
echo "<a href='Select.html'>Go Back to select page</a>"."<br>";

mysqli_close($con);

?>