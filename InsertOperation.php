<?php
/*
  ## Insert Operation
*/

include("config/database.php");
//or
// require("config/database.php");

//insert query
// $date=date("Y-m-d H:i:s");
// $sql="insert into users (username, password, created_at) 
//       values('Singh','Pass123','$date')";

// $result=$conn->query($sql);
// if($result == true){
//   echo "New Record created";
// }
// else{
//   echo "No Record created, error:", $conn->error;
// }

//select query:
// $sql="select id, username, created_at from users where id =1";
// $result=$conn->query($sql);
// // echo "<pre>";
// // print_r($result);
// if($result->num_rows>0){
//   while($row= $result->fetch_assoc()){
//     echo "<pre>";
//     print_r($row); 
//   }
// }
#update query:
// $sql="update users set username='Singh' where id =4";
// $res=$conn->query($sql);
// if($res){
//   echo "updated successfully";
// }
// else{
//   echo "Not update";
// }
#Delete Query:
$sql="delete from users where id =2";
$res=$conn->query($sql);
if($res){
  echo "deleted successfully";
}
else{
  echo "Not deleted";
}
?>