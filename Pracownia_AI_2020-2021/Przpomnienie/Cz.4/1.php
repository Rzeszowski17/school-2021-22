<!DOCTYPE html>
<head>
    <style>
        
        td, th, table{
            border: 1px solid black;
            border-collapse: collapse;

        }
    </style>
    <title>13.09.21</title>
</head>
<body>
    <h2>Szkoła</h2>
    <table>
        <tr>
        <th>Id</th>
        <th>Imie</th>
        <th>Nazwisko</th>
        <th>Klasa</th>
</tr>
    <?php
    $connect = @new mysqli("localhost","root","","szkola2021/22");
    $sql ="SELECT * FROM `klasa`";
    $result = $connect->query($sql);
    while ($row = $result->fetch_assoc()){
        echo<<<SHOW
        <tr>
        <td>$row[id]</td>
        <td>$row[Imie]</td>
        <td>$row[Nazwisko]</td>
        <td>$row[klasa]</td>
        </tr>
        SHOW;
    }
    ?>
</body>
</html>
