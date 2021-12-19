<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>17.12.21</title>
</head>
<body>
    <form method="POST">
    <p>Podaj ile liczb chcesz wylosować (z zakresu 100)</p>
    <input type="number" name="x" max="100"><br>
    <p>Podaj początek przedziału z zakresu od 5 do 99</p>
    <input type="number" name="y" min="5" max="99"><br>
    <p>Podaj koniec przedziału z zakresu od 5 do 99</p>
    <input type="number" name="z" min="5" max="99"><br>
    <input type="submit" name="sub" value="Pokaż przedział"><br>
    </form>
    <?php
    if(isset($_POST['x']) && isset($_POST['y']) && isset($_POST['z']) && isset($_POST['sub'])){
        $X=$_POST['x'];
        $X=$_POST['y'];
        $X=$_POST['z'];
    }
    
    ?>
</body>
</html>