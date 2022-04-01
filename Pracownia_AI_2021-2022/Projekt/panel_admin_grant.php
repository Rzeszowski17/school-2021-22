<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/style.css">
    <link rel="stylesheet" href="./Style/style_profil.css">
    <link rel="icon" href="./Photos/ICON.png">
    <title>Samochody od ręki</title>
</head>
<body>
    <div id="baner">
        <span id="banertx">Samochody od ręki</span>
    </div> 

    <div id="lista">
        <ul>
            <li id="glow"><a href="./index.php" id="glow"><img src="./Photos/Domek.png"></a></li>
            <li><a href="./osobowe_admin.php">Samochody osobowe</a></li>
            <li><a href="./bus_admin.php">Busy</a></li>
            <li><a href="./dostawa_admin.php">Samochody dostawcze</a></li>
            <li><a href='logowanie.php?akcja=wyloguj'>Wyloguj się</a></li>
        </ul>
    </div>
    
    <div id="main_reszt">
        <div class="zakladki">
        <p>
            <a href="panel_admin.php" class="zakla">Dodaj pojazd</a>
            <a href="panel_admin_delete.php" class="zakla">Usuń pojazd</a>
            <a href="panel_admin_grant.php" class="zakla">Nadaj uprawnienia</a>
        </p>
            
        </div>
        
        <div id="dane_grant">
        <?php
        session_start();
        $connect=mysqli_connect("localhost", "root", "","wypozyczalnia");
        $q1=mysqli_query($connect, "SELECT * from `uzytkownicy`
        INNER join `dane_osobowe`
        on `uzytkownicy`.`ID`=`dane_osobowe`.`ID_user`;");
        echo "<form action='uprawnienia.php' method='POST'><table>";
        echo "<th>ID</th><th>Login</th><th>Imie</th><th>Nazwisko</th><th>Aktualne uprawnienia</th><th>Nowe uprawnienie</th>";
        $i=1;
        while($tablica=mysqli_fetch_array($q1))
        {
            if($tablica['Uprawnienia']==1)
            $rola="Admin";
            else 
            $rola="User";
            echo "<tr><td>".$tablica['ID']."</td><td>".$tablica['Login']."</td><td>".$tablica['Imie']."</td><td>".$tablica['Nazwisko']."</td><td>".$rola."</td><td><select name='grant[]'><option value='1'>Admin</option><option value='2'>User</option></select></tr>";
        $i++;
        }
        $_session['liczba_userow']=$i;

        
        echo "</table>";
        echo "<input type='submit' name='submit' value='Zaktualizuj uprawnienia'></form>";


        ?>
        </div>
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