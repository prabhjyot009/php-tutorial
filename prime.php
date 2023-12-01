<?php
$num=9  ;
$flag=1;
for($i=2;$i<$num/2;$i++){
    if($num%$i==0){
        $flag= 0;
        break;
    }
}
if($flag){
    echo $num."is prime";
}
else{
    echo $num."is not prime";
}
?>