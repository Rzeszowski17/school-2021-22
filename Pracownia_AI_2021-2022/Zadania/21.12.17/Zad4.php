<?php
    $text1="jeżyk bardzo słodki jest ";
    $text2="Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla alias est fugiat neque. Commodi, harum maxime, praesentium consectetur eligendi cupiditate ratione deleniti, explicabo quam exercitationem at veniam voluptates neque quae?";
    echo "Orginalny tekst: ".$text1;
    echo "<br>";
    echo "<br>";
    echo "Pierwsza litera duża: ".ucfirst($text1);
    echo "<br>";
    echo "<br>";
    echo "Wszystkie pierwsze literu duże: ".ucwords($text1);
    echo "<br>";
    echo "<br>";
    echo "Wszystkie litery duże: ".strtoupper($text1);
    echo "<br>";
    echo "<br>";
    echo "Wyświetlene w kolumnie o szerkości 20 znaków: ";
    echo "<br>";
    $wrap=wordwrap($text2, 20, '<br>');
    echo $wrap;
?>