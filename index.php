<?php
/*
  ## Variable:
  A resuable container that holds the data

  ## Data type:
  string, integer, float, boolean
*/

$name="Singh"; //string
$age=30; //integer
$marks=81.23; //float
$isMarried=true; //boolean

echo "My name is : ".$name;
echo "<br>My age is : ".$age;
echo "<br>My marks are : $marks %";
echo "<br>Am I married : {$isMarried}";//no single quotation is allowed.

//to identify type of variable
echo "<br><br>";
var_dump($name);
echo "<br>";
var_dump($age);
echo "<br>";
var_dump($marks);
echo "<br>";
var_dump($isMarried);
?>