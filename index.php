<?php
/*
  Multidimensional array - Array inside array.
*/ 

##Multidimensional Array:
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
?>