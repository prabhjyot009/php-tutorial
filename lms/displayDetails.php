<?php
include "database.php";
$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "Student Name:" . $row['name'] . "<br>";
        echo "Student ID:" . $row['student_id'] . "<br>";
        echo "Contact Number:" . $row['contact'] . "<br><br>";
    }
} else {
    echo "0 results";
}
mysqli_close($conn);