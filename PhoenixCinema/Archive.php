<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>

<head>
	<title> PhoenixCinema </title>
	<link rel="stylesheet" type="text/css" href="Archive.css">
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



	<div id="middle">
		<div id="pagetitle">
			<h1>
				Archive
			</h1>
		</div>

		<div id="title1">
			<a href="#"> Logan [2D] </a>
		</div>
		<div id="title2">
			<a href="#"> Green Lantern [3D] </a>
		</div>
		<div id="title3">
			<a href="#"> Avater2:War of the planets [3D] </a>
		</div>
		<div id="title4">
			<a href="#"> Super Bean[2D] </a>
		</div>

		<div class="poster poster1">
			<img src="images/logan.jpg" width="150" height="200">
		</div>
		<div class="poster poster2">
			<img src="images/loginimg2.jpg" width="150" height="200">
		</div>
		<div class="poster poster3">
			<img src="images/avater.jpg" width="150" height="200">
		</div>
		<div class="poster poster4">
			<img src="images/superbean.jpg" width="150" height="200">
		</div>

		<button class="button button1" style="vertical-align:middle">
			<span>More</span>
		</button>
		<button class="button button2" style="vertical-align:middle">
			<span>More</span>
		</button>
		<button class="button button3" style="vertical-align:middle">
			<span>More</span>
		</button>
		<button class="button button4" style="vertical-align:middle">
			<span>More</span>
		</button>

		
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

