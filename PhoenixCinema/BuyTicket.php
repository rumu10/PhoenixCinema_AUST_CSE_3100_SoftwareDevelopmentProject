<!DOCTYPE html>

<?php
	include 'config.php';

	session_start();

	$sql1 = "SELECT customer_id FROM customer WHERE email = '{$_SESSION['sess_email']}'";
	$result1 = mysqli_query($conn, $sql1);

           if(mysqli_num_rows($result1)>0)
           {
              while ($row = mysqli_fetch_array($result1))
					{
						$cust=$row['customer_id'];
		            }
		    }
?>



<html>
<head>
	<title>Log In </title>
	<link rel="stylesheet" href="BuyTicket.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>


	<div id="menu">
	 <div id="content">
		<ul>
			<li><a href="PhoenixCinema.php">Home</a> </li>
    		<li><a href="#">Profile</a> </li>
    		<li><a href="#">Setting</a> </li>
    		<li><a href="PhoenixCinema.php">Log Out</a> </li>
			
		</ul>
		</div>


		<div id="title">
			
PhoenixCinema

		</div>

	</div>




<div class="slider">
 
 		<figure>
			<div class="slide">  
				<img src="images/des.jpg">
 			</div>

			<div class="slide">  
				<img  src="images/bb.jpg">
	 		</div>

			<div class="slide">
				<img src="images/ww.jpg">
			</div>

			<div class="slide">  
				<img src="images/jl.jpg">
	 		</div>

			<div class="slide">  
				<img src="images/cartoon.jpg">
	 		</div>
	 	</figure>
	</div>

  <div id="main" >
  	
  	<div id="head">
  		
       <div id="text">Buy Ticket</div>

  	</div>

  	<form id="options" action="confirmticket.php" method="POST">
  	<select name="movienames">
  	<?php
		$sql = "SELECT movie_name FROM movies";
		$movie_query_result = mysqli_query($conn,$sql) or die(mysql_error());
		if(mysqli_num_rows($movie_query_result) > 0)
		{
			while ($row = mysqli_fetch_array($movie_query_result))
			{?>	
										
					<option value="<?php echo $row['movie_name'] ?>" type = "button" ><?php echo $row['movie_name']; ?></option>
				
			<?php
			$selectedmovie = $_POST['movienames'];
			
			}
		}
	?>
	
	</select>
	
	<select name="movietime" >	

	<?php 
			
			

			$sql = "SELECT ShowTime FROM showtime";
			$movie_query_result = mysqli_query($conn,$sql) or die(mysql_error());
			if(mysqli_num_rows($movie_query_result) > 0)
			{
				while ($row = mysqli_fetch_array($movie_query_result))
				{?>	
											
					<option value="<?php echo $row['ShowTime']; ?>" type = "button" ><?php echo $row['ShowTime']; ?></option>
					
				<?php
				}
			}
		
		
	?>
	</select>
	
	<select name="seatcategory">
	<?php 
		$selectedmovietime = $_POST['movietime'];
		$sql = "SELECT tc_name FROM ticketcategory";
		$category_query_result = mysqli_query($conn,$sql) or die(mysql_error());
		if(mysqli_num_rows($category_query_result) > 0)
		{
			while ($row = mysqli_fetch_array($category_query_result))
			{?>	
										
					<option value="<?php echo $row['tc_name']; ?>" type = "button" ><?php echo $row['tc_name']; ?></option>
				
			<?php
				$selectedcategory = $_POST['seatcategory'];
				
			}
		}
	?>
	</select>
	
	<input type="number" name="quantity" min="1" max= "4" >

	<button id="confirm" type="submit">Confirm</button>
	</form>

  	</div>
  


<div id="footer">
		<footer>
			<div id="f1">
				PhoenixCinema BD 2017 &copy; All right reserved.  
			</div>

			<a href="#" class="fa fa-facebook"></a>
			<a href="#" class="fa fa-twitter"></a>
			<a href="#" class="fa fa-google"></a>
			<a href="#" class="fa fa-linkedin"></a>
			<a href="#" class="fa fa-youtube"></a>

		</footer>
	</div>

</body>
</html>

