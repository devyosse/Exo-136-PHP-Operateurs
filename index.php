<?php

// Premiere ligne
$a = 10;
$b = 5;
$total = $a * $b;
echo "$total"."<br>";

//Deuxieme ligne
$c = 10;
$d = 2;
$total = $c / $d;
echo "$total" ;

//Troisieme ligne
if($a == $b) {
    echo "<br><br>a est identique à b";
}

//Quatrieme ligne
if($a != $b) {
    echo"<br><br>a n'est pas identique à b";
}


//Cinquieme ligne
$arr1 = ["machin", "truc"];
$arr2 = ["truc", "machin"];
if($arr1 === $arr2) {
    echo "<br><br>les tableaux ont le même contenu";
}

