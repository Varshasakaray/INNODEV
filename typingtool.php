<?php
require 'php/db.php';
?>

<?php
$query1="SELECT * FROM typingtools WHERE id={$_GET['lang']}";

$run1=mysqli_query($db,$query1);
$tool=mysqli_fetch_assoc($run1);  
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?=$tool['lang_name']?> Typing Tool-Test your speed</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='jsapi.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script type="text/javascript">
google.load("elements","1",{
packages:"transliteration"
      });
function onLoad(){
        var options={
          sourceLanguage:google.elements.transliteration.LanguageCode.ENGLISH,
          destinationLanguage:[google.elements.transliteration.LanguageCode.<?=$tool['lang_value']?>] ,
          shortcutKey:'ctrl+g',
          transliterationEnabled:true
        };

        var control = new google.elements.transliteration.TransliterationControl(options);
        control.makeTransliteratable(['typingtool']);
}

google.setOnLoadCallback(onLoad);
    </script>

    
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

      <?php
      $query1="SELECT * FROM typingtools WHERE id={$_GET['lang']}";
      $run1=mysqli_query($db,$query1);
      $tool=mysqli_fetch_assoc($run1);  
      ?>

      <div class="container">
      <div class="card mt-4">
        <h5 class="card-header"></i><?=$tool['lang_name']?>Typing Tool</h5>
        <div class="card-body d-flex justify-content-around col-12 row ">
        <div class="input-group ">
          <textarea class="form-control" id="typingtool"  rows="8" aria-label="with textarea"></textarea>
        </div>
        <p>Start Typing in English  & it automatically converts in <?=$tool['lang_name']?>, press <kbd>Ctrl</kbd>+<kbd>G</kbd> for toggle between English and  <?=$tool['lang_name']?>
        </p>
        



        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>