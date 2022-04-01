<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style/style.css">
    <link rel="stylesheet" href="./Style/style_rej.css">
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
            <li><a href="./osobowe_guest.php" >Samochody osobowe</a></li>
            <li><a href="./bus_guest.php">Busy</a></li>
            <li><a href="./dostawa_guest.php">Samochody dostawcze</a></li>
            <li><a href="./logowanie.php">Zaloguj się</a></li>
        </ul>
    </div>
    
    <div id="main_r"> 
    <div id="main_rej"> 
    <form method="POST" action="rejes_scr.php">
    <table>
    <tr>
    <th class="th_rej">Podaj nazwa użytkownika:</th>
    <th class="th_rej">Podaj Imie:</th>
    </tr>
    <tr>
    <td><input type="text"  placeholder="Nazwa użytkownika" name="login" required></td>
    <td><input type="text"  placeholder="Imie" name="name" required></td>
    </tr>
    <tr>
    <th class="th_rej">Podaj PESEL:</th>
    <th class="th_rej">Podaj Nazwisko:</th>
    </tr>
    <tr>
    <td><input type="text"  placeholder="PESEL" name="pesel" maxlength="11" required></td>
    <td><input type="text"  placeholder="Nazwisko" name="surname" required></td>
    </tr>
    <tr>
    <th class="th_rej">Podaj hasło: </th>
    <th class="th_rej">Powtórz hasło: </th>
    </tr>
    <tr>
    <td><input type="password"  placeholder="Podaj hasło" name="pass1" required></td>
    <td><input type="password"  placeholder="Powtórz hasło" name="pass2" required></td>
    </tr>
    <tr>
    <th class="th_rej">E-mail:</th>
    <th class="th_data">Data urodzenia:</th>
    </tr>
    <tr>
    <td><input type="text"  placeholder="Podaj E-mail" name="email" required></td>
    <td><input type="date" name="data" required></td>
    </tr>
    <tr>
    <th colspan="2" class="th_rej">Rodzaj prawojazdy:</th>
    </tr>
    <tr>
    <td  class="td_rej"><input type="checkbox" name="sele[]" value="A">A</td>
    <td  class="td_rej"><input type="checkbox" name="sele[]" value="B1">B1</td>
    </tr>
    <tr>
    <td class="td_rej"><input type="checkbox" name="sele[]" value="B">B</td>
    <td class="td_rej"><input type="checkbox" name="sele[]" value="C">C</td>
    </tr>
    <tr>
    <td class="td_rej"><input type="checkbox" name="sele[]" value="C1">C1</td>
    <td class="td_rej"><input type="checkbox" name="sele[]" value="D">D</td>
    </tr>
    </table>
    <br>
    <input type="submit" value="Rejestruj się" id="rej_but" name="submit">
    </form>
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