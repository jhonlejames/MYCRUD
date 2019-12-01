<?php
//including the database connection file
include_once("config.php");
//fetching data in descending order (lastest entry first)
$result = $dbConn->query("SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>	
	<title>Homepage</title>
</head>
<style type="text/css">
	body{
		background-image: linear-gradient(to right top,black,cornflowerblue,skyblue);
		height: 100%;
		padding: 0;
		margin: 0;
		background-position: center;
  		background-size: cover;
	}
</style>
<body>
	<center><br>
<a href="add.html">Add New Data</a> | <a href="logout.php">Logout</a><br>
<br>
	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Name</td>
		<td>News</td>
		<td>Location</td>
		<td>Update</td>
	</tr>
	<?php 	
	while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
		echo "<tr>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['age']."</td>";
		echo "<td>".$row['email']."</td>";	
		echo "<td><a href=\"edit.php?id=$row[id]\">Edit</a> | <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>

	</table>

</body>
</html>