<?php
/*
  associative array - an array with key value pair.
*/ 

##Associative Array:

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