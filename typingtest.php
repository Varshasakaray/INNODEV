<?php
// require 'php/db.php';
// $query1="SELECT * FROM typinglessons WHERE id={$_GET['lesson']}";
// $run1=mysqli_query($db,$query1);
// $lesson=mysqli_fetch_assoc($run1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/main.css"/>
    <title>TypingNinja - Learn & Practice Online</title>
</head>
<body>
    <!-- Image and text -->
<nav class="navbar navbar-dark bg-danger">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="img/logo.png" alt="" width="30" height="24" class="d-inline-block align-center">
      TypingNinja
    </a>
  </div>
</nav>

<div class="container">
<div class="card mt-4">
  <h5 class="card-header">Take typing Test

  <div class="timer d-flex flex-row">


<span class="badge bg-primary d-flex align-items-center m-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stopwatch" viewBox="0 0 16 16">
<path d="M8.5 5.6a.5.5 0 1 0-1 0v2.9h-3a.5.5 0 0 0 0 1H8a.5.5 0 0 0 .5-.5V5.6z"/>
<path d="M6.5 1A.5.5 0 0 1 7 .5h2a.5.5 0 0 1 0 1v.57c1.36.196 2.594.78 3.584 1.64a.715.715 0 0 1 .012-.013l.354-.354-.354-.353a.5.5 0 0 1 .707-.708l1.414 1.415a.5.5 0 1 1-.707.707l-.353-.354-.354.354a.512.512 0 0 1-.013.012A7 7 0 1 1 7 2.071V1.5a.5.5 0 0 1-.5-.5zM8 3a6 6 0 1 0 .001 12A6 6 0 0 0 8 3z"/>
</svg> <span id="minute">00</span>:<span id="second">00</span></span>

<span class="badge bg-success d-flex align-items-center m-2">
Correct : <span id="correct">0</span>
</span>
<span class="badge bg-danger d-flex align-items-center m-2">
Incorrect : <span id="incorrect">0</span>
</span>
</div>
</h5>
  <div class="card-body col-12 row">
  
<pre class="lessonwords">
    
</pre>   
The Indian Armed Forces have been engaged in a number of major military operations, including: the Indo-Pakistani wars of 1947, 1965 and 1971, the Portuguese-Indian War, the Sino-Indian War, the 1967 Cho La incident, the 1987 Sino-Indian skirmish, the Kargil War, and the Siachen conflict among others. India honours its armed forces and military personnel annually on Armed Forces Flag Day, 7 December. Armed with the nuclear triad,[22] the Indian armed forces are steadily undergoing modernisation,[23] with investments in areas such as futuristic soldier systems and missile defence systems

  </div>


</div>

<div class="card mt-4 keycover">
  <div class="card-body col-12 row">
  <div class="input-group ">
          <textarea class="form-control" id="typingtool"  rows="8" aria-label="with textarea"></textarea>
  </div>

  </div>


</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="js/keyboard.js"></script>
<script src="js/timer.js"></script>


</body>
</html>