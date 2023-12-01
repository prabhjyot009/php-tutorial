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
  
$sql = 'SELECT * FROM bca';  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
    echo "EMP ID :{$row['id']}  <br> ".  
         "EMP USERNAME : {$row['username']} <br> ".  
         "EMP PASSWORD : {$row['password']} <br> ".  
         "--------------------------------<br>";  
 } //end of while  
}else{  
echo "0 results";  
}  
mysqli_close($conn);  
?>  