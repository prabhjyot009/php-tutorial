<?php
include "database.php";
$sql = "CREATE TABLE Address_info (
student_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
age INT(10) NOT NULL,
gender VARCHAR(30) NOT NULL
)";
if ($conn->query($sql) === TRUE) {
    echo "Table Address_info created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?>  