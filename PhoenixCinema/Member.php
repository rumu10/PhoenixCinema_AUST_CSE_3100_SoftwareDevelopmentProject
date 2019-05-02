<?php
include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Member</title>
	<link rel="stylesheet" type="text/css" href="Member.css">
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





<div class="body">
	

<div class="content" id="img">
	


</div>



<div class="content" id="details">
	

<h2 class="title_page">Members</h2> <br> <hr> <br>


<h4>Become a Member Partner of PHOENIXCINEMA</h4> <br>
          <p> PHOENIXCINEMA Multi screen Theaters offers Membership schemes to its loyal customers who wish to pre-book their tickets and seats, get discounts for Movies, Free Refreshments, receive advance information of upcoming movies and get free invitations to special events.
          <p>
          <p>You can become a PHOENIXCINEMA Platinum Member with a 15,000 taka annual membership fee. You can call or mail us if interested; please be sure to send all your contact details. Our Membership Department will contact you at the earliest. When filling out the application form you will need to provide two passport size photos and the applicable annual membership fee with your application to become a Member Partner of PHOENIXCINEMA. Before you will receive your official collection item PHOENIXCINEMA Membership Card with your photo, you can start pre-booking your tickets and enjoying other membership privileges with your instantly activated membership number and personal security code. Your card will be mailed to you in few weeks and you need to call us to activate it. <br></h4>
          <h4>Benefits: </h4> <br>
          <p>-   Get 50 taka discount for every ticket purchased (Up to 10 tickets)<br />
            -   Book tickets via phone or via email for up to 10 tickets.<br />
            -   Get FREE 250ml size soft drinks at every visit to PHOENIXCINEMA<br />
            -   Use the Members Only Ticket Booth at the BOX OFFICE<br />
            -   Receive advance information of upcoming movies and show times via email<br />
            -   Use your Platinum Members Seating Section at the PHOENIXCINEMA Lobby<br />
            -   Get free invitations to special events at PHOENIXCINEMA<br />
            -   20 taka Discount on Ice Skating entry fee at STAR Zone at any available time (on up to 2 hours per day, Member and additional member both can avail the discount simultaneously). </p>
          <p>When booking with your PHOENIXCINEMA Member card, your booking will be record under your membership number. You will need to show your PHOENIXCINEMA Membership card at PHOENIXCINEMA Box Office to purchase your reserved tickets for the special price. </p>
          <p>By showing your PHOENIXCINEMA Membership Card at the food and Beverage counter at PHOENIXCINEMA Theaters, you will be served FREE Soft drinks at every visit. As a privileged STAR CINEPLEX Member Partner, you will receive earliest information of our upcoming movies and will have the first priority to book tickets on the new launches. We look forward to having you as a Member Partner of our PHOENIXCINEMA family. </p>
          <strong>For Further queries please contact the undersigned:</strong> <br />
          <br />
          <strong>Raphael Elvis</strong><br />
           <strong>Sudiptaa Biswas</strong><br />
          <span style=" font-size:12px; font-weight:normal;">(Member Coordinator)</span><br />
          <strong>Show Motion Limited (PHOENIXCINEMA)</strong><br />
          Level 8, Bashundhara City<br />
          13/3 Ka, Panthapath, Dhaka-1205<br />
          Tel: 9138260, 9134098 9141332, 9140819<br />
          E-mail: member@cinplexbd.com<br />
          Web:<a href="PhoenixCinema.html">www.cineplexbd.com</a>

          <a href="#" class="fa-facebook"></a>


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

