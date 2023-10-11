<?php

$servername="localhost";
$username="root";
$password="";
$dbName="phptutorial";

//connecting MySQL with object oriented approach
/*
//create connection
$conn= new mysqli($servername,$username,$password,$dbName);

//check connection:

if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
echo "Connection successful";

*/

//connecting MySQL with Procedural approach:

$conn = @mysqli_connect(
    $servername,
    $username,
    $password,
    $dbName
);
if($conn){
    echo "Connection Successful";
}
else{
    echo "Connection UnSuccessful error: ".mysqli_connect_error();
}


?>