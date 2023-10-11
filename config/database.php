<?php

$servername="localhost";
$username="root";
$password="";
$dbName="phptutorial";

//Create connection:
$conn = @mysqli_connect(
    $servername,
    $username,
    $password,
    $dbName
);

//Check connection:
if($conn){
    echo "Connection Successful";
}
else{
    echo "Connection UnSuccessful error: ".mysqli_connect_error();
}


?>