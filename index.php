<?php
//operators in php:
/*
   ## Airthmatic operators
   + - * / ** %
*/

$a=10;
$b=2;
$c=$a+$b;
$d=$a-$b;
$e=$a*$b;
$f=$a/$b;
$g=$a%$b; 
$h=$a+$b;
$i=$a**$b;
// echo $a . "+" . $b . "=" . $c;
echo "$c<br>";
echo "$d<br>";
echo "$e<br>";
echo "$f<br>";
echo "$g<br>";
echo "$h<br>";
echo "$i<br><br>";

/*
   ##Increment/Decrement operators:
   ++ --
 */
$x=10;
 echo $x."<br>";
 $x++;//post increment
 echo $x."<br><br>";

 $X=10;
 echo $X."<br>";
 $X--;//post decrement
 echo $X."<br><br>";

 $y=10;
 echo $y."<br>";
 ++$y;//pre increment
 echo $y."<br><br>";

 $Y=10;
 echo $Y."<br>";
 --$Y;//pre decrement
 echo $Y."<br><br>";

 $A=10;
 $B=$A++;
 $C=$A;
 echo $A."<br>";
 echo $B."<br>";
 echo $C."<br><br>";

 $D=10;
 $E=++$D;
 $F=$D;
 echo $D."<br>";
 echo $E."<br>";
 echo $F."<br><br>";

 $A=10;
 $B=$A--;
 $C=$A;
 echo $A."<br>";
 echo $B."<br>";
 echo $C."<br><br>";

 $D=10;
 $E=--$D;
 $F=$D;
 echo $D."<br>";
 echo $E."<br>";
 echo $F."<br><br>";

/*
   ##Operators Precedence
   ()
   **
   * / +
   * + -
*/

$total= 4/2*3+(5+10)**2;
// 4/2*3+15**2;
// 4/2*3+225;
// 2*3+225;
// 6+225;
// 231;
echo $total;

?>