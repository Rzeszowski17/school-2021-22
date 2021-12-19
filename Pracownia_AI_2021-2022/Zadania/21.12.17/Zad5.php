<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <h4>Wybierz wyraz jaki szukasz w tekście poniżej</h4>
    <input type="text" name="sear">
    <input type="submit" name="sub" value="szukaj">
    </form>
<?php
    $text="
    Idzie, idzie jeż
    Ten kujący zwierz
    Nóżkami tup, tup 
    I pod listek siup 
    Jeżu, jeżu nasz, skąd igiełki masz ? 
    Same mi urosły";
    echo "<br>";
    $wrap=wordwrap($text, 25, '<br>');
    echo $wrap;
    echo "<br>";
    echo "<br>";

    $ile=0;

    if(isset($_POST['sear']) && isset($_POST['sub'])){
        $search=$_POST['sear'];

        $czy=strpos($text, $search);

        if($czy == TRUE){
            echo "Słowo znajduje się w tekście";
            for($i=0;$i<$ile;$i++){
                $ile++;
            }
            echo "<br>";
            echo "Słowo ".$search." występuje ".$ile." razy ";
        }else{
            echo "Słowo nie sznajduje się w tekście";
        }
    }
?>
</body>
</html>
