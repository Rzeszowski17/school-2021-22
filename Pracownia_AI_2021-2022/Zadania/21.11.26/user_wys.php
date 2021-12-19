<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista prezentów</title>
</head>
<body>
    <h4>Lista prezentów</h4>
    <?php
    $connect=new mysqli("localhost","root","","forum2");
    $sql3="SELECT * FROM `prezenty`";
    $result3=$connect->query($sql3);
    echo"<table>";
    echo"<tr>";
    echo"<th>ID</th>";
    echo"<th>Nazwa prezentu</th>";
    echo"</tr>";
    while($row=$result3->fetch_assoc()){
        echo"<tr>";
        echo"<td>$row[id]</td>";
        echo"<td>$row[nazwa]</td>";
        echo"</tr>";
    }
    echo"</table>";
    $connect->close();
    ?>
</body>
</html>