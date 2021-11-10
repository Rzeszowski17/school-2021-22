<!DOCTYPE html>
<html lang="en">
<head>
    <title>05.11.21</title>
</head>
<body>
    <form method="POST">
    <?php
    $connect=@new mysqli("localhost","root","","mat_2020_kwie");
    if($connect==TRUE){
        echo "Baza jest podlączona";
        echo "<br>";
        echo "<br>";
    }else{
        echo "Baza nie jest podlączona";
        echo "<br>";
        echo "<br>";
    }

    $sql1="SELECT `zabiegi`.`dzial`
    from `zabiegi`
    GROUP by `zabiegi`.`dzial`";
    $result1=$connect->query($sql1);
    echo "<select name='dzial'>";
    while($row=$result1->fetch_assoc()){
        print("
        <option>$row[dzial]</option>
        ");
    }
    echo "</select>";
    ?>
    <input type="submit" name="sub" value="Wybierz">
    </form>
    <?php
    if(isset($_POST['dzial'])){
        $wyb=$_POST['dzial'];

    $sql2="SELECT `klienci`.`imie`, `klienci`.`nazwisko`
    from `klienci`
    INNER JOIN `wizytydane`
    on `wizytydane`.`id_klienta`=`klienci`.`id_klienta`
    inner join `wizytyzabiegi`
    on `wizytydane`.`id_wizyty`=`wizytyzabiegi`.`id_wizyty`
    INNER join `zabiegi`
    on `wizytyzabiegi`.`kod_zabiegu`=`zabiegi`.`kod_zabiegu`
    where `zabiegi`.`dzial` like '$wyb'";

    $result2=$connect->query($sql2);
    while($row=$result2->fetch_assoc()){
        echo"$row[imie] $row[nazwisko]";
        echo"<br>";
    }
    }
    $connect->close();
    ?>
</body>
</html>