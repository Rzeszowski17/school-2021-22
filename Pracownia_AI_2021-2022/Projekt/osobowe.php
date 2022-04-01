<?php
session_start();
if(isset($_GET['akcja']) && $_GET['akcja']=="wyloguj"){
    unset($_SESSION['zalogowany']);
}
if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany']==2)
{
header("location:osobowe_user.php");
}
else if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany']==1)
{
header("location:osobowe_admin.php");
}
else
{
header("location:osobowe_guest.php");
}
?>