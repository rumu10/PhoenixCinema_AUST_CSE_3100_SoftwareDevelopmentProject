<?php
include 'config.php';
?>



<!DOCTYPE html>
<html>

<head>
	<title>Movie Details</title>
	<link rel="stylesheet" type="text/css" href="stylemoviedetails.css">
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
		<div id="titlebar">
			<h1> <?php echo $_GET['name']; ?></h1>
		</div>

         

		<div id="poster">


		<?php
		    if(isset($_GET['name']))
		    {

				$query = "SELECT * FROM movies where movie_name = '" . $_GET['name'] . "' ";
				$result = mysqli_query($conn,$query) or die(mysql_error());

				if(mysqli_num_rows($result) > 0)
				{
					while ($row = mysqli_fetch_array($result))
					{
						$name=$row['movie_name'];

		            ?>

	
		          <a href="moviedetails.php?name=<?php echo $name; ?>"> <p><img src="<?php echo $row['image'];?>" width="200" height="300"></a>

				
						
			 <?php
			}
		}
	}

	?>
			
		</div>

	

		   	<?php
		    if(isset($_GET['name']))
		    {

				$query = "SELECT * FROM movies where movie_name = '" . $_GET['name'] . "' ";
				$result = mysqli_query($conn,$query) or die(mysql_error());

				if(mysqli_num_rows($result) > 0)
				{
					while ($row = mysqli_fetch_array($result))
					{
						$name=$row['movie_name'];

		            ?>

	
		          

				 <iframe 
			     src="<?php echo $row['video'];?>" width="560" height="300" >

		          </iframe>

						
			 <?php
			}
		}
	}

	?>      

		<div id="buyticket">
			<a href="signup.php"> Buy Ticket </a>
		</div>

		<div class="infoblock">
			<div class="content">


              <?php
		    if(isset($_GET['name']))
		    {

				$query = "SELECT * FROM movies where movie_name = '" . $_GET['name'] . "' ";
				$result = mysqli_query($conn,$query) or die(mysql_error());

				if(mysqli_num_rows($result) > 0)
				{
					while ($row = mysqli_fetch_array($result))
					{
						$name=$row['movie_name'];

		            ?>

	
		          

				     <span> <p><?php echo $row['director'] ?></p></span>
						
			 <?php
			}
		}
	}

	?>



           </div>
			<div class="content">
				   <?php
		    if(isset($_GET['name']))
		    {

				$query = "SELECT * FROM movies where movie_name = '" . $_GET['name'] . "' ";
				$result = mysqli_query($conn,$query) or die(mysql_error());

				if(mysqli_num_rows($result) > 0)
				{
					while ($row = mysqli_fetch_array($result))
					{
						$name=$row['movie_name'];

		            ?>

	
		          

				     <span> <p><?php echo $row['cast'] ?></p></span>
						
			 <?php
			}
		}
	}

	?>



			</div>
			<div class="content">
				   <?php
		    if(isset($_GET['name']))
		    {

				$query = "SELECT * FROM movies where movie_name = '" . $_GET['name'] . "' ";
				$result = mysqli_query($conn,$query) or die(mysql_error());

				if(mysqli_num_rows($result) > 0)
				{
					while ($row = mysqli_fetch_array($result))
					{
						$name=$row['movie_name'];

		            ?>

	
		          

				     <span> <p><?php echo $row['genre'] ?></p></span>
						
			 <?php
			}
		}
	}

	?>



			</div>
			<div class="content">
			         <?php
		    if(isset($_GET['name']))
		    {

				$query = "SELECT * FROM movies where movie_name = '" . $_GET['name'] . "' ";
				$result = mysqli_query($conn,$query) or die(mysql_error());

				if(mysqli_num_rows($result) > 0)
				{
					while ($row = mysqli_fetch_array($result))
					{
						$name=$row['movie_name'];

		            ?>

	
		          

				     <span> <p><?php echo $row['release_date'] ?></p></span>
						
			 <?php
			}
		}
	}

	?>



			</div>

			<div class="content">
			         <?php
		    if(isset($_GET['name']))
		    {

				$query = "SELECT * FROM movies where movie_name = '" . $_GET['name'] . "' ";
				$result = mysqli_query($conn,$query) or die(mysql_error());

				if(mysqli_num_rows($result) > 0)
				{
					while ($row = mysqli_fetch_array($result))
					{
						$name=$row['movie_name'];

		            ?>

	
		          

				     <span> <p><?php echo $row['imdb'] ?></p></span>
						
			 <?php
			}
		}
	}

	?>



			</div>
			<div class="content">
				   <?php
		    if(isset($_GET['name']))
		    {

				$query = "SELECT * FROM movies where movie_name = '" . $_GET['name'] . "' ";
				$result = mysqli_query($conn,$query) or die(mysql_error());

				if(mysqli_num_rows($result) > 0)
				{
					while ($row = mysqli_fetch_array($result))
					{
						$name=$row['movie_name'];

		            ?>

	
		          

				     <span> <p><?php echo $row['runtime'] ?></p></span>
						
			 <?php
			}
		}
	}

	?>



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