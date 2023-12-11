<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
die("Error in connection".mysqli_connect_error());
}
else{
$sql='CREATE TABLE student(
id INT(10) PRIMARY KEY AUTO_INCREMENT,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
gender VARCHAR(30)
)';
if($conn->query($sql)===TRUE){
echo "Table student created";
}
else{
echo "Error creating table".$conn->error;
}
}
mysqli_close($conn);
?>