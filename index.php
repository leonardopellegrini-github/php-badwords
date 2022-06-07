<?php
  $testo = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.";
  
  $censura = $_GET['inserisci'];
  $testoCensurato = str_replace($censura,"***",$testo);
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP BAD WORDS</title>
</head>
<body>
  <h1>Questo è il testo</h1>
  <p><?php echo $testo ?></p>

  <h3>Quanti caratteri ha?</h3>
  <p><?php echo strlen($testo) ?> parole</p>

  <h1>Questo è il testo CENSURATO</h1>
  <p><?php echo $testoCensurato ?></p>
  <p><?php echo strlen($testoCensurato) ?> parole</p>


  
</body>
</html>