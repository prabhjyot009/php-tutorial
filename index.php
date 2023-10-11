<?php
/*
  user defined function
  function - is a block of statements that
  can be used in a program
  1: function call
  2: function defination
*/

//function define:
// function myfun(){
//     echo "Welcome from myFun<br>";
// }

// //function call:
// myfun();

// function sum(){
//     echo 2+5;
// }
// sum();

// $a=5;
// $b=10;
// sum($a,$b);
// function sum($num1,$num2){
//     echo $num1+$num2."<br>";
// }
// $a=10;
// $b=13;
// sum($a,$b);

$a=5;
$b=10;
$total=sum($a,$b);
echo $total."<br>";
function sum($num1,$num2){
    return $num1+$num2."<br>";
}
$a=10;
$b=13;
$total=sum($a,$b);
echo $total."<br>";
?>