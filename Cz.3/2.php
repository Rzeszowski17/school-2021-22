<?php
if(isset($_POST['id1'])&&($_POST['id2'])&&($_POST['id3'])){
    $name=$_POST['id1'];
    $surn=$_POST['id2'];
    $age=$_POST['id3'];
    echo "Imie: ",$name,"<br>";
    echo "Nazwisko: ",$surn,"<br>";
    echo "Wiek: ",$age,"<br>";
}
?>