<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title>Muzeum Narodowe</title>
</head>
<body>
<div id="baner">
    <h2>Muzeum Narodowe</h2>
</div>
<div id="left">
    <a href="Muzeum.php">Wyszuiwanie tytułu</a>
    <br>
    <a href="Oddz.php">Oddziały</a>
    <br>
    <a href="Stat.php">Statystyki</a>
</div>
<div id="right">
    <h3>STATYSTYKI</h3>
    <?php
    $connect = @new mysqli("localhost","root","","muzeum");
    $sql1 ="SELECT `malarze`.`Imie`,`malarze`.`Nazwisko`,count(`obrazy`.`ID_obrazu`) as `liczba`
    from `malarze`
    inner join `obrazy`
    on `malarze`.`ID_malarza`=`obrazy`.`ID_malarza`
    where `obrazy`.`Stan` like 'ekspozycja stala' or `obrazy`.`Stan` like'ekspozycja czasowa'
    GROUP by `obrazy`.`ID_malarza`
    order by `liczba` desc
    limit 2";

    $sql2 = "SELECT LEFT(`obrazy`.`Tytul`, 1) as `litera`, COUNT(`obrazy`.`Tytul`) as `ilosc`
    FROM `oddzialy`
    inner join `obrazy`
    on `oddzialy`.`ID_oddzialu`=`obrazy`.`ID_oddzialu`
    where `oddzialy`.`Miejscowosc` like 'Warszawa'
    GROUP BY `litera` 
    ORDER BY `ilosc` desc
    limit 1";

    $sql3 = "SELECT `malarze`.`Imie`, `malarze`.`Nazwisko`, count(`obrazy`.`Stan`) as `liczba`
    from `malarze`
    inner JOIN `obrazy`
    on `malarze`.`ID_malarza`=`obrazy`.`ID_malarza`
    where `obrazy`.`Stan` like 'wypozyczony'
    GROUP by `malarze`.`Imie`
    order by `liczba` desc
    limit 1";

    $result1 = $connect ->query($sql1);
    $result2 = $connect ->query($sql2);
    $result3 = $connect ->query($sql3);
    echo "<table>";
    while($row1=$result1->fetch_assoc()){
        print("
        <tr>
        <td>$row1[Imie]</td>
        <td>$row1[Nazwisko]</td>
        <td>$row1[liczba]</td>
        </tr>
        ");
    }
    echo "</table>";
    echo"<br>";
    echo"<br>";
    while($row2=$result2->fetch_assoc()){
        print("$row2[litera]");
    }
    echo"<br>";
    echo"<br>";
    while($row3=$result3->fetch_assoc()){
        print("$row3[Imie] $row3[Nazwisko]");
    }
    
    ?>
</div>
<footer>&copy;Wszelkie prawa zatrzeżone Kacper Rzeszowski</footer>
</body>
</html>