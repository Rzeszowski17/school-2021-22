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
<div id="right">
    <a href="Muzeum.php">Wyszuiwanie tytułu</a>
    <br>
    <a href="Oddz.php">Oddziały</a>
    <br>
    <a href="Stat.php">Statystyki</a>
</div>
<div id="left">
    <h3>ODDZIAŁY</h3>
    <?php
    $connect=@new mysqli("localhost","root","","muzeum");
    $sql="SELECT `oddzialy`.`Miejscowosc`, count(`obrazy`.`ID_oddzialu`) as`liczba`
    from `oddzialy`
    INNER join `obrazy`
    on `oddzialy`.`ID_oddzialu`=`obrazy`.`ID_oddzialu`
    group by `obrazy`.`ID_oddzialu`
    ORDER by `oddzialy`.`Miejscowosc` asc";
    $result=$connect->query($sql);
    while($row = $result->fetch_assoc()){
            print("
            <table>
            <tr>
            <td>$row[Miejscowosc]</td>
            <td>$row[liczba]</td>
            </tr>
            </table>
            ");
    }
    ?>
</div>
<footer>&copy;Wszelkie prawa zatrzeżone Kacper Rzeszowski</footer>
</body>
</html>