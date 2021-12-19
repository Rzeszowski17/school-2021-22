<?php
session_start();

if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany']==1){
    echo 'jeste dostęp admin :)';
}else if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany']==0){
    echo 'jest dostęp usera :)';
}else{
    echo 'brak dostępu :)';
}
?>