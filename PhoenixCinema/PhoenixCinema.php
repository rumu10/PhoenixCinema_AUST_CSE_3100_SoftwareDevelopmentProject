<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>

<head>
	<title> PhoenixCinema </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
	<div id="header">
		<div id="headertext1">	
			<strong>PhoenixCinema</strong>
		</div >

		<div id="logo">
			 <img src="images/logo.png">

		</div>

		<div id="header_film">
			<img src="images/film.png">
		</div>

		<div id="headertext2">
			|Ensure Your Best Movie Experience
		</div>
	</div>

	<div id="menu">
	 
		<ul>
			<li> <a href="PhoenixCinema.php">Home</a> </li>
			<li> <a href="#">Movies</a> 
    			<ul>  


    			 <?php
				$query = "SELECT * FROM status ";
				$result = mysqli_query($conn,$query) or die(mysql_error());

				if(mysqli_num_rows($result) > 0)
				{
					while ($row = mysqli_fetch_array($result))
					{
						$name=$row['status_name'];

		            ?>
					     
					<li><a href="NowShowing.php?name=<?php echo $name; ?>"><?php echo $row['status_name'];?> </a> </li>
	
      							
			   <?php
			}
			
		}
	
		?>
      				
    			</ul>
    		</li>
    		<li> <a href="ShowTime.php">Show times</a></li>
			<li> <a href="TicketPrice.php">Ticket Price</a> </li>
			<li> <a href="Contact.php">Contact</a></li>
			<li> <a href="Member.php">Member</a></li>
			<li> <a href="aboutus.php">About Us</a></li>
		</ul>

	</div>



	<div class="slider">
 
 		<figure>
			<div class="slide">  
				<img src="images/i1.jpg">
 			</div>

			<div class="slide">  
				<img  src="images/i2.jpg">
	 		</div>

			<div class="slide">
				<img src="images/i3.jpg">
			</div>

			<div class="slide">  
				<img src="images/i4.jpg">
	 		</div>

			<div class="slide">  
				<img src="images/i5.jpg">
	 		</div>
	 	</figure>
	</div>

	<div id="body">	
		<div id="nextArrival">	
			<div id="naText">

        <a href="NowShowing.php?value=Next Arrival"> Next Arrival</a>
           

</div>
		</div>

		<div id="NowShowing">	
			<div id="nsText">
				<a href="NowShowing.php?value=Now Showing"> Now Showing </a>
			</div>
		</div>

		<div id="Archive">
			<div id="aText">
				  <a href="NowShowing.php?value=Archive"> Archive </a>
			</div>
		</div>
	
		<div id ="NextArrivalimage">
			<div id="naimage1"></div>
 			<div id="naimage2"></div>
		</div>

		<div id="NowShowingimage">
	  		<div id="nsimage1"></div>
	 		<div id="nsimage2"></div>
		</div>

		<div id="Archiveimage">
			<div id="arcimage1"></div>
 			<div id="arcimage2"></div>
		</div>

		<div id="nextArrivalshowtime">
			<div id="timetext1">
				
			</div>
		</div>

		<div id="NowShowingshowtime">
			<div id="timetext2">
				
			</div>
		</div>

		<div id="Archiveshowtime">
			<div id="timetext3">	
			
			</div>
		</div>
	</div>


<div id="downinfo">

<div class="header" id="headline1">
	
<strong>Contact Us</strong>


</div>
<div class="header" id="headline2">
	
<strong>More at Cineplex</strong>


</div>

<div class="header" id="headline3">
	
<strong>Our Partners</strong>

</div>




<div class="content" id="col1">
	
        <p><strong>Show Motion Limited </strong> <br/> <br>
            		Level 8, Bashundhara City <br />
                        13/3 Ka, Panthapath, Tejgaon<br />
                        Dhaka 1205, Bangladesh. </p> <br>
                        <hr> <br>
                        <span>Mobile:</span> <br>
                        <p>(+88) 01755665544 </p> <br>
                          <hr> <br>
                        <span>Phone:</span> <br>
                        <p>(+88) 9138260, 9134098 </p>
                        <p>(+88) 9141332, 9140819</p> <br>
                        <hr> <br>
                        <span>Email Address:</span>
                        <a href="PhoenixCinema.html"> info@phoenixcinema.com</a>

</div>

<div class="content" id="col2">
	


   <ul >
              
              <li>Food and Drink</li> <hr> <br>
              <li>Party Booking</li> <hr> <br>
              <li>Stars and Strollers</li> <hr> <br>
              <li>Accessibility Policy</li> <hr> <br>
              <li>Access 2 Program</li><hr> <br>
              <li>Accessibility Policy</li> <hr> <br>
              <li>Corporate Meetings & Screenings</li> <hr> <br>
              <li>School Events & Screenings</li> <hr><br>
              
    </ul>
</div>



<div class="content" id="col3">
	
<ul>
	
	<li>RadioToday</li> <hr> <br>
	<li>Basundhara Group</li> <hr> <br>
	<li>Pran Group</li>  <hr><br>
	<li>Pepsi</li> <hr> <br>
	<li>The Daily Star</li><hr> <br>
	<li>Trust Bank Limited</li><hr> <br>

</ul>


 </div>


	
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

<style type="text/css">
	
	#nextArrivalshowtime {

	border: 1px ;
	height: 40px;
	width: 300px;
	background-color: #4CAF50;
	display: inline-block;
	align-content: center;
	margin-top: 40px;
	border-radius: 15px;
}
</style>