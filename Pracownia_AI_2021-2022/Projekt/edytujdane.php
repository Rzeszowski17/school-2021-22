<?php
session_start();
$id=$_SESSION['id'];
$connect=mysqli_connect("localhost", "root", "", "wypozyczalnia");
if(isset($_POST['save1']))
{
$imie=$_POST['imie'];
$nazwisko=$_POST['nazwisko'];
$email=$_POST['email'];
$data=$_POST['data'];

$edytuj=mysqli_query($connect, " UPDATE `dane_osobowe` SET `Imie`='$imie',`Nazwisko`='$nazwisko',`email`='$email',`Data_urodzenia`='$data' WHERE `ID_user`=$id");

header("location:profil_user.php");
}
if(isset($_POST['save2']))
{
$q1=mysqli_query($connect, "SELECT `ID`, `Login`,`Haslo` FROM `uzytkownicy` where `ID`=$id");
$tablica=mysqli_fetch_array($q1);
$login=$_POST['login'];
$old=$_POST['old'];
$new1=$_POST['new1'];
$new2=$_POST['new2'];
if($tablica['Haslo']==$old && $new1==$new2)
{
    $edytuj=mysqli_query($connect, " UPDATE `uzytkownicy` SET `Login`='$login',`Haslo`='$new1' WHERE `ID`=$id");
}
header("location:profil_safety.php");
}
?>