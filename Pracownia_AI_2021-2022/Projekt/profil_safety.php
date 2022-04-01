<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/style.css">
    <link rel="stylesheet" href="./Style/style_profil.css">
    <link rel="icon"  href="./Photos/ICON.png">
    <title>Samochody od ręki</title>
</head>
<body>
    <div id="baner">
        <span id="banertx">Samochody od ręki</span>
    </div> 

    <div id="lista">
        <ul>
            <li id="glow"><a href="./index.php" id="glow"><img src="./Photos/Domek.png"></a></li>
            <li><a href="./osobowe_user.php">Samochody osobowe</a></li>
            <li><a href="./bus_user.php">Busy</a></li>
            <li><a href="./dostawa_user.php">Samochody dostawcze</a></li>
            <li><a href="./logowanie.php?akcja=wyloguj">Wyloguj się</a></li>        
        </ul>
    </div>
    
    <div id="main_reszt">
        <div class="zakladki">
            <p><a href="profil_user.php" class="zakla">Dane osobowe</a>
            <a href="profil_safety.php" class="zakla">Bezpieczeństwo</a>
            <a href="profil_common.php" class="zakla">Aktualne rezerwacje</a>
            <a href="profil_history.php" class="zakla">Historia rezerwacji</a></p>
        </div>
        <?php
        session_start();
        $connect=mysqli_connect("localhost", "root", "","wypozyczalnia");
        $id=$_SESSION['id'];
        $query=mysqli_query($connect, "SELECT `ID`, `Login`,`Haslo` FROM `uzytkownicy` where `ID`=$id");
        while($tablica=mysqli_fetch_array($query))
        {
        $imie=$tablica['Login'];
        $nazwisko=$tablica['Haslo'];
        }
        ?>
        <div id="dane">
        <form action="edytujdane.php" method="post">
            <table>
            <tr>
            <td>Login: <input type="text" name="login" id="login" value="<?php echo $imie?>" disabled></td>
            </tr>
            <tr>
            <td>Stare hasło: <input type="password" name="old" id="old" placeholder="Podaj stare haslo" disabled></td>
            </tr>
            <tr>
            <td>Nowe hasło: <input type="password" name="new1" id="new1" placeholder="Wprowadz nowe haslo" disabled></td>
            </tr>
            <tr>
            <td>Powtórz hasło: <input type="password" name="new2" id="new2" placeholder="Powtorz nowe haslo" disabled></td>
            </tr>
            <tr>
            <td><input type="button" id="edytuj" value="Edytuj">
            <input type="submit" name="save2" id="zapisz" value="Zapisz" disabled hidden>
            <input type="button" id="anuluj" value="Anuluj" disabled hidden></td>
            </tr>
            </table>
        </form>
        </div>
        <script>
            var edycja=document.getElementById("edytuj");
            edycja.onclick=function(){
                document.getElementById("login").disabled=false;
                document.getElementById("old").disabled=false;
                document.getElementById("new1").disabled=false;
                document.getElementById("new2").disabled=false;
                document.getElementById("zapisz").disabled=false;
                document.getElementById("zapisz").hidden=false;
                document.getElementById("anuluj").disabled=false;
                document.getElementById("anuluj").hidden=false;
                document.getElementById("edytuj").disabled=true;
            }
            var anuluj=document.getElementById("anuluj");
            anuluj.onclick=function()
            {
                document.getElementById("edytuj").disabled=false;
                document.getElementById("login").disabled=true;
                document.getElementById("old").disabled=true;
                document.getElementById("new1").disabled=true;
                document.getElementById("new2").disabled=true;
                document.getElementById("zapisz").disabled=true;
                document.getElementById("anuluj").disabled=true;
                document.getElementById("zapisz").hidden=true;
                document.getElementById("anuluj").hidden=true;
            }
        </script>
    </div>    
</body>
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
</html>