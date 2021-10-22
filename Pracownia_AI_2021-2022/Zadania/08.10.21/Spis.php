<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Spis wypożyczeń</title>
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
        <h2>SPIS WYPOŻYCZONYCH KSIĄŻEK</h2>
        <form method="POST">
            PESEL: <input type="number" name="pesel">
            <?php
            $connect = @new mysqli("localhost","root","","biblioteka");
            ?>
            <input type="submit" value="Prześlij">
            </form>
            <?php
            if(isset($_POST['pesel'])){
                $pes = $_POST['pesel'];

                $sql1="SELECT `tytul`,count(`wypozyczenia`.`lp`) as `liczba` 
                FROM `studenci`
                inner join `wypozyczenia`
                ON `wypozyczenia`.`pesel`=`studenci`.`pesel`
                where `wypozyczenia`.`pesel` like '$pes'
                group by `wypozyczenia`.`tytul`";

                $result1 = $connect->query($sql1);

                echo"<br>";
                echo"PESEL: $pes";
                echo"<br>";
                echo"<br>";
                echo"Wypożyczone książki";
                echo"<table>";
                while($row = $result1->fetch_assoc()){
                        print("
                        <tr>
                        <td>$row[tytul]</td>
                        </tr>
                        ");
                }
                echo"</table>";
                echo"<br>";
                echo"<br>";

                $sql2="SELECT count(`wypozyczenia`.`lp`) as `liczba` 
                FROM `studenci`
                inner join `wypozyczenia`
                ON `wypozyczenia`.`pesel`=`studenci`.`pesel`
                where `wypozyczenia`.`pesel` like '$pes'
                group by `studenci`.`pesel`";

                $result2=$connect->query($sql2);
                while($row = $result2->fetch_assoc()){
                    print("
                    Liczba wyporzyczonych książek: $row[liczba]
                    ");
                }
            }

            $connect->close();
            ?>
    </div>
    <div id="menu2">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus sequi cupiditate qui sapiente deserunt dignissimos, repellat optio magni, commodi enim eos dolor doloremque asperiores rem excepturi provident laborum! Omnis, voluptas.
    </div>
    <footer>Bibliotek podręczników &copy Wszelkie prawa zastrzeżone Kacper Rzeszowski 4B2T</footre>
</body>
</head>