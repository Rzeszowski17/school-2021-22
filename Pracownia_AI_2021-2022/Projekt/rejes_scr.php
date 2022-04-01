<?php
    $connect2=new mysqli("localhost","root","","wypozyczalnia");
    if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['pesel']) && isset($_POST['login']) && isset($_POST['pass1']) && isset($_POST['pass2']) && isset($_POST['email']) && isset($_POST['sele'])){
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $pesel=$_POST['pesel'];
    $login=$_POST['login'];
    $pass=$_POST['pass1'];
    $email=$_POST['email'];
    $sele=$_POST['sele'];
    $date=$_POST['data'];

    $sql1="INSERT INTO `uzytkownicy` (`Login`, `Haslo`, `Uprawnienia`) VALUES ('$login', '$pass', '2');";
    $result1=$connect2->query($sql1);
    $IDUSER = $connect2->insert_id;
    $sql2="INSERT INTO `dane_osobowe` (`ID_user`, `Imie`, `Nazwisko`, `PESEL`, `Email`, `Data_urodzenia`) VALUES ('$IDUSER','$name', '$surname', '$pesel', '$email', '$date');";
    $result2=$connect2->query($sql2);
    $IDUSER2 = $connect2->insert_id;
    for($i=0; $i<count($sele); $i++){
        $sql3="INSERT INTO `prawo_jazdy` (`ID_osoby`,`Kategoria`) VALUES ('$IDUSER2','$sele[$i]')";
        echo $sql3;
        $result3=$connect2->query($sql3);
    }    
    }

    $connect2->close();
   header("location:rejestracja.php");
    ?>