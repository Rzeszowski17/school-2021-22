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
            <li><a href="./profil_user.php">Profil</a></li>            
        </ul>
    </div>

    <div id="main_reszt">
        <div class="zakladki">
            <p><a href="profil_user.php" class="zakla">Dane osobowe</a>
            <a href="profil_safety.php" class="zakla">Bezpieczeństwo</a>
            <a href="profil_common.php" class="zakla">Aktualne rezerwacje</a>
            <a href="profil_history.php" class="zakla">Historia rezerwacji</a></p>
        </div>
        
        <div id="main_comm">
        <?php
        session_start();

        $connect=new mysqli("localhost","root","","wypozyczalnia");

        $sql="SELECT`pojazdy`.`Marka`, `pojazdy`.`Model`, `pojazdy`.`Cena`, `pojazdy`.`Typ`, `pojazdy`.`Rejestracja`, `rezerwacje`.`Poczatek rezerwacji`, `rezerwacje`.`Koniec rezerwacji`
        from `pojazdy`
        INNER join `rezerwacje` 
        on`pojazdy`.`ID_pojazdu`=`rezerwacje`.`ID_pojazdu`
        INNER JOIN `dane_osobowe`
        on `rezerwacje`.`ID_osoby`=`dane_osobowe`.`ID`
        where `dane_osobowe`.`ID` like '1';";

        $result=$connect->query($sql);

        $data = date("Y-m-d H:i:s");

        echo"<table id='tab_comm'>";
        echo "<tr>";
        echo "<th>Marka</th>";
        echo "<th>Model</th>";
        echo "<th>Typ</th>";
        echo "<th>Tablica rejestracyjna</th>";
        echo "<th>Kwota</th>";
        echo "</tr>";
        while($row=$result->fetch_assoc()){

        $dni=(strtotime($row['Koniec rezerwacji'])-strtotime($row['Poczatek rezerwacji']))/86400;
        $wynik=round($dni*$row['Cena'],2);

        if($data>=$row['Koniec rezerwacji']){

        echo"<tr>";
        echo "<td>".$row['Marka']."</td>";
        echo "<td>".$row['Model']."</td>";
        echo "<td>".$row['Typ']."</td>";
        echo "<td>".$row['Rejestracja']."</td>";
        echo "<td>".$wynik."</td>";
        echo"</tr>";
        }
        }
        echo"</table>";
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