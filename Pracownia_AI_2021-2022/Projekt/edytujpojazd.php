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
            <li><a href="./dostawa_admin.php">Samochody dostawcze</a></li>
            <li><a href='logowanie.php?akcja=wyloguj'>Wyloguj się</a></li>
        </ul>
    </div>

<div id="main_reszt">
<div id="rezerwacja">
<?php 
session_start();
$ile=$_SESSION['wiersze'];
$rodzaj=$_SESSION['rodzaj'];
for($i=1;$i<$ile;$i++)
{
    if(isset($_POST['submit'.$i]))
    {
        $id=$_POST['id'];
    }
}
$connect=mysqli_connect("localhost", "root", "", "wypozyczalnia");
$query=mysqli_query($connect, "SELECT * FROM `pojazdy` where `ID_pojazdu`=$id");

$tablica=mysqli_fetch_array($query);
$marka=$tablica['Marka'];
$model=$tablica['Model'];
$rejestracja=$tablica['Rejestracja'];
$cena=$tablica['Cena'];
$opis=$tablica['Opis'];
$_SESSION['id']=$id;
?>
<form action="edytujpojazd2.php" method="post">
            <table>
            <tr>
            <td>Rejestracja: </td><td><input type="text" name="rejestracja" value="<?php echo $rejestracja?>"></td>
            </tr>
            <tr>
            <td>Marka: </td><td><input type="text" name="marka" value="<?php echo $marka?>"></td>
            </tr>
            <tr>
            <td>Model: </td><td><input type='text' name="model" value="<?php echo $model?>"></td>
            </tr>
            <tr>
            <td>Cena: </td><td><input type="number" name="cena" value="<?php echo $cena?>"></td>
            </tr>
            <tr>
            <td>Opis: </td><td><input type="text" name="opis" value="<?php echo $opis?>"></td>
            </tr>
            <tr>
            <td>
            <?php
                if($rodzaj==1)
                {
                    echo "<a href='osobowe_admin.php'>Anuluj edycje</a>";
                }
                else if($rodzaj==2)
                {
                    echo "<a href='dostawa_admin.php'>Anuluj edycje</a>";
                }
                else if($rodzaj==3)
                {
                    echo "<a href='bus_admin.php'>Anuluj edycje</a>";
                }
            ?>
            </td>
            <td>
            <input type="submit" name="zapisz" value="Zapisz">
            </td>
            </tr>
            </table>
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

