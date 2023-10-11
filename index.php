<?php
/*
  array - variable which can hold more than one value at a time
*/ 

##indexed array:

$fruits=array("apple","orange","banana","mango");
// array_push($fruits,"coconut","d");

// echo $fruits[0]."<br>";
// echo $fruits[1];
// echo "<br><br>";
// foreach($fruits as $fruit){
//     echo $fruit."<br>";
// }
// echo "<br><br>";

// foreach($fruits as $fruit){
//     echo $fruit[0]."<br>";
// }

// echo "<br><br>";

// $fruits[0]="coconut";
// foreach($fruits as $f){
//     echo $f."<br>";
// }

// echo "<br><br>";

$reverse_fruits=array_reverse($fruits);

foreach($reverse_fruits as $fruit){
    echo $fruit."<br>";
}
echo count($fruits);
?> 