<?php

# if conditional statement

## Relational Operators
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
?>