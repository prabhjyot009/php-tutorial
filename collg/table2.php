<?php
include "database.php";
$sql="CREATE TABLE Address_info (
address_id INT(10) PRIMARY KEY AUTO_INCREMENT,
stu_id INT(10),
mobile INT(10),
email VARCHAR(50)
)";
if ($conn->query($sql)===TRUE){
	echo "Table Address_info created successfully";
} 
else {
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?>