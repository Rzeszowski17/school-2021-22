<?php
session_start();
if(isset($_GET['akcja']) && $_GET['akcja']=="wyloguj"){
    unset($_SESSION['zalogowany']);
}

if(isset($_POST['login']) && isset($_POST['pass'])){
    $login=$_POST['login'];
    $pass=$_POST['pass'];

$connect1=new mysqli("localhost","root","","wypozyczalnia");

$sql1="SELECT * 
FROM `uzytkownicy`
where `uzytkownicy`.`Login`='$login' and `uzytkownicy`.`Haslo` ='$pass'";

$result1=$connect1->query($sql1);
while($row=$result1->fetch_assoc())
{
    if(isset($_POST['login']) && isset($_POST['pass']) && ($_POST['login']=="$row[Login]") && ($_POST['pass'])=="$row[Haslo]")
    {
        $_SESSION['zalogowany'] = "$row[Uprawnienia]";
        $_SESSION['id']=$row['ID'];
        header("location:profil.php");  
    }
    }
}


if(!isset($_SESSION['zalogowany']))
{

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/style.css">
    <link rel="stylesheet" href="./Style/style_log.css">
    <title>Samochody od ręki</title>
</head>
<body>
    <div id="baner">
    <span id="banertx">Samochody od ręki</span>
    </div>

    <div id="lista">
        <ul>
            <li id="glow"><a href="./index.php" id="glow"><img src="./Photos/Domek.png"></a></li>
            <li><a href="./osobowe_guest.php" >Samochody osobowe</a></li>
            <li><a href="./bus_guest.php" >Busy</a></li>
            <li><a href="./dostawa_guest.php">Samochody dostawcze</a></li>
            <li><a href='logowanie.php?akcja=wyloguj'>Wyloguj się</a></li>
        </ul>
    </div>

    <div id="main_l">
    <div id="main_log">
    <form method="POST">
    Nazwa użytkownika:
    <br>
    <input type="text" placeholder="Podaj nazwa użytkownika" name="login" required>
    <br>
    Hasło: 
    <br>
    <input type="password" placeholder="Podaj hasło" name="pass" required>
    <br>
    <input type="submit" value="Zaloguj się" id="log_but">
    </form>
    <?php
    }
    else{
     echo "<a href='logowanie.php?akcja=wyloguj'>wyloguj</a>";
    }
    ?>
    <span id="stwo1">Nie masz konta? <a href="rejestracja.php" id="stwo2">Załóż</a></span>
    </div>
    </div>

    <footer>
    <div style="text-align: left;">
    <span id="foottx3">Dane kontaktowe: 
    <br>jan.kowalski@fastcars.pl 
    <br>782 980 274</span>
    </div>

    <div style="text-align: right;">
    <span id="foottx2">Warunki użytkownika 
    <br>Polityka prywatności</span>
    </div>

    <div style="text-align: center;">
    <span id="foottx1">Copyright © - Fast Cars</span>
    </div>
</footer>

</body>
</html>