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
while($row=$result1->fetch_assoc()){
    if(isset($_POST['login']) && isset($_POST['pass']) && ($_POST['login']=="$row[Login]") && ($_POST['pass'])=="$row[Haslo]"){
        $_SESSION['zalogowany'] = "$row[Uprawnienia]";

    if($_SESSION['zalogowany']==1){
 
    }else{
        header("location:rezerwacja.php");
        //header("refresh:0");
    }
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
    <link rel="stylesheet" href="style.css">
    <title>Samochody od ręki</title>
</head>
<body>
    <div id="baner">
    <span id="banertx">Samochody od ręki</span>
    </div>

    <div id="lista">
        <table>
            <tr>
            <td><a href="./osobo.php">Samochody osobowe</a></td>
            <td><a href="./bus.php">Busy</a></td>
            <td><a href="./dostaw.php">Samochody dostawcze</a></td>
            <td><a href="./logowanie.php">Zaloguj się</a></td>
            <td><a href="./index.php">Powrót do głównej storny</a></td>
            </tr>
        </table>
    </div>

    <div id="main_log">
    <form method="POST">
    Nazwa użytkownika:
    <br>
    <input type="text" placeholder="Podaj nazwa użytkownika" name="login">
    <br>
    Hasło: 
    <br>
    <input type="password" placeholder="Podaj hasło" name="pass">
    <br>
    <input type="submit" value="Zaloguj się" id="log_but">
    </form>
    <?php
    }
    else{
     echo "<a href='user.php?akcja=wyloguj'>wyloguj</a>";
    }
    ?>
    <span id="stwo1">Jęśli nie masz? <a href="rejestracja.php" id="stwo2">Stwórz</a></span>
    </div>

    <footer>
    <span id="foottx">Autorzy: Kacper Rzeszowski i Patryk Szaroleta</span>
    </footer>
</body>
</html>