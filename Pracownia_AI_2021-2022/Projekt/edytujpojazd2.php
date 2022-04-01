<?php 
session_start();
    $rejestracja=$_POST['rejestracja'];
    $marka=$_POST['marka'];
    $model=$_POST['model'];
    $cena=$_POST['cena'];
    $opis=$_POST['opis'];
    $id=$_SESSION['id'];
    $rodzaj=$_SESSION['rodzaj'];

    $connect=mysqli_connect("localhost", "root", "", "wypozyczalnia");
    $query=mysqli_query($connect, "UPDATE `pojazdy` SET `Rejestracja`='$rejestracja',`Marka`='$marka',`Model`='$model',`Opis`='$opis',`Cena`='$cena' WHERE `ID_pojazdu`=$id");

    if($rodzaj==2)
    {
    header("location:dostawa.php");
    }
    else if($rodzaj==1)
    {
    header("location:osobowe.php");
    }
    else if($rodzaj==3)
    {
    header("location:bus.php");
    }

?>