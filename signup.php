<?php
   session_start();
   include("php/db1.php");

   if($_SERVER['REQUEST_METHOD']=="POST")
   {
     $username=$_POST['username'];
     $password=$_POST['pass'];

     

     if(!empty($username) && !empty($password) && !is_numeric($username))
     {
       $query="insert into register(username,password) values('$username','$password')";

       mysqli_query($con,$query);

       echo"<script type='text/javascript'> alert('sucessfully register')</script>";

     }

     else
     {
      echo"<script type='text/javascript'> alert('please enter valid information')</script>";

     }

   }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign Up Form</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="box">
        <form method="post" action=""> 
            <h2>Sign Up</h2>
            <div class="InputBox">
              <input type="text" name="username" class="nonrectangle" required>
              <span>username</span>
              <i></i> 
  
            </div>
            <div class="InputBox">
              <input type="password" name="pass" class="nonrectangle" required>
              <span>Enter Password</span>
              <i></i> 
  
            </div>
            <input type="submit" value="Submit">
            
              
              
              <div>
  
          </form>
          <p>Not have an account? <a herf="#"> Sign Up here</a></p>
</body>