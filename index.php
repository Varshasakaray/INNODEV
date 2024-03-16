<?php
   session_start();
   include("php/db1.php");

   if($_SERVER['REQUEST_METHOD']=="POST")
   {
     $username=$_POST['username'];
     $password=$_POST['pass'];
 
     if(!empty($username) && !empty($password) && !is_numeric($username))
     {
       
      $query="select * from register where username='$username' limit 1";
      $result= mysqli_query($con,$query);

      if($result)
      {
        if($result && mysqli_num_rows($result)> 0)
        {
          $user_data=mysqli_fetch_assoc($result);
            
          if($user_data['password']== $password)
          {
            header("location: mainpage.php");
            die;
          }



        }
      }
      echo"<script type='text/javascript'> alert('wrong username or password')</script>";

     }
     else{
      echo"<script type='text/javascript'> alert('wrong username or password')</script>";
     }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="box">
      <form method="POST" action="">
          <h2>Login</h2>
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
          <input type="submit" value="Login">
          <div class="links">
            <a href="#">Forgot Password?</a>
            <a href="signup.php">SignUp</a>
            <div>

        </form>
    <div>    
</body>
</html>