<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Sprawdź pesel</title>
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
        <h2>PESEL</h2>
        <p>W numerze PESEL zawarta jest informacja o płci osoby. 
           Jeżeli przedostatnia cyfra numeru
           jest parzysta, to PESEL należy do kobiety, jeśli nieparzysta, to do mężczyzny.</p>
        <p>Formularz ma wyświetlić płeć osoby której pesel wpiszemy w formularzu</p>
        <form method="POST">
            PESEL: <input type="number" name='pesel' maxlength="12">
        <?php
        $connect =@new mysqli("localhost","root","","biblioteka");
        ?>
        <input type="submit" value=Prześlij>
        </form>
        <?php
        if(isset($_POST['pesel'])){
            $pes=$_POST['pesel'];

            //Zadanie zrobione po stronie php
            // $plec = substr($pes,9,2);
            // if($plec%2==0){
            //     print("Kobieta");
            // }else{
            //     print("Mężczyzna");
            // }

            //Zadanie zrobione po stronie sql
            $sql1="SELECT case when right($pes,2)%2=0 THEN 'Kobieta' else 'Mężczyzna' end as `plec`
            from `studenci`
            GROUP by `plec`";
            $result1 = $connect->query($sql1);
            while($row = $result1->fetch_assoc()){
                print("$row[plec]");
           }
        }
           $sql2="SELECT COUNT(`studenci`.`imie`) as `liczba`,
           if(`studenci`.`imie` like '%a', 'Kobiet', 'Mężczyzn') as `plec`
           from `studenci`
           GROUP by `plec`";

           $result2 = $connect->query($sql2);

           echo"<h4>Liczba kobiet i liczbę mężczyzn wśród studentów</h4>";
           echo"<div id='plec'>";
           echo"<ul>";

           while($row = $result2->fetch_assoc()){
               print("
               <li>$row[plec] $row[liczba]</li>
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