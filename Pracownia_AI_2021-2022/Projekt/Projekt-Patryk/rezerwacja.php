<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_input.css">
    <title>Document</title>
</head>
<body>
<div id="baner">
<h1>Zarezerwuj swój pojazd</h1>
</div>
<div id="main">
<?php
session_start();
$marka=$_SESSION['Marka'];
$model=$_SESSION['Model'];
$rejestracja=$_SESSION['Rejestracja'];
?>
<div id="rezerwacja">
    <h2>Rezerwacja pojazdu</h2>
    <h4><?php echo $marka." "; echo $model;?></h4>
    O numerach rejejestracyjcnych: <?php echo $rejestracja?>
    <table>
    <tr><th colspan="2">Wprowadz nastepujące dane</th></tr>
    
    <form method="POST">
    <tr><td>Imie</td><td><input type="text" require></td></tr>
    <tr><td>Nazwisko</td><td><input type="text" require></td></tr>
    <tr><td>PESEL </td><td><input type="number" name="PESEL" min="10000000000" max="99999999999" require></td></tr>
    <tr><td>Data rozpoaczecia rezerwacji </td><td><input type="datetime-local" name="DataP" require></td></tr>
    <tr><td>Data zakonczenia rezerwacji </td><td><input type="datetime-local" name="DataK" require></td></tr>
    <tr><td colspan="2"><input type="submit" value="Zakoncz rezerwacje" name="Submit" require></td></tr>
    <tr><td colspan="2"><a href=".\">Wybierz ponownie pojazd</a></td></tr>
    </form>
    </table>
    
    <?php 

    if(isset($_POST['Submit']))
    {
        $pesel=$_POST['PESEL'];
   
    $connect=mysqli_connect("localhost", "root", "", "wypozyczalnia");
    $qpojazd=mysqli_query($connect, "SELECT `pojazdy`.`ID_pojazdu`, `pojazdy`.`Rejestracja`
    from `pojazdy`
    where `pojazdy`.`Rejestracja`='$rejestracja'");

    while($tpojazdy=mysqli_fetch_array($qpojazd))
    {
        $pojazd=$tpojazdy['ID_pojazdu'];
    }
    $qosoba=mysqli_query($connect, "SELECT `dane_osobowe`.`ID`, `dane_osobowe`.`PESEL`
    from `dane_osobowe`
    where `dane_osobowe`.`PESEL`='$pesel'");
    while($tosoby=mysqli_fetch_array($qosoba))
    {
        $osoba=$tosoby['ID'];
    }

    $insert=mysqli_query($connect, "INSERT INTO `rezerwacje`(`ID_osoby`, `ID_pojazdu`, `Poczatek rezerwacji`, `Koniec rezerwacji`) VALUES ('$osoba','$pojazd','$_POST[DataP]','$_POST[DataK]')");
    }
    ?>

</div>
</div>
<div id="footer">

</div>
    
</body>
</html>

<!--!-->