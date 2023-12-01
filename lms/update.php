<?php
include "database.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $studentToUpdate = 1001;
    $newContactNumber = $_POST['contactNumber'];
    if (empty($newContactNumber)) {
        echo "<script>alert('Contact Number cannot be empty')</script>";
        echo "<script>window.open('update.php','_self')</script>";
    } else {
        $sql = "UPDATE student SET contact='$newContactNumber' WHERE student_id='$studentToUpdate'";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Record updated successfully')</script>";
            echo "<script>window.open('update.php','_self')</script>";
        } else {
            echo "Error:" . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
}
?>
<html>

<head>
    <title>Update Student Details</title>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        Contact Number
        <input type="phone" name="contactNumber" placeholder="Enter Contact Number" required><br><br>
        <button type="submit" name="submit">Update</button>
    </form>
</body>

</html>