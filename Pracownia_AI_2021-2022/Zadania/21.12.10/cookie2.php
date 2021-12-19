<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10.12.21</title>
</head>
<body>
    <form method="POST">
        <input type="date" name="urod">
        <br>
        <input type="submit" name="sub" value="Oblicz">
        <br>
    </from>
    <?php
        if(isset($_POST['urod'])){
            $urod=$_POST['urod'];
            
            if(isset($_COOKIE['date1'])){
                setcookie('date1',$urod, time()+60);
            }else{
                setcookie('date1',$urod, time()+60);
                $date = date ('z');
                $urod=date('z',strtotime($urod));
                $ile=$urod-$date;
                if($ile<0)
                $ile=$ile+365;
                echo "Będziesz obchodził urodziny za:".' '.$ile;
            }
            
            
            

        }
    ?>
</body>
</html>
