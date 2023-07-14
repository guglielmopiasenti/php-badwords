<?php
$censura = $_GET['censura'];
$testo = $_GET['testo'];


$testo_censurato = str_replace($censura, '***', $testo);

$lenght = strlen($testo);



$censored_lenght=strlen($testo_censurato);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Il tuo testo originale</h1>
   <div>
    <p>La parola che hai deciso di censurare:</p>
    <p><?= $censura ?></p>
    <p>Il testo che hai scritto è:</p>
    <p><?= $testo ?> </p>
    <p>La lunghezza del testo originale è:<?=$lenght?></p>
   </div>
   <h1>Il tuo testo censurato</h1>
   <div>
    <p>Il testo censurato:</p>
    <p><?= $testo_censurato ?></p>
    <p>La lunghezza del testo censurato è: <?=$censored_lenght?></p>
    <p></p>
   </div>
</body>
</html>