<?php
session_start();
$connect=mysqli_connect("localhost", "root", "", "wypozyczalnia");

$q1=mysqli_query($connect, "SELECT * from `uzytkownicy`
INNER join `dane_osobowe`
on `uzytkownicy`.`ID`=`dane_osobowe`.`ID_user`;");

if(isset($_POST['submit']))
{
    $grant=$_POST['grant'];
    $i=0;
    while($tablica=mysqli_fetch_array($q1))
    {
    $id[$i]=$tablica['ID'];
    $rank[$i]=$tablica['Uprawnienia'];
    echo  $id[$i]." ".$rank[$i];
    $i++;
    }
    $ile=$i;

    
    for($j=0;$j<$ile;$j++)
    {
    echo $grant[$j];
    if($rank[$j]!=$grant[$j])
        {
            $update=mysqli_query($connect, "UPDATE `uzytkownicy` SET `Uprawnienia`='$grant[$j]' WHERE `ID`=$id[$j]");
        }
    }
}
header("location:panel_admin_grant.php");
?>