<?php 
if(isset($_POST['add']))
{
    $rejestracja=$_POST['rejestracja'];
    $marka=$_POST['Marka'];
    $model=$_POST['Model'];
    $opis=$_POST['opis'];
    $cena=$_POST['cena'];
    $typ=$_POST['typ'];
    $ilosc=$_POST['ilosc'];
    $zdjecie=$_POST['zdjecie'];
    
    $connect=mysqli_connect("localhost", "root", "", "wypozyczalnia");
    $addpojazd=mysqli_query($connect, "INSERT INTO `pojazdy`(`Rejestracja`, `Marka`, `Model`, `Opis`, `Cena`, `Typ`, `Ilosc miejsc`, `Zdjecie`) VALUES ('$rejestracja', '$marka', '$model', '$opis', $cena, '$typ', $ilosc, '$zdjecie')");
    header("location:panel_admin.php");
}
?>