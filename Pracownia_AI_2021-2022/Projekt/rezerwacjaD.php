<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/style.css">
    <link rel="stylesheet" href="./Style/style_oso.css">
    <link rel="icon"  href="./Photos/ICON.png">
    <title>Document</title>
</head>
<body>
<div id="baner">
    <span id="banertx">Zarezerwuj pojazd</span>
</div>

<div id="lista">
        <ul>
            <li id="glow"><a href="./index.php" id="glow"><img src="./Photos/Domek.png"></a></li>
            <li><a href="./osobowe_user.php">Samochody osobowe</a></li>
            <li><a href="./bus_user.php">Busy</a></li>
            <li><a href="./dostawa_user.php">Samochody dostawcze</a></li>
            <li><a href="./logowanie.php?akcja=wyloguj">Wyloguj się</a></li>
            <li><a href="./profil_user.php">Profil</a></li>
        </ul>
    </div>

<div id="main_reszt">
<?php
session_start();
$ile=$_SESSION['wiersze'];
for($i=1;$i<$ile;$i++)
{
    if(isset($_POST['submit'.$i]))
    {
    $marka=$_POST['marka'];
    $model=$_POST['model'];
    $rejestracja=$_POST['rejestracja'];
    }
}

?>
<div id="rezerwacja">
    <h2>Rezerwacja pojazdu</h2>
    <h4><?php echo $marka." "; echo $model;?></h4>
    O numerach rejejestracyjcnych: <?php echo $rejestracja?>
    <table>
    <tr><th colspan="2">Wprowadz nastepujące dane</th></tr>
    
    <form method="POST" action="dodajrezerwacja.php">
    <tr><td>Imie</td><td><input type="text" require></td></tr>
    <tr><td>Nazwisko</td><td><input type="text" require></td></tr>
    <tr><td>PESEL </td><td><input type="number" name="PESEL" min="10000000000" max="99999999999" size="11" require></td></tr>
    <tr><td>Data rozpoaczecia rezerwacji </td><td><input type="datetime-local" name="DataP" require></td></tr>
    <tr><td>Data zakonczenia rezerwacji </td><td><input type="datetime-local" name="DataK" require></td></tr>
    <tr><td colspan="2"><input type="submit" value="Zakoncz rezerwacje" name="Submit" require></td></tr>
    <tr><td colspan="2"><a href="dostawa.php">Wybierz ponownie pojazd</a></td></tr>
    </form>
    </table>
    
    

</div>
</div>
<footer>
    <div id="foottx3">
    <span>Dane kontaktowe: 
    <br>Email: jan.kowalski@fastcars.pl 
    <br>Telefon: 782 980 274</span>
    </div>

    <div id="foottx2">
    <span>Warunki użytkownika 
    <br>Polityka prywatności</span>
    </div>

    <div id="foottx1">
    <span>Copyright © - Fast Cars</span>
    </div>
</footer>
    
</body>
</html>

