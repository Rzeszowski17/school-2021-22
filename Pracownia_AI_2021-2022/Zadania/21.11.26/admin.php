<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj prezent</title>
</head>
<body>
    <?php
    $connect=new mysqli("localhost","root","","forum2");

    $sql1="SELECT * FROM `prezenty`";
    $result1=$connect->query($sql1);
    echo"<table>";
    echo"<tr>";
    echo"<th>ID</th>";
    echo"<th>Nazwa prezentu</th>";
    echo"</tr>";
    while($row=$result1->fetch_assoc()){
        echo"<tr>";
        echo"<td>$row[id]</td>";
        echo"<td>$row[nazwa]</td>";
        echo"</tr>";
    }
    echo"</table>";
    ?>
    <form method="POST">
    <h4>Dodaj prezent do listy</h4>
    <input type="text" name="add" placeholder="Dodaj prezent">
    <input type="submit" name="sub1" value="Dodaj prezent">
    </form>
    <?php
    if(isset($_POST['add']) && isset($_POST['sub1'])){
    $prez=$_POST['add'];

    $sql2="INSERT INTO `prezenty` (`nazwa`) VALUES ('$prez')";
    $result2=$connect->query($sql2);
    }
    ?>
    <!-- <form method="POST">
    <h4>Usuń prezent</h4>
    //<?php
    //$sql3="SELECT * FROM `prezenty`";
    //$result3=$connect->query($sql3);
    //echo "<select name='wyb'>";
    //while($row=$result3->fetch_assoc()){
    //echo "<option value='$row[id]'>$row[name]</option>";
    //}
    //echo"</select>";
    ?>
    </form> -->
    <form method="POST">
    <h4>Usuń prezent</h4>
    <input type="text" name="usu" placeholder="Podaj ID prezentu">
    <input type="submit" name="sub2" value="Usuń prezent">
    </form>
    <?php
    if(isset($_POST['usu']) && isset($_POST['sub2'])){
        $usun=$_POST['usu'];
    $sql4="DELETE FROM `prezenty` WHERE `prezenty`.`id` = '$usun'";
    $result4=$connect->query($sql4);
    }
    $connect->close();
    ?>
</body>
</html>