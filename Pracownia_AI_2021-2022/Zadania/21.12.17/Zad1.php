<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>17.12.21</title>
</head>
<body>
    <form method="POST">
    <p>Podaj listę zakupów po przecinku</p>
    <textarea name="prod"></textarea>
    <input type="submit" name="sub" value="prześlij">
    <br>
    </from>
    <?php
    if(isset($_POST['prod'])){
        $prod=$_POST['prod'];
    $produ = explode(", ",$prod);
    for($i=0;$i<count($produ);$i++){
        echo "<li>".$produ[$i]."</li>";
    }

    }
    
    ?>
    </body>
</html>