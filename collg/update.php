 <?php
 include 'database.php';
 $sql = "ALTER TABLE Person_info MODIFY student_id INT(10)";
 if ($conn->query($sql) === TRUE) {
     echo "Table Person_info altered successfully";
 } else {
     echo "Error altering table: " . $conn->error;
 }
 $conn->close();
 ?>