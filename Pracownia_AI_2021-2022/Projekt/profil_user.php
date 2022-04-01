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
            <li><a href='logowanie.php?akcja=wyloguj'>Wyloguj się</a></li>            
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
        $query=mysqli_query($connect, "SELECT `ID_user`,`Imie`,`Nazwisko`,`email`,`Data_urodzenia` FROM `dane_osobowe` where `ID_user`=$id");
        while($tablica=mysqli_fetch_array($query))
        {
        $imie=$tablica['Imie'];
        $nazwisko=$tablica['Nazwisko'];
        $email=$tablica['email'];
        $data=$tablica['Data_urodzenia'];
        }
        ?>
        <div id="dane">
        <form action="edytujdane.php" method="post">
            <table>
            <tr>
            <td>Imie: <input type="text" name="imie" id="imie" value="<?php echo $imie?>" disabled></td>
            </tr>
            <tr>
            <td>Nazwisko: <input type="text" name="nazwisko" id="nazwisko" value="<?php echo $nazwisko?>" disabled></td>
            </tr>
            <tr>
            <td>Email: <input type='email' name="email" id="email" value="<?php echo $email?>" disabled></td>
            </tr>
            <tr>
            <td>Data urodzenia: <input type="date" name="data" id="data" value="<?php echo $data?>" disabled></td>
            </tr>
            <tr>
            <td><input type="button" id="edytuj" value="Edytuj">
            <input type="submit" name="save1" id="zapisz" value="Zapisz" disabled hidden>
            <input type="button" id="anuluj" value="Anuluj" disabled hidden></td>
            </tr>
            </table>
        </form>
        </div>
        <script>
            var edycja=document.getElementById("edytuj");
            edycja.onclick=function(){
                document.getElementById("imie").disabled=false;
                document.getElementById("nazwisko").disabled=false;
                document.getElementById("email").disabled=false;
                document.getElementById("data").disabled=false;
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
                document.getElementById("imie").disabled=true;
                document.getElementById("nazwisko").disabled=true;
                document.getElementById("email").disabled=true;
                document.getElementById("data").disabled=true;
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
</footer>
</html>