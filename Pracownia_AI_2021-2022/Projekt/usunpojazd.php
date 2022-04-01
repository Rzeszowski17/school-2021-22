<?php
session_start();
$connect=mysqli_connect("localhost", "root", "","wypozyczalnia");
if(isset($_POST['submit']))
{
    $delete=$_POST['delete'];
    $max=$_SESSION['max'];
    for($j=0;$j<count($delete);$j++)
    {
        $query=mysqli_query($connect, "DELETE FROM `pojazdy` WHERE `ID_pojazdu`=$delete[$j]");
    }
    header("location:panel_admin_delete.php");
    
}
?>
