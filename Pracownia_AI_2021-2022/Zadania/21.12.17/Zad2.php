<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>17.12.21</title>
</head>
<body>
    <?php
    $wyn=0;
    $l=0;
    for($i=0;$wyn<100;$i++){
        $los=rand(1,20);
        $wyn+=$los; 
        if($l==0){
            if($los%2==0){
                echo"<span style='color:red; font-weight:bold'>".$los."</span>";
            }else{
                echo"<span>".$los."</span>";
            }
        }else{
            if($los%2==0){
                echo "+"."<span style='color:red; font-weight:bold'>".$los."</span>";
            }else{
                echo "+"."<span>".$los."</span>";
            }
        }
        $l++;
   }
    echo"=".$wyn;
    ?>
</body>
</html>