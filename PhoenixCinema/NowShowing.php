<?php
include 'config.php';

?>

<!DOCTYPE html>
<html>

<head>
	<title> PhoenixCinema </title>
	<link rel="stylesheet" type="text/css" href="stylenowshowing.css">
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
				<?php 
				
				 if(isset($_GET['name']))
					{
						echo $_GET['name'];
					}	

					if(isset($_GET['value']))
					{
						echo $_GET['value'];
					}	
			    ?>
			</h1>
		</div>



  <table>

		    <tr class="link">


		<?php
		    if(isset($_GET['name']))
		    {

				$query = "SELECT * FROM movies where status = '" . $_GET['name'] . "' ";
				$result = mysqli_query($conn,$query) or die(mysql_error());

				if(mysqli_num_rows($result) > 0)
				{
					while ($row = mysqli_fetch_array($result))
					{
						$name=$row['movie_name'];

		            ?>

	
		   <td><a href="moviedetails.php?name=<?php echo $name; ?>"> <p><?php echo $name;?></p> <br><img src="<?php echo $row['image'];?>" width="150" height="200"></td></a>

				
						
			 <?php
			}
		}
	}

	?>
	</tr>



		    <tr class="link">


		<?php
		    if(isset($_GET['value']))
		    {

				$query = "SELECT * FROM movies where status = '" . $_GET['value'] . "' ";
				$result = mysqli_query($conn,$query) or die(mysql_error());

				if(mysqli_num_rows($result) > 0)
				{
					while ($row = mysqli_fetch_array($result))
					{
						$name=$row['movie_name'];

		            ?>

	
		   <td><a href="moviedetails.php?name=<?php echo $name; ?>"> <p><?php echo $name;?></p> <br><img src="<?php echo $row['image'];?>" width="150" height="200"></td></a>

				
						
			 <?php
			}
		}
	}

	?>
	</tr>

	</table>	

	
		<hr>

	
		
		
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
	

table
{
	width: 100%;
	position: relative;
}
tr.link a {
	color: red;
	
	margin-top: 30px;
	margin-left: 70px;
}

td
{

	padding: 35px;
	list-style: none;
	position: relative;
	line-height: 50%;
	color: rgb(255,255,255);


}

.button1 {
	margin-left: 70px;
	margin-top: 20px;
	float: left;
}


*{
	margin: 0px;
	padding: 0px;
	list-style: none;
	text-decoration: none;
}

body {
	background-image: url(images/bg.jpg);
}

#header {

	border: 1px none;
	height: 130px;
	width: 950px;
	margin: auto;
	background-color:#2d8659;
	/*background-image: url(images/loginbg.jpg);*/
}

#headertext1 {

	font-size:50px;
	font-style: bold;
	margin-left: 1.9em;
	padding-top: .5em;
	color: white;
	font-family: "chiller";
	
	
}

#logo {

	display: inline-block;
	margin-top: -78px;
	margin-left: -928px;
}

#header_film {
	float: left;
	margin-left: 550px;
}

#headertext2 {

	
	padding-top: 3px;
		color:#80002a;
	float: left;
	margin-top: 10px;
	font-family: "MV Boli";
	font-size: 19px;


}

#menu {

	height: 60px;
	margin-left: 200px;
}


#menu ul {

	list-style: none;
}


#menu ul li {

	float: left;
	color: white;
	line-height: 60px;
	text-align: center;

	background-color:#0d0d0d;
	width: 134px;
	height: 60px;
	position: relative;

	border-right: 2px solid black;
}

#menu ul li a {

	color: white;
	display: block;
	font-size: 17px;
	border-radius: 30px;
	height: 40px;
	line-height: 40px;
	margin-top: 10px;
}

#menu ul li a:hover {
	background-color: green;
}


#menu ul li ul  {
	position: absolute;
	display: none;
}

#menu ul li ul li {
	border-bottom: 1px solid black;
	opacity: .9;
}

#menu ul li:hover ul {
	display: block;
}
#menu ul li:hover  ul li{
	display: block;
	background-color:none;
	z-index: 1;
}

#middle {
	border: 1px solid white;
	height: 800px;
	width: 950px;
	margin: auto;
	background-image: url(images/nsbg.jpg);
	opacity: .9;
}

#pagetitle {
	text-align: center;
}

#pagetitle h1 {

	padding-top: 10px;
	color: #b30000;
	font-family: "Bauhaus 93";

}


.poster img {
	transition: .75s;
	max-width: 100%;
	max-width: 100%;
}

.poster:hover img {
	transform: scale(1.2);
}

.poster1 {
	margin-top: 20px;
	margin-left: 60px;
	float: left;
}

.poster2 {
	margin-left: 90px;
	margin-top: 20px;
	float: left;
}

.poster3 {
	margin-left: 80px;
	margin-top: 20px;
	float: left;
}

.poster4 {
	margin-left: 80px;
	margin-top: 20px;
	display: inline-block;
}

.button {
	border-radius: 4px;
	background-color: #f4511e;
	border: none;
	color: #FFFFFF;
	text-align: center;
	font-size: 15px;
	padding: 10px;
	width: 80px;
	height: 40px;
	transition: all 0.5s;
	cursor: pointer;
	margin: 5px;
	margin-bottom: 10px;
	}

.button span {
	cursor: pointer;
	position: relative;
	transition: 0.5s;
}

.button span:after {
  	content: '\00bb';
  	position: absolute;
  	opacity: 0;
  	top: 0;
  	right: -10px;
  	transition: 0.5s;
}

.button:hover span {
  	padding-right: 20px;
}

.button:hover span:after {
  	opacity: 1;
  	right: 0;
}

.button1 {
	margin-left: 70px;
	margin-top: 20px;
	float: left;
}

.button2 {
	margin-left: 150px;
	margin-top: 20px;
	float: left;
} 

.button3 {
	margin-left: 150px;
	margin-top: 20px;
	float: left;
} 

.button4 {
	margin-left: 145px;
	margin-top: 20px;
	display: inline-block;
} 






#downinfo {



	background-color: #262626;

	width: 100%;
	height: 500px; 
	position: absolute;
	margin-top: 50px;
}

#downinfo div.header {

height: 30px;
width: 300px;
margin-left: 90px;
margin-top:40px;
 position: relative;
 float: left;


}

#downinfo div#headline1 {

text-align: center;
color: white;
font-size: 20px;


}

#headline1 strong {
margin-left: -30px;
	
}

#downinfo div#headline2 {

text-align: center;
color: white;
font-size: 20px;

}



#downinfo div#headline3 {

text-align: center;
color: white;
font-size: 20px;
}



#downinfo div.content {
height:350px;
width: 300px;
margin-left:100px;

margin-top: 40px;
float: left;

}


#downinfo div#col1 {





}

#col1 p {

	color: white;

}

#col1 a {

      color: #4d4dff;
      font-size: 22px;

}

#col1 span {

	color:  #a6a6a6;
}

#downinfo div#col2 {



	
}

#col2 ul {


color: white;



}

#col2 hr {

	border: .1px dotted #404040;
	
}

#downinfo div#col3 {



	
}

#col3 ul {


color: white;




}

#col3 hr {

	border: .1px dotted #404040;
}


#footer {

	border: none;
	width: 100%;
}

footer {
	font-size: 20px;
	padding: 1em;
	text-align: center;
	background-color: grey;
	margin-top: 550px;
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