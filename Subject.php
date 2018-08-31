
<?php
echo "<left>";
$database = "studentdatabase";
$con=mysqli_connect("localhost","root","airbusa380800");
mysqli_select_db($con,$database) or die(mysqli_error());
$result = mysqli_query($con,"SELECT Subject_ID, Subject_Name, Department_ID FROM Subject");

if(!$result)
{
	die(mysqli_error());
}
else
{   
	echo "<table border='1'>
	<tr>

<th>Subject ID</th>

<th>Subject Name</th>

<th>Department ID</th>


</tr>";

	
	while($row = mysqli_fetch_array($result))
	{
		
		 echo "<tr>";

  echo "<td>" . $row['Subject_ID'] . "</td>";

  echo "<td>" . $row['Subject_Name'] . "</td>";

  echo "<td>" . $row['Department_ID'] . "</td>";

 
  echo "</tr>";

  }

echo "</table>";

}
mysqli_close($con);
?>