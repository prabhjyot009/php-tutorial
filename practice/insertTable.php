<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
die("Error in connection".mysqli_connect_error());
}
$sql='INSERT INTO student VALUES (34,"Sameer" , "Upadhayay" , "Male")';
if(mysqli_query($conn,$sql)){
echo "Inserted successfully";
}
else{
echo "Error".$conn->error();
}
mysqli_close($conn);
?>