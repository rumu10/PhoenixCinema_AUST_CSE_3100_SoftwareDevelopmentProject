<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
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
                echo "Successfully resitered";
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
