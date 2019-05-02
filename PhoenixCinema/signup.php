<!DOCTYPE html>
<html>
<head>
  <title> PhoenixCinema </title>
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>



<div id="menu">
   <div id="content">
    
      
    
   </div>


    <div id="title">
      
      PhoenixCinema

    </div>

</div>



<form id="login-box" method="post" action="">
      <div class="left">
        <h1>Sign up</h1>
    
        <input type="text" name="name" placeholder="Name" />
        <input type="text" name="email" placeholder="E-mail" />
        <input type="password" name="password" placeholder="Password" />
        <input type="text" name="phone" placeholder="Phone" />
    
         <input type="submit" name="submit" value="SIGN ME UP" />
         <p>Already Have an Account?</p>
          <button><a href="Login.php">Login</a></button> 
      </div>
</form>

<?php

    if(isset($_POST["submit"])) 
    {

       if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['phone']))
       {
           $name = $_POST['name'];
           $email=$_POST['email'];
           $password=$_POST['password'];
           $phone=$_POST['phone'];

           $conn=new mysqli('localhost' ,'root' ,'') or die(mysqli_error());
           $db=mysqli_select_db($conn,'phoenixcinema') or die("DB Error");
           $query=mysqli_query($conn,"Select * From customer where email='".$email."'");
           $row=mysqli_num_rows($query);
           if($row ==0)
           {

              $sql="INSERT INTO customer (customer_name,password,email,phone) VALUES ('$name','$password','$email', '$phone')";
              $result=mysqli_query($conn,$sql);

              if($result)
              {
                ?>
                  <script>alert('Successful.Now logIn to continue')</script>
                    <?php
              }

              else 
              {
                echo "Failed to Register";
              }
           }

           else 
           {

            echo "email exists";
           }

       }
       else 
       {

        ?>
        <script>alert('Required all field')</script>
        <?php
       }
    }




 ?>



</body>
</html>


 <style type="text/css">
   


@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,500);

*:focus {
  outline: none;
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
  height: 50px;
  margin-right: 50px;
  margin-top: 15px;

}


body {
  margin: 0;
  padding: 0;
  background-image: url(images/loginbg.jpg);
  font-size: 16px;
  color: #222;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
}

#login-box {
  position: relative;
  text-align: center;
  margin: 5% auto;
  width: 325px;
  height: 450px;
  background:white;
  border-radius: 2px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
}

.left {
  position: absolute;
  top: 0;
  left: 0;
  box-sizing: border-box;
  padding: 40px;
  width: 300px;
  height: 400px;
}

h1 {
  margin: 0 0 20px 0;
  font-weight: 300;
  font-size: 28px;
}

input[type="text"],
input[type="password"] {
  display: block;
  box-sizing: border-box;
  margin-bottom: 20px;
  padding: 4px;
  width: 220px;
  height: 32px;
  border: none;
  border-bottom: 1px solid #AAA;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 15px;
  transition: 0.2s ease;
}

input[type="text"]:focus,
input[type="password"]:focus {
  border-bottom: 2px solid #16a085;
  color: #16a085;
  transition: 0.2s ease;
}

input[type="submit"] {

 margin-left: 10px;
margin-top: 10px;
background-color:#16a085;
height:32px; 
width:120px; 
color: white;

}

p {

  
  color: black;
  margin-top: 20px;
  width: 325px;
  margin-left: -40px;
}



button:hover,
button:focus {
  opacity: 0.8;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}

button:active {
  opacity: 1;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}

button {
  
  width: 120px;
  height: 32px;
  background: #16a085;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  text-transform: uppercase;
  transition: 0.1s ease;
  cursor: pointer;
  margin-top: -1px;
  margin-left: 20px;

/*height: 30px;*/
/*background-color: #006635;*/


}

a {

  color: white;
  text-decoration: none;
  height: 32px;
  width: 120px;

}





 </style>