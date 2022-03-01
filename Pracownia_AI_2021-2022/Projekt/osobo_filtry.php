<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_input.css">
    <title>Samochody od ręki</title>
</head>
<body>

    <div id="baner">
    <span id="banertx"><h1>Samochody od ręki<h/h1></span>
    </div>

    <div id="main"> 
        <form method="post">
            Sortuj wg: 
            <select name='sortowanie'>
                <option value='asc'>Cena rosnąca</option>
                <option value='desc'>Cena malejąca</option>
            </select>
            <input type="submit" name="submit" value="Sortuj">
        </form>
        <?php 
        session_start();
        $connect=mysqli_connect("localhost", "root", "", "wypozyczalnia");
        mysqli_set_charset($connect, "UTF8");
        $query=mysqli_query($connect, "SELECT `Rejestracja`, `Model`, `Marka`, `Opis`, `Cena`, `Typ`,`Ilosc miejsc`, `Zdjecie` FROM `pojazdy` where `Typ`='osobowy'");

        // if(isset($_POST['submit']))
        // {
        //     $sort=$_POST['sortowanie'];
        //     $query=mysqli_query($connect, "SELECT `Rejestracja`, `Model`, `Marka`, `Opis`, `Cena`, `Typ`,`Ilosc miejsc`, `Zdjecie` FROM `pojazdy` where `Typ`='osobowy' ORDER BY `Cena` $sort");             
        // }
        $i=1;
        while($tablica=mysqli_fetch_array($query))
        {   
        echo "<div class='pojazd'><img src='$tablica[Zdjecie]'<br>".$tablica['Marka']." ".$tablica['Model']."<br>";
        echo $tablica['Typ'];
        echo "<br>".$tablica['Opis']."<br>".$tablica['Cena']." zł/dzień";
        echo "<br><a href='rezerwacja.php'><form method='POST'><input type='submit' value='Rezerwuj pojazd' name='submit$i'></form></a></div>";        
        $model[$i]=$tablica['Model'];
        $marka[$i]=$tablica['Marka'];
        $rejestracja[$i]=$tablica['Rejestracja'];
        $i++;
        }
        $max=$i;
        while($max>0)
        {
            if(isset($_POST['submit'.$max]))
            {
                $_SESSION['Marka']=$marka[$max];
                $_SESSION['Model']=$model[$max];
                $_SESSION['Rejestracja']=$rejestracja[$max];
                header("Location: rezerwacja.php");
            }
            $max--;
        }

        
        ?>    
</div>

    <footer>
    <span id="foottx">Autorzy: Kacper Rzeszowski i Patryk Szaroleta</span>
    </footer>
</body>
</html>