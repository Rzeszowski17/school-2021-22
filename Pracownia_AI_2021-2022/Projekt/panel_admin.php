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
        <?php
        $connect=mysqli_connect("localhost", "root", "","wypozyczalnia");
        ?>
        <div id="dane_adm">
        <form action="dodajpojazd.php" method="post">
            <table>
            <tr>
            <td>Marka: <input type="text" name="Marka" ></td>
            </tr>
            <tr>
            <td>Model: <input type="text" name="Model" ></td>
            </tr>
            <tr>
            <td>Rejestracja: <input type="text" name="rejestracja" ></td>
            </tr>
            <tr>
            <td>Opis: <input type="text" name="opis" ></td>
            </tr>
            <tr>
            <td>Cena: <input type="number" name="cena" ></td>
            </tr>
            <tr>
            <td>Typ: <select name="typ">>
                        <option>Osobowy</option>
                        <option>Dostawczy</option> 
                        <option>Bus</option>  
                    </select>     
            </td>
            </tr>
            <tr>
            <td>Ilosc miejsc: <input type="number" name="ilosc"></td>
            </tr>
            <tr>
            <td>Zdjecie: <input type="text" name="zdjecie" ></td>
            </tr>
            <tr>
            <td>
            <input type="submit" name="add" value="Dodaj">
            </td>
            </table>
        </form>
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