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
    <h3>WYSZUKIWANIE TYTUŁU</h3>
    <p>Wpisz tytuł lub fragment tytuły</p>
    <form method="POST">
    <input type="text" name="wys">
    <?php
        $connect=@new mysqli("localhost","root","","muzeum");
    ?>
    <input type="submit">
    </form>
    <?php
    if(!empty($_POST["wys"])){
        $wyn=$_POST["wys"];
        $sql = "SELECT `malarze`.`Imie`,`malarze`.`Nazwisko`, `obrazy`.`Tytul`
        from `malarze`
        INNER JOIN `obrazy`
        on `malarze`.`ID_malarza`=`obrazy`.`ID_malarza`
        where `obrazy`.`Tytul` like '%$wyn%'";
        $result =$connect->query($sql);     
        echo "<table>";                                                            
        while($row = $result->fetch_assoc()){
            print("
            <tr>
            <td>$row[Imie]</td>
            <td>$row[Nazwisko]</td>  
            <td>$row[Tytul]</td>
            </tr>             
            ");
         }
        echo "</table>";

    }
    
    ?>
</div>
<footer>&copy;Wszelkie prawa zatrzeżone Kacper Rzeszowski</footer>
</body>
</html>