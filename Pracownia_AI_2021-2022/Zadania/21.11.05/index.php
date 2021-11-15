<!DOCTYPE html>
<html lang="pl">
<head>
    <link rel="stylesheet" href="style.css">
    <title>05.11.21</title>
</head>
<body>
    <form method="POST">
    <?php
    $connect=@new mysqli("localhost","root","","personalia");
    $sql1="SELECT `dane`.`Zawod`
    FROM `dane`
    GROUP by `dane`.`Zawod`";
    $result1=$connect->query($sql1);
    echo"<select name='Zawod'>";
    while($row=$result1->fetch_assoc()){
        print(" 
            <option>$row[Zawod]</option>
        ");
    }
    echo"</select>";
    ?>
    <input type="submit" name="but" value="Wyświetl">
</form>
    <?php
    if(isset($_POST['Zawod'])){
        $zaw=$_POST['Zawod'];

    $sql2="SELECT *
    from `osoby`
    INNER join `dane`
    on `osoby`.`Id_osoby`=`dane`.`Id_osoby`
    where `dane`.`Zawod` like '$zaw'";
    $result2=$connect->query($sql2);
    echo "<table>
        <th>
        <td>Id</td>
        <td>Imie</td>
        <td>Nazwisko</td>
        <td>Pesel</td>
        <td>Data_ur</td>    
        <td>Zawod</td>
        </th>
    ";
    while($row=$result2->fetch_assoc()){
        print("
        <tr>
        <td><img src='./Photos/$row[Zdjecie]'</td>
        <td>$row[Id_osoby]</td>
        <td>$row[Imie]</td>
        <td>$row[Nazwisko]</td>
        <td>$row[Pesel]</td>
        <td>$row[Data_ur]</td>
        <td>$row[Zawod]</td>
        </tr>
        ");
    }
    echo "</table>";

    //$date=date("Y-m-d");
    $date="2021-11-24";
    $sql3="SELECT `osoby`.`Imie`, `osoby`.`Nazwisko`, `osoby`.`Pesel`, `dane`.`Data_ur`
    from `osoby`
    INNER JOIN `dane`
    on `osoby`.`Id_osoby`=`dane`.`Id_osoby`";
    $result3=$connect->query($sql3);
    echo "<textarea>"; 
    while($row=$result3->fetch_assoc()){
        if($date==$row['Data_ur']){
            print("$row[Imie] $row[Nazwisko] $row[Data_ur] (Ma urodziny)".PHP_EOL);
        }
        else{
            print("$row[Imie] $row[Nazwisko] $row[Data_ur]".PHP_EOL);
        }
    }
    echo "</textarea>";

    $sql3="SELECT *
    from `osoby`
    INNER join `dane`
    on `osoby`.`Id_osoby`=`dane`.`Id_osoby`
    where `dane`.`Zawod` like '$zaw'";

    $result4=$connect->query($sql3);

    if(file_exists('wynik.txt')){
        echo "Plik istnieje";
    }else{
        echo "Plik istnieje";
    }
    $plik=fopen('wynik.txt','a+');

    echo"<ul>";
    while($row=$result4->fetch_assoc()){
            $text="$row[Id_osoby], $row[Imie], $row[Nazwisko], $row[Pesel], $row[Data_ur], $row[Zawod]";
            fwrite($plik,$text);
            $tresc=feof($plik);
            echo "<ol>$tresc</ol>";
    }
    echo"</ul>";
    }
    $connect->close();
    ?>
</body>
</html>