<?php
		include 'close.php';
?>


<style type="text/css">*{
	margin: 0px;
	padding: 0px;
	list-style: none;
	text-decoration: none;
}


.slider{
	overflow: hidden;
	height:600px;
	width:100%;
}

.slider figure div{
	width: 20%;
	float: left;
}

.slider figure img{
	width:63%;
    float:left;
	margin-left:500px;
	margin-top: 30px;

}

.slider figure{
	position: relative;
	width: 500%;
	margin: 0;
	animation: 20s slidy infinite;
}

@keyframes slidy{
	0%{
		left: 0%
	}

	10%{
		left: 0%;
	}

	12%{
		left: -100%;
	}

	22%{
		left: -100%;
	}

	24%{
		left: -200%;
	}

	34%{
		left: -200%;
	}

	36%{
		left: -300%;
	}

	46%{
		left: -300%;
	}

	48%{
		left: -400%;
	}

	58%{
		left: -400%;
	}

	60%{
		left: -300%;
	}

	70%{
		left: -300%;
	}

	72%{
		left: -200%;
	}

	82%{
		left: -200%;
	}

	84%{
		left: -100%;
	}

	94%{
		left: -100%;
	}

	96%{
		left: 0%;
	}

	100%{
		left: 0%;
	}
}




#menu {

width: 100%;
background-color: #006635;
display: inline-block;
height: 80px;
opacity: .9;


}

div#title {

	width: 400px;
	display: inline-block;
	color: white;
	font-family: "Chiller";
  margin-left: 50px;
  margin-top: 18px;
  font-size:50px;
}

div#content {


	
	width: 400px;
	float: right;

}

#content ul {

	list-style: none;
	
}

#content ul li {

	float: left;
	width: 100px;
	height: 80px;
	line-height: 80px;
	color: white;
	opacity: .7;

}

#content ul li a {

	color: white;
	margin-left: 30px;
	display: block;
	border-radius: 10px;
	

}

body {

	background-image: url(images/loginbg.jpg);
}



#content ul li:hover {
	background-color:#00b33c;
}


div#main {



	width: 300px;
	height:420px;
margin-left:50px;
	margin-top: -620px;
	position: relative;
	z-index: 1;
}


#head {

	width: 300px;
	height: 60px;
	background-color: #006635;
	border-radius: 10px;
	text-align: center;

}

#options {

width: 300px;
height: 360px;
opacity: .7;
background-color: black;




}

select {

	height: 30px;
	width: 150px;
	margin-top: 50px;
	margin-left: 80px;
	color: none;
	display: inline-block;
}

input {

	height: 20px;
	width: 150px;
	margin-top: 50px;
	margin-left: 80px;
	color: none;
}


#confirm {


	height: 40px;
	width: 90px;
	background-color:#006635;
	margin-left: 100px;
	margin-top: 50px;
	border-radius: 15px;
	color: white;
}

.done
{
	height: 20px;
	width: 20px;
	background-color:#006635;
	margin-left: 10px;
	margin-top: 5px;
	border-radius: 15px;
	color: white;
	float:left;
}

#text  {

	
	color: white;
	text-align: center;
	margin-top:50px; 
	position: relative;
	font-size: 20px;
	opacity: .9;
}



#footer {

	border: none;
	width: 100%;
}

footer {
	font-size: 20px;
	padding: 1em;
	text-align: center;
	background-color:#004d28;
	margin-top: 100px;
	text-align: left;
	box-sizing: 100%;
}

#f1 {
	display: inline-block;
}

.fa {
	display: inline-block;
	float: right;
    font-size: 30px;
    width: 25px;
    padding: 6px;
    margin-right: 5px;
    text-align: center;
    text-decoration: none;
    border-radius: 50%;
}

.fa: hover {
    opacity: 0.7;
}

.fa-facebook {
    background: #3B5998;
    color: white;
}

.fa-twitter {
    background: #55ACEE;
    color: white;
}

.fa-google {
  	background: #dd4b39;
  	color: white;
}

.fa-linkedin {
  	background: #007bb5;
  	color: white;
}

.fa-youtube {
  	background: #bb0000;
  	color: white;
}
</style>