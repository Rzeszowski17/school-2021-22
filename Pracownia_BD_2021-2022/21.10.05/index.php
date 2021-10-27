<!DOCTYPE htnml>
<head>
<title>05.10.21</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $connect=@new mysqli("localhost","root","","biuro_podrozy");
    $sql1 = "SELECT * FROM `zdjecia`";
    $sql2 = "SELECT `wycieczki`.`id`, `wycieczki`.`dataWyjazdu`, `wycieczki`.`cel`, `wycieczki`.`cena`
    from `wycieczki`";
    $result1 = $connect->query($sql1);
    $result2 = $connect->query($sql2);
    while($row1 = $result1->fetch_assoc()){
        print("<img src=$row1[nazwaPliku] title=$row1[podpis]>");
   }
     print("
        <table>
        <tr>
        <th>Id</th>
        <th>Data_wyjazdu</th>
        <th>Cel</th>
        <th>Cena</th>
        </tr>
     ");
    while($row2 = $result2->fetch_assoc()){
         print("
         <tr>
         <td>$row2[id]</td>
         <td>$row2[dataWyjazdu]</td>
         <td>$row2[cel]</td>
         <td>Cena: $row2[cena]</td>
         </tr>
         ");
     }
     print ("</table>");
    
    ?>
</body>
</html>