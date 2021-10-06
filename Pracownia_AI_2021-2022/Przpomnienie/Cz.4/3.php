<!DOCTYPE html>
<head>
<title>13.09.21</title>
</head>
<body>
    <form action="3.php" method="POST">
    <h4>Klasa</h4>
    <?php
    $connect = @new mysqli("localhost","root","","szkola2021/22");
    $sql = "SELECT `klasa`.`klasa` FROM `klasa` group by `klasa`.`klasa`";
    $result = $connect->query($sql);
    while ($row = $result->fetch_assoc()){

        print("<input type='radio' value='$row[klasa]' name='klasa1'>".$row['klasa']);

    }
    ?>
    <input type="submit">
    </form>
    <?php
    if(!empty($_POST["klasa1"])){
        $cla=$_POST['klasa1'];
        $sql = "SELECT `klasa`.`Imie`, `klasa`.`Nazwisko` , `klasa`.`klasa` FROM `klasa` where `klasa`.`klasa` like '$cla' ";
        $result =$connect->query($sql);
        while($row = $result->fetch_assoc()){
            
            print("$row[Imie] $row[Nazwisko]");
        }
    }
    
    
    ?>
</body>