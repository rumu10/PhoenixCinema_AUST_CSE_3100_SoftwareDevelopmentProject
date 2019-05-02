<?php
	include 'config.php';
	/*
		1. Form control
		2. Database insert
	*/
	
?>
<html>
	<head>
		<title>Section C2</title>
	</head>
	<body>
		<form method="post" action="process.php">
			Name: <input type="text" name="fname">
			Age: <input type="text" name="age">
			<input type="submit">
		</form>
	</body>
</html>
<?php
	include 'close.php';
?>









<?php 
/*
$query = "SELECT lid,nick FROM location";
$location_query_result = mysqli_query($conn,$query) or die(mysql_error());
if(mysqli_num_rows($location_query_result) > 0)
{
	while ($row = mysqli_fetch_array($location_query_result))
	{
		
		echo $row['lid']; 
		echo $row['nick']; 
		
	}
}
*/
?>