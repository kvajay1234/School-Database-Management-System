<?php

$database = "studentdatabase";
$con=mysqli_connect("localhost","root","airbusa380800");
mysqli_select_db($con,$database) or die(mysqli_error());
$result = mysqli_query($con,"SELECT Department_ID, Dept_Name, Dept_Location FROM Department");

if(!$result)
{
	die(mysqli_error());
}
else
{   
	echo "<table border='1'>
	<tr>

<th>Department ID</th>

<th>Department Name</th>

<th>Department Location</th>


</tr>";

	
	while($row = mysqli_fetch_array($result))
	{
		
		 echo "<tr>";

  echo "<td>" . $row['Department_ID'] . "</td>";

  echo "<td>" . $row['Dept_Name'] . "</td>";

  echo "<td>" . $row['Dept_Location'] . "</td>";

 
  echo "</tr>";

  }

echo "</table>";

}
mysqli_close($con);
?>