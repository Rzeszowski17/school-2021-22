<!DOCTYPE html>
<head ln="PL">
</head>
<body>
    <?php 
    $connect=@new mysqli("localhost","root","","kalendarz");

    $sql1 = "SELECT `zadania`.`dataZadania`, `zadania`.`miesiac`, `zadania`.`wpis`
    from `zadania`
    where `zadania`.`miesiac` like 'sierpien'";

    $sql2 = "SELECT `zadania`.`miesiac`, `zadania`.`rok`
    from `zadania`
    where `zadania`.`dataZadania` like '2020-08-01'";

    $result1 = $connect ->query($sql1);
    $result2 = $connect ->query($sql2);
    echo"<h2>Zadanie 1 </h3>";
    while($row1 = $result1 ->fetch_assoc()){
        print("$row1[dataZadania], $row1[miesiac], $row1[wpis]<br>");
    }
    echo "<hr>";
    echo"<h2>Zadanie 2</h3>";
    while($row2 = $result2 ->fetch_assoc()){
        print("$row2[miesiac], $row2[rok]");
    }
    echo "<hr>";
    ?>
    <h2>Zadanie 4</h2>
    <form method="POST">
    <input type="text" name="pole1">
    <input type="submit">
    <?php
    if(!empty($_POST['pole'])){
        @$wyn=$_POST['pole'];
        $sql4 = "UPDATE `zadania` set `wpis`='$wyn'
        where `zadania`.`dataZadania` like '2020-08-27'";
        $result4 = $connect ->query($sql4);
    }
    ?>
    <h2>Zadanie 5</h2>
    <form method="POST">
    <input type="text" name="pole2">
    <input type="date" name="data">
    <input type="submit">
    <?php
    if(isset($_POST)){
        $pole=$_POST['pole2'];
        $date=$_POST['data'];
        $sql5 = "INSERT INTO `zadania`( `dataZadania`, `wpis`) 
        VALUES ('$date','$pole')";
        $result5 = $connect ->query($sql5);
    }
    ?>
</form>
</body>
</html>