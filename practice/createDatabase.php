<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn){
die("Error in connection".mysqli_connect_error());
}
else{
$sql='CREATE Database mydb';
if(mysqli_query( $conn,$sql)){
           echo "Database xyz created";
}
else{
   echo "Error creating table".mysqli_error($conn);
}
}
mysqli_close($conn);
?>