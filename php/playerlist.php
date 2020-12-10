<?php
include 'header.php';

$link = mysqli_connect("localhost", "root", "", "hockeystats");
 

if($link === false){
    die("Unable to connect to Database. " . mysqli_connect_error());
}

$query = "SELECT * FROM players";

$result = mysqli_query($link, $query);



?>

<html> 
	<head> 
		<title>View Players</title> 
	</head> 
	<body> 
	<table> 
	<tr> 
		<th colspan="6"><h2>Players</h2></th> 
		</tr> 
			  <th> First Name </th> 
			  <th> Last Name </th> 
			  <th> Goals </th> 
			  <th> Assists </th>
			  <th>Total Points</th> 
			  <th> Season </th> 
			  
		</tr> 
		
		<?php while($rows = mysqli_fetch_assoc($result)) 
		{ 
			$goals = $rows['goals'];
			$assists = $rows['assists'];
		?> 
		<tr> 
			<td><?php echo $rows['first_name']; ?></td> 
			<td><?php echo $rows['last_name']; ?></td> 
			<td><?php echo $rows['goals']; ?></td> 
			<td><?php echo $rows['assists']; ?></td>
			<td><?php echo $goals + $assists; ?></td>
			<td><?php echo $rows['season']; ?></td> 
		</tr> 
	<?php 
               } 
          ?> 

	</table> 
	</body> 
	</html>
