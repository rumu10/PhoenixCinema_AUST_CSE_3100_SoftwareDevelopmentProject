<?php 

include 'config.php';
	
	$email=$_POST['email'];
	$password=$_POST['password'];
	

	$email=stripcslashes($email);
	$password=stripcslashes($password);

	$email=mysql_real_escape_string($email);
	$password=mysql_real_escape_string($password);
	

	//mysql_connect("@localhost","root"," ");
	//mysql_select_db("PhoenixCinema");
	
	$sql = mysql_query("select * from customer where email='$email' and password='$password'")
	       or die ("failed".mysql_error());
	
   $row=mysql_fetch_array($sql);
    if ($row['email']==$username && $row['password']==$password) {
    	 echo "Okay".$row['email'];
    } else {

    	echo "failed";
    }









	include 'close.php';
?>