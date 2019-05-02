<!DOCTYPE html>

<?php
	include 'config.php';

	session_start();

	

	$movie = $_POST['movienames'];

	$time = $_POST['movietime'];
	

	$category = $_POST['seatcategory'];
	

	$quantity = $_POST['quantity'];

	$sql1 = "SELECT customer_id FROM customer WHERE email = '{$_SESSION['sess_email']}'";
	$result1 = mysqli_query($conn, $sql1);

           if(mysqli_num_rows($result1)>0)
           {
              while ($row = mysqli_fetch_array($result1))
					{
						$cust=$row['customer_id'];


		            }
		    }

	$sql="INSERT INTO ticketbuy (c_id,m_name,showtime,category,quantity) VALUES ('$cust','$movie','$time','$category', '$quantity')";
    $result=mysqli_query($conn,$sql);

    if($result)
              {
                ?>
                  <script>alert('Successful.Now logIn to continue')</script>
                    <?php
              }

              else 
              {
               
              }
           
	?>
	


<html>
<head>
	<title>Log In </title>
	<link rel="stylesheet" href="confirmticket.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

     <div >
     	
     	<h3>YOUR TICKET INFORMATION</h3>
     </div>
   <div>
   	
   	<p><strong>User:  <?php echo $_SESSION['sess_email'];?></strong></p>
   </div>
	<div>
		<p><strong>Movie Name: <?php echo $movie?></strong></p>
	</div>
	<div>
		<p><strong>Showtime: <?php echo $time?></strong><p>
	</div>
	<div>
		<p><strong>Category: <?php echo $category?></strong></p>
	</div>
	<div>
		<p><strong>Quantity: <?php echo $quantity?></strong></p>
	</div>
</body>
</html>

<?php
	include 'close.php';

	
?>


<style type="text/css">
	

 p {

margin-left:600px;
color: white;
font-size: 25px;
margin-top: 60px;


 }

 h3 {

 	font-size: 35px;
 	color: red;
 	margin-left: 400px;
 	margin-top: 5px;
 }



</style>