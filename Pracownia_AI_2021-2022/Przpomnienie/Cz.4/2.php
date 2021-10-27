<!DOCTYPE html>
<head>
    <title>13.09.21</title>
</head>
<body>
    <form method="POST" action="2.php">
        <select name="Nazwisko">

    <?php
    $connect = @new mysqli("localhost","root","","szkola2021_22");
    $sql = "SELECT `klasa`.`Nazwisko` FROM `klasa`";
    $result = $connect->query($sql);
    while ($row = $result->fetch_assoc()){

        print("<option>$row[Nazwisko]</option>");
        
    }

    ?>

    <input type="submit">
    </form>
    <?php
        if(!empty($_POST)){
            $sql = "SELECT * FROM `klasa` WHERE `Nazwisko` = \"$_POST[Nazwisko]\"";
            $result = $connect->query($sql);
            while ($row = $result->fetch_assoc()){
        
                print("$row[Imie] $row[Nazwisko]");
                
            }        
        }
    ?>
</body>
</html>