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
    
    <div id="main_rej"> 
    <form method="POST">
    Podaj Imie:
    <br>
    <input type="text" placeholder="Podaj nazwa Imie" name="name">
    <br>
    Podaj Nazwisko:
    <br>
    <input type="text" placeholder="Podaj nazwa Nazwisko" name="surname">
    <br>
    Podaj PESEL:
    <br>
    <input type="text" placeholder="Podaj nazwa PESEL" name="pesel">
    <br>
    Podaj nazwa użytkownika:
    <br>
    <input type="text" placeholder="Podaj nazwa użytkownika" name="login">
    <br>
    Podaj hasło: 
    <br>
    <input type="password" placeholder="Podaj hasło" name="pass1">
    <br>
    Powtórz hasło: 
    <br>
    <input type="password" placeholder="Powtórz hasło" name="pass2">
    <br>
    E-mail: 
    <br>
    <input type="text" placeholder="Podaj E-mail" name="email">
    <br>
    <br>
    Rodzaj prawojazdy:
    <select name="sele">
        <option value="A1" >A1</option>
        <option value="A2" >A2</option>
        <option value="A" >A</option>
        <option value="B1" >B1</option>
        <option value="B" >B</option>
        <option value="C" >C</option>
        <option value="C1" >C1</option>
        <option value="D" >D</option>
    </select>
    <br>
    <br>
    <input type="submit" value="Rejestruj się">
    </form>

    <?php
    $connect2=new mysqli("localhost","root","","wypozyczalnia");
    if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['pesel']) && isset($_POST['login']) && isset($_POST['pass1']) && isset($_POST['pass2']) && isset($_POST['email']) && isset($_POST['sele'])){
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $pesel=$_POST['pesel'];
    $login=$_POST['login'];
    $pass=$_POST['pass1'];
    $emial=$_POST['email'];
    $sele=$_POST['sele'];

    $sql1="INSERT INTO `uzytkownicy` (`Login`, `Haslo`, `Uprawnienia`) VALUES ('$login', '$pass', '2');";
    $result1=$connect2->query($sql1);
    $IDUSER = $connect2->insert_id;
    $sql2="INSERT INTO `dane_osobowe` (`ID_user`, `Imie`, `Nazwisko`, `PESEL`) VALUES ('$IDUSER','$name', '$surname', '$pesel');";
    $sql3="INSERT INTO `prawo_jazdy` (`ID_osoby`,`Kategoria`) VALUES ('$IDUSER','$sele');";

    $result2=$connect2->query($sql2);
    $result3=$connect2->query($sql3);
    }

    $connect2->close();
    ?>

    </div>
    <footer>
    <span id="foottx">Autorzy: Kacper Rzeszowski i Patryk Szaroleta</span>
    </footer>
</body>
</html>