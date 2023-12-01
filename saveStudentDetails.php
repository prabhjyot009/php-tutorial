<?php
// Function to save student information to a text file
function saveStudentInfo($id, $name, $contactNumber, $filename = 'students.txt') {
    // Format the data
    $data = "$id,$name,$contactNumber\n";

    // Open the file in append mode or create it if not exists
    $file = fopen($filename, 'a');

    // Check if the file was opened successfully
    if ($file) {
        // Write the data to the file
        fwrite($file, $data);

        // Close the file
        fclose($file);

        echo "Student information saved successfully.";
    } else {
        echo "Error: Unable to open the file.";
    }
}

// Example usage
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming you have a form with fields: student_id, student_name, contact_number
    $studentId = $_POST['student_id'];
    $studentName = $_POST['student_name'];
    $contactNumber = $_POST['contact_number'];

    // Save student information
    saveStudentInfo($studentId, $studentName, $contactNumber);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
</head>
<body>
    <h2>Student Information Form</h2>
    
    <!-- Assuming you have a form with POST method -->
    <form method="post" action="">
        <label for="student_id">Student ID:</label>
        <input type="text" name="student_id" required><br>
        
        <label for="student_name">Student Name:</label>
        <input type="text" name="student_name" required><br>
        
        <label for="contact_number">Contact Number:</label>
        <input type="text" name="contact_number" required><br>
        
        <button type="submit">Save Information</button>
    </form>
</body>
</html>
