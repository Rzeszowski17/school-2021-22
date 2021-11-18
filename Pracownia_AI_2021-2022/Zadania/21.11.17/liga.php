<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style2.css">
    <title>piłka nożna</title>
</head>
<body>
    <div id="baner">
        <h3>Reprezentacja poslki w piłce nożnej</h3>
        <img src="./pliki/obraz1.jpg" alt="reprezentacja">
    </div>
    <div id="lewy">
        <form method="POST" action="./liga.php">
            <select name="poz">
            <option value="1">Bramkarze</option>
            <option value="2">Obrońcy</option>
            <option value="3">Pomocnicy</option>
            <option value="4">Napastnicy</option>
            </select>
            <input type="submit" value="Zobacz">
        </form>
        <img src="zad2.png" alt="piłka">
        <p>Autor: 02210704516</p>
    </div>
    <div id="prawy">
    <?php
    $connect=new mysqli("localhost","root","","egzamin");
    if(isset($_POST['poz'])){
        $poz=$_POST['poz'];

    $sql1= "SELECT `zawodnik`.`imie`, `zawodnik`.`nazwisko`
    from `zawodnik`
    WHERE `zawodnik`.`pozycja_id` = $poz;";
    $result1=$connect->query($sql1);
    echo "<ol>";
    while($row=$result1->fetch_assoc()){
        echo"<li>$row[imie] $row[nazwisko]</li>";
    }
    echo "</ol>";
    }

    ?>
    </div>
    <div id="główny">
        <h3>Liga mistrzów<h3>
    </div>
    <div id="liga">
        <?php
        $sql2="SELECT `liga`.`zespol`, `liga`.`punkty`, `liga`.`grupa`
        from `liga`
        order by `liga`.`punkty` desc;";
        $result2=$connect->query($sql2);
        while($row=$result2->fetch_assoc()){
            print("<div id='dro'>
            <h2>$row[zespol]</h2> 
            <h1>$row[punkty]</h1> 
            <p>grupa: $row[grupa]</p>
            </div>
            ");
            $connect->close();
        }
        ?>
    </div>
</body>
</html>