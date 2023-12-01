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
  
$id=1;  
$username="ht123";  
$pass="ab123";  
$sql = "update bca set username=\"$username\", password=\"$pass\" where id=$id";  
if(mysqli_query($conn, $sql)){  
 echo "Record updated successfully";  
}else{  
echo "Could not update record: ". mysqli_error($conn);  
}  
  
mysqli_close($conn);  
?> 