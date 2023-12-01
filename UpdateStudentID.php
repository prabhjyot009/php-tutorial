<?php
// Function to update student contact number by ID
function updateContactNumber($idToUpdate, $newContactNumber, $filename = 'students.txt') {
    // Read existing data from the file
    $lines = file($filename);

    // Iterate through each line
    foreach ($lines as &$line) {
        // Split the line into parts using commas as the delimiter
        $parts = explode(',', $line);

        // Check if the ID matches the ID to update
        if ($parts[0] == $idToUpdate) {
            // Update the contact number
            $parts[2] = trim($newContactNumber); // Trim to remove any leading/trailing whitespaces

            // Join the parts back into a line
            $line = implode(',', $parts);
        }
    }

    // Write the updated data back to the file
    file_put_contents($filename, implode('', $lines));

    echo "Contact number updated successfully.";
}

// Example usage
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Assuming you have a form with fields: update_id and new_contact_number
    $updateId = $_POST['update_id'];
    $newContactNumber = $_POST['new_contact_number'];

    // Update contact number for the student with ID 1001
    updateContactNumber(1001, $newContactNumber);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student Contact Number</title>
</head>
<body>
    <h2>Update Student Contact Number</h2>
    
    <!-- Assuming you have a form with POST method -->
    <form method="post" action="">
        <label for="update_id">Student ID to Update:</label>
        <input type="text" name="update_id" required><br>
        
        <label for="new_contact_number">New Contact Number:</label>
        <input type="text" name="new_contact_number" required><br>
        
        <button type="submit">Update Contact Number</button>
    </form>
</body>
</html>
