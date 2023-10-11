<?php
## Logical Operator 
## if(condition 1 && condition 2)

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
?>