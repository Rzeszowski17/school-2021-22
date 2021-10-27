<!DOCTYPE html>
<head>
    <title>01.10.21</title>
</head>
<body>
    <form method="POST">
    <h4>Przedmioty</h4>
    <?php
    $connect= @new mysqli("localhost","root","","szkola2021_22");
    $sql = "SELECT `przedmiot`.`przedmioty` FROM `przedmiot`";
    $result = $connect->query($sql);
    while ($row = $result->fetch_assoc()){

        print("<input type='checkbox' value='$row[przedmioty]' name='prze'>".$row['przedmioty']);

    }
    ?>
    <br>
    <input type="submit">
    </form>
    <?php
    if(!empty($_POST["prze"])){
        $prze=$_POST['prze'];
        $sql = "SELECT `przedmiot`.`przedmioty` FROM `przedmiot` where `przedmiot`.`przedmioty` like '$prze' ";
        $result =$connect->query($sql);
        while($row = $result->fetch_assoc()){
            echo"<br>";
            print("$row[przedmioty]");
        }
    }
    
    
    ?>

</body>
</html>