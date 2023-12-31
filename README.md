# php-tutorial
 PHP (Hypertext Preprocessor) is a versatile and widely used server-side scripting language. 
 
# Comments in PHP:

//Single-line comment
//# single line comment
/*double line comment*/

# php in HTML:

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<body>
    <h1>
        <?php echo "Hello"?>
    </h1>
    <?php echo "sir"?>
</body>
</html>

# Variables and datatypes:

<?php
/*
  > Variable:
  A reusable container that holds the data

  > Data type:
  string, integer, float, boolean
*/

$name="Singh"; //string
$age=30; //integer
$marks=81.23; //float
$isMarried=true; //boolean

echo "My name is: ".$name;
echo "<br>My age is : ".$age;
echo "<br>My marks are : $marks %";
echo "<br>Am I married : {$isMarried}";//no single quotation is allowed.

//to identify the type of variable
echo "<br><br>";
var_dump($name);
echo "<br>";
var_dump($age);
echo "<br>";
var_dump($marks);
echo "<br>";
var_dump($isMarried);
?>

# Rules for naming variables:
i. Variable names should start with a letter or underscore.
ii. Variable names cannot start with a number.
iii. Variable names can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ ).
iv. Variable names are case-sensitive ($age and $AGE are two different variables).


# Operators:

/*
   1. Arithmetic operators
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
   2. Increment/Decrement operators:
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
   3. Operators Precedence
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

# Pre-defined functions:

/*
   //Pre-defined functions:
   1. string functions
   2. number functions
   3. math functions
*/

//String function

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

# Relational operators:


1. Relational Operators
/*
    ==	Equal
    ===	Identical
    !=	Not Equal
    <>	Not Equal
    !==	Not Identical
    >	Greater Than
    <	Less Than
    >=	Greater Than or Equal To
    <=	Less Than or Equal To
*/

$age=20;
if($age>=21 && $age<25){
    echo "You can drink in the US";
}
else if($age>=18){
    echo "You can drink in India";
}
else{
    echo "You can't drink";
}
echo "<br><br>";
$hours=50; //8days*5hours
$rate=10;
$weekpay=0;

if($hours==0){
    $weekpay=0;
}
else if($hours <=40 ){
    $weekpay=$hours*$rate;
}
else{
    $weekpay=(40*$rate)+($hours-40)*($rate*1.5);
}
echo "Your weekly payment is :". $weekpay;

7. Logical operators:

2. Logical Operator
if(condition 1 && condition 2)

//&&=True, if both conditions are true
//||=Trie, if at least one condition is true
//!=True if false,false if true

$temp=30;
$cloudy=true;
if($temp >0 && $temp<30){
    echo "Temp is good";
}
else{
    echo "Temp is not good";
}
echo"<br>";
if($cloudy){
    echo "it is cloudy outside";
}
else
echo "it's sunny"

# Switch case:

$day = "Monday";
switch($day){
    case "Monday":
        echo "Today is Monday";
        break;
    case "Tuesday":
        echo "Today is Tuesday";
        break;
    case "Wednesday":
        echo "Today is Wednesday";
        break;
    case "Thursday":
        echo "Today is Thursday";
        break;
    case "Friday":
        echo "Today is Friday";
        break;
    case "Saturday":
        echo "Today is Saturday";
        break;
    case "Sunday":
        echo "Today is Sunday";
        break;
    default:
        echo "Invalid Day";
}

# for loop:

for($i=0;$i<5;$i++){
    echo "Hello $i <br>";
}
echo "<br>";
echo "<br>";
for($i=10;$i>0;$i--){
    echo "$i <br>";
}
echo "<br>";
echo "<br>";
for($i=1;$i<=10;$i+=2){
    echo "$i <br>";
}
echo "<br>";
echo "<br>";
for($i=2;$i<=20;$i+=2){
    echo $i." <br>";
}

# whlie loop:

$i=1;
while($i<=10){
    echo $i."<br>";
    $i++;
}
echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While loop</title>
</head>
<body>
    <?php
    $i=1;
    while($i<=10){
        ?><!--php is closed because we need to diplay paragraph tag-->
        <p><?php echo $i."<br>" ?><p><!--the value inside p tag is displayed through dynamic php-->
        <?php $i++;
    } ?>
    <br>
</body>
</html>

# Indexed array:

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

# Associative array:

<?php
/*
  associative array - an array with key value pair.
*/ 
$employees =array(
    "singh"=>"Software Engineer",
    "khalid"=>"Web Developer",
    "ayush"=>"Data Scientist"
);
// echo "<pre>";
// print_r($employees);

// $keys=array_keys($employees);
// echo "<pre>";
// print_r($keys);
// exit;

// $values=array_values($employees);
// echo "<pre>";
// print_r($values);
// exit;

// $employees=array_flip($employees);
// $employees=array_reverse($employees);
?> 
<?php
foreach($employees as $key=>$value){
    ?>
    <p><b><?php echo ucwords($key).": "  ?></b><?php echo $value ?></p>
<?php } ?>

# Multidimensional array:

/*
  Multidimensional array - Array inside the array.
*/ 

$students=array(
    array("name"=>"Singh","class"=>"BSc"),
    array("name"=>"Naman","class"=>"BCA")
);
// echo "<pre>";
// print_r($students);

foreach($students as $key => $value){
    // echo "<pre>";
    // print_r($value);
    foreach($value as $k=> $v){
        echo "<b>".ucwords($k)."<b>:". $v."<br>";
    }
}

