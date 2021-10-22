<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Statystyki</title>
</head>
<body>
    <div id="logo">
        <h1>Biblioteka podręczników</h1> 
    </div>
    <div id="menu1">
        <a href="Spis.php">Spis wypożyczeń</a>
        <br>
        <a href="Stat.php">Statystyki</a>
        <br>
        <a href="Spra.php">Sprawdź pesel</a>
    </div>
    <div id="main">
        <h2>Statystyki</h2>
        <?php
        $connect=@new mysqli("localhost","root","","biblioteka");

        $sql1="SELECT`studenci`.`imie`, `studenci`.`nazwisko`,COUNT(`wypozyczenia`.`lp`) as `liczba`
        from `studenci`
        inner join `wypozyczenia`
        on `studenci`.`pesel`=`wypozyczenia`.`pesel`
        group by `studenci`.`pesel`
        ORDER by `liczba` desc
        limit 1";

        echo "<h4>Zadanie 1</h4>";

        $result1 = $connect->query($sql1);
        while($row = $result1 -> fetch_assoc()){
            print("<p>Imię i Nazwisko: $row[imie] $row[nazwisko]");
        }
        echo"<br>";

        $sql2="SELECT `wypozyczenia`.`tytul`
        from `wypozyczenia`
        INNER JOIN `studenci`
        on `studenci`.`pesel`=`wypozyczenia`.`pesel`
        where `studenci`.`imie`='KRZYSZTOF' and `studenci`.`nazwisko`='LEWANDOWSKI'";

        $result2 = $connect ->query($sql2);

        echo"<br>";
        echo "Tytuł książek";
        echo "<div id='licz'>";
        echo "<ul>";

        while($row = $result2 -> fetch_assoc()){
            print("<li>$row[tytul]</li>");
        }

        echo "</ul>";
        echo "</div>";

        echo "<h4>Zadanie 2</h4>";

        $sql3="SELECT round(avg(`Liczba`),4) as `sred` FROM `zad2`";
        $result3 = $connect -> query($sql3);
        while($row = $result3 -> fetch_assoc()){
            print("<p>Srednią liczbę osób zameldowanych w jednym pokoju
                   (wynika zaokrąglony do 4 miejsc po przecinku): $row[sred]");
        }

        echo "<h4>Zadanie 3</h4>";
        $sql4="SELECT `imie`,`nazwisko` FROM `studenci`
        left join `meldunek`
        ON`studenci`.`pesel`=`meldunek`.`pesel`
        where `meldunek`.`pesel` is null
        ORDER BY `nazwisko`asc";

        $result4 = $connect->query($sql4);
        echo"<div id='stud'>";
        echo"<ul>";
        while($row = $result4->fetch_assoc()){
            print("
            <li>$row[imie] $row[nazwisko]</li>
            ");
        }
        echo"</ul>";
        echo"</div>";
        $connect->close();
        ?>
    </div>
    <div id="menu2">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus sequi cupiditate qui sapiente deserunt dignissimos, repellat optio magni, commodi enim eos dolor doloremque asperiores rem excepturi provident laborum! Omnis, voluptas.
    </div>
    <footer>Bibliotek podręczników &copy Wszelkie prawa zastrzeżone Kacper Rzeszowski 4B2T</footre>
</body>
</head>