<?php 
    session_start();
    $rejestracja=$_SESSION['Rejestracja'];

    if(isset($_POST['Submit']))
    {
        $pesel=$_POST['PESEL'];
   
    $connect=mysqli_connect("localhost", "root", "", "wypozyczalnia");
    $qpojazd=mysqli_query($connect, "SELECT `pojazdy`.`ID_pojazdu`, `pojazdy`.`Rejestracja`
    from `pojazdy`
    where `pojazdy`.`Rejestracja`='$rejestracja'");

    while($tpojazdy=mysqli_fetch_array($qpojazd))
    {
        $pojazd=$tpojazdy['ID_pojazdu'];
    }
    $qosoba=mysqli_query($connect, "SELECT `dane_osobowe`.`ID`, `dane_osobowe`.`PESEL`
    from `dane_osobowe`
    where `dane_osobowe`.`PESEL`='$pesel'");
    while($tosoby=mysqli_fetch_array($qosoba))
    {
        $osoba=$tosoby['ID'];
    }

    $insert=mysqli_query($connect, "INSERT INTO `rezerwacje`(`ID_osoby`, `ID_pojazdu`, `Poczatek rezerwacji`, `Koniec rezerwacji`) VALUES ('$osoba','$pojazd','$_POST[DataP]','$_POST[DataK]')");

    if($_SESSION['strona']==1)
    header("location:osobowe_user.php");
    else if($_SESSION['strona']==3)
    header("location:dostawa_user.php");
    else if($_SESSION['strona']==3)
    header("location:bus_user.php");
}
    
    

?>