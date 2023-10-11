<?php
/*
  ##isset()
  Return TRUE, if a variable is declared and not null

  ##empty()
  Return True, if a variable is not declared, false, null, ""
*/

$name="";
// echo isset($name);
if(isset($name)){
    echo "Name is set";
}
else{
    echo "Name is not set";
}
echo "<br><br>";
$name1="";
$name1=null;

if(empty($name1)){
    echo "Name is empty";
}
else
    echo "Name is not empty";
?>