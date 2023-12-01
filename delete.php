<?php  
$host = 'localhost:3306';  
$user = 'root';  
$pass = 'geu';  
$dbname = 'myforum';  
  
$conn = mysqli_connect($host, $user, $pass,$dbname);  
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}  
echo 'Connected successfully<br/>';  
  
$id=3;  
$sql = "delete from bca where id=$id";  
if(mysqli_query($conn, $sql)){  
 echo "Record deleted successfully";  
}else{  
echo "Could not delete record: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  
?> 