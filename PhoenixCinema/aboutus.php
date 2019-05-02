
<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>

<head>
	<title>Aboutus</title>
	<link rel="stylesheet" type="text/css" href="aboutusStyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

	<div id="header">
		<div id="headertext1">	
			PhoenixCinema
		</div>
          
<div id="logo">
			 <img src="images/logo.png">

		</div>



          
		<div id="header_film">
			<img src="images/film.png">
		</div>

		<div id="headertext2">
			| Ensure your best movie experience
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



	<div id="body">
		<div id="aboutus">
			<div id="title">
				<h1> About PhoenixCinema</h1> <br>
			</div>

			<div id="details">
  				<h4>The First Multiplex Cinema Theatre in Bangladesh</h4>
  				<p> PHOENIXCINEMA  : Show Motion Limited, incorporated in 19th December 2002, pioneered the modern Multiplex Movie Theater industry with PHOENIXCINEMA  brand in Bangladesh. </p> <br> <br>
  				<p> The First Multiplex Cinema Theatre in Bangladesh
            	PHOENIXCINEMA : Show Motion Limited, incorporated in 19th December 2002, pioneered the modern Multiplex Movie Theater industry with PHOENIXCINEMA brand in Bangladesh.
            
            	With lucid vision for the entertainment development in the country, the local and foreign promoters of Show Motion Ltd. started the first international quality state-of-the-art multiplex cinema theatre on 8th October 2004 in Bangladesh at Bashundhara City Mall at Panthapath, Dhaka.</p>

            	<br> <br>

            	<p> PHOENIXCINEMA now has six fully digital cinema screens with state-of-the-art 3D Projection Technology, Silver Screens, Dolby-Digital Sound and stadium seating. With a total capacity of 1,600 seats the theater has large lobby with full concession stands serving pop-corns, soft drinks, ice-creams and many other items. In addition to scheduled shows, PHOENIXCINEMA also caters to special corporate bookings, red-carpet premieres and private events.Visit <a href="PhoenixCinema.php"><em> <strong>www.phoenixcinema.com </strong></em></a>for updated movie schedules and online ticket purchase.</p>

            	<br> <br>

            	<h4>Our Goal</h4>
            	<p>Our goal is to provide the most modern, comfortable, cinema viewing experience of Hollywood and quality Dhallywood releases for a locally adjusted price for our youth and family centered audiences in Dhaka . We aim to be the highest-value entertainment provider in Bangladesh with integrity and professionalism in every step.</p>

        	</div>
		</div>

		<div id="Rightside">
			<div id ="Righttitle">
				<h2> Events</h2>
			</div>

			<div id="image1">
   				<img src="images/image1.jpg">
			</div>

			<div id="image2">
				<img src="images/image2.jpg">
			</div>

			<div id="image3">
				<img src="images/image3.jpg">
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

