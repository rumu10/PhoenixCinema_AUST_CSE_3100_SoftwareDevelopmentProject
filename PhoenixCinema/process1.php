<?php 
	include 'config.php';
	
	//echo $_GET['fname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	

	$email=stripcslashes($email);
	$password=stripcslashes($password);

	$email=mysql_real_escape_string($email);
	$password=mysql_real_escape_string($password);
	

	//echo "<br>";
	//echo $_GET['age'];
	//$age = $_POST['age'];
	
	$sql = "select * from customer where email='$email' and password='$password';"
	
   $row=mysql_fetch_array($sql);
    if ($row['email']==$username) && $row['password']==$password) {
    	 echo "Okay".$row['email'];
    } else {

    	echo "failed";
    }









	include 'close.php';
?>