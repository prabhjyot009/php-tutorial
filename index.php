<?php
/*
   //Pre defined functions:
   ## string functions
   ## number functions
   ## math functions
*/

//String fucntion

$name="Singh brar";
echo strlen($name)."<br>";
echo str_replace("S","B",$name)."<br>";
echo str_replace("s","b",$name)."<br>";//it is not case sensitive
//case sensitive:
echo str_ireplace("s","b",$name)."<br>";
echo ucwords($name)."<br>";
echo strtoupper($name)."<br>";
echo strtolower($name)."<br>";
echo strrev($name)."<br><br>";

//Number functions
$num=30;
var_dump(is_int($num));
echo "<br>";
var_dump(is_float($num));
echo "<br>";
$num2=30.5;
var_dump(is_numeric($num2));
echo "<br>";
var_dump(is_string($num));
echo "<br>";
var_dump(is_bool($num));

//Math functions
echo "<br><br>";
echo pi()."<br>";
echo min(0,150,30,20,-8,-200)."<br>";
echo max(0,150,30,20,-8,-200)."<br>";
echo abs(-6.7)."<br>";
echo sqrt(64)."<br>";
echo round(0.60)."<br>";
echo round(0.49)."<br>";
echo rand()."<br>";
echo rand(10,100)."<br>";
?>