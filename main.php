<?php
require 'php/db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>speedyfingers-learn and improve </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
    <h1></h1>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="image/logo.webp" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            Test your speed
          </a>
        </div>
      </nav>

      <div class="container">
      <div class="card mt-4">
        <h5 class="card-header">Typing Tools</h5>
        <div class="card-body">

        <?php
        $query1="SELECT * FROM typingtools";
        $run1=mysqli_query($db,$query1);
        while($tool=mysqli_fetch_assoc($run1)){
          ?>
         <a href="typingtool.php?lang=<?=$tool['id']?>" class="btn btn-primary col-3 m-2"><?=$tool['lang_name']?>Typing</a>
          <?php
        }
        ?>
          
          
          

        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>