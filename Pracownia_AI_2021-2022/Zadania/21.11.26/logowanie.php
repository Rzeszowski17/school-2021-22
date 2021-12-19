<?php
session_start();
if(isset($_GET['akcja'])&& $_GET['akcja']=="wyloguj"){
    unset($_SESSION['zalogowany']);
}
//  if(isset($_POST['login']) && isset($_POST['pass']) && ($_POST['login']=="admin") && ($_POST['pass'])=="admin"){
//     $_SESSION['zalogowany'] = 1;
// } 
//   if(isset($_POST['login']) && isset($_POST['pass']) && ($_POST['login']=="user") && ($_POST['pass'])=="user"){
//      $_SESSION['zalogowany'] = 0;
// } 
if(isset($_POST['login']) && isset($_POST['pass'])){
    $login=$_POST['login'];
    $pass=$_POST['pass'];

$connect=new mysqli("localhost","root","","forum2");

$sql1="SELECT * 
FROM `konta`
where `konta`.`login`='$login' and `konta`.`haslo` ='$pass'";

$result1=$connect->query($sql1);
while($row=$result1->fetch_assoc()){
    if(isset($_POST['login']) && isset($_POST['pass']) && ($_POST['login']=="$row[login]") && ($_POST['pass'])=="$row[haslo]"){
        $_SESSION['zalogowany'] = "$row[ranga]";

    if($_SESSION['zalogowany']==1){
        echo'<a href="admin.php">Pokaż listę z prezętami</a><br>';   
    }else{
        echo'<a href="wysw.php">Pokaż listę z prezętami</a><br>'; 
    }
    }
    }
}


if(!isset($_SESSION['zalogowany']))
{  
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>26.11.21</title>
</head>
<body>
    <form method="POST">
    Login:<input type="text" name="login"><br>
    Hasło:<input type="password" name="pass"><br>
    <input type="submit" value="zaloguj">
</body>
</html>
<?php
}
else{
     //echo "Tajne dane <br/>";
     echo "<a href='logowanie.php?akcja=wyloguj'>wyloguj</a>";
}
?>