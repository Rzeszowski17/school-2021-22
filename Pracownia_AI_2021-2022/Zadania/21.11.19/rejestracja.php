<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="hobby.css">
    <title>Nasze hobby</title>
</head>
<body>
    <div id="baner">
    <h3>FORUM HOBBYSTYCZNE</h3>
    </div>
    <div id="lewy">
    <?php
    $connect=new mysqli("localhost","root","","forum");
    if(isset($_POST['nick'])&&(isset($_POST['hobby']))&&(isset($_POST['zawod']))&&(isset($_POST['plec']))){
        $nic=$_POST['nick'];
        $hob=$_POST['hobby'];
        $zaw=$_POST['zawod'];
        $ple=$_POST['plec'];
    $sql1="INSERT INTO 
    `uzytkownicy`( `nick`, `zainteresowania`, `zawod`, `plec`) 
    VALUES ('$nic','$hob','$zaw','$ple');";
    $result1=$connect->query($sql1);

    $sql2="SELECT `uzytkownicy`.`nick` 
    FROM `uzytkownicy`
    where `uzytkownicy`.`nick` = '$nic'";
    $result2=$connect->query($sql2);
    while($row=$result2->fetch_assoc()){
        print("Konta: $row[nick] zostało zarejestrowane na forum hobbystycznym");
    }
        
    }
    $connect->close();
    ?>
    </div>
    <div id="prawy">
        <h3>TEMATYKA FORUM</h3>
        <ul>
            <li>Hodowla zwierząt</li>
            <ul>
                <li>psy</li>
                <li>koty</li>
            </ul>
            <li>Muzyka</li>
            <li>Gry komputerowe</li>
        <ul>
    </div>
</body>
</html>