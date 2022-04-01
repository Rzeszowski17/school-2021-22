<?php
session_start();
if(isset($_GET['akcja']) && $_GET['akcja']=="wyloguj"){
    unset($_SESSION['zalogowany']);
}
if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany']==2)
{
header("location:dostawa_user.php");
}
else if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany']==1)
{
header("location:dostawa_admin.php");
}
else
{
header("location:dostawa_guest.php");
}
?>