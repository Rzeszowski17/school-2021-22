<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="baner">
Zarezerwuj swój pojazd
</div>
<div id="main">
<?php
session_start();
$marka=$_SESSION['Marka'];
$model=$_SESSION['Model'];
$rejestracja=$_SESSION['Rejestracja'];
?>
<div id="rezerwacja">
    Rezerwacja pojazdu
    <br>
    <?php echo $marka;?>
    <?php echo $model;?>
    <br>O numerach rejejestracyjcnych: <?php echo $rejestracja?>
    <br>Wprowadz nastepujące dane:
    <form method="POST">
    Imie<input type="text"><br>
    Nazwisko<input type="text"><br>
    PESEL <input type="number" name="PESEL" min="10000000000" max="99999999999">
    <br>
    Data rozpoaczecia rezerwacji <input type="datetime-local" name="DataP"><br>
    Data zakonczenia rezerwacji <input type="datetime-local" name="DataK"><br>

    </form>
</div>
</div>
<div id="footer">

</div>
    
</body>
</html>