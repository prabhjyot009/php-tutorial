<?php
include 'database.php';
$sql = "ALTER TABLE Address_info ADD FOREIGN KEY (stu_id) REFERENCES Person_info(student_id)";
if ($conn->query($sql) === TRUE) {
    echo "Table Address_info altered successfully";
} else {
    echo "Error altering table: " . $conn->error;
}
$conn->close();
?>  