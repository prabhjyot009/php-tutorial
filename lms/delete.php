//delete table data
<?php
include "database.php";
if(isset($_POST['submit']))
{
    $student_id=$_POST['studentID'];
    $sql="DELETE FROM student WHERE student_id='$student_id'";
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Record deleted successfully')</script>";
        echo "<script>window.open('delete.php','_self')</script>";
    }
    else{
        echo "Error:".$sql."<br>".mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
<html>
    <head>
        <title>Delete Student Details</title>
    </head>
    <body>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                    Student ID
                    <input type="text" name="studentID" placeholder="Enter Student ID" required><br><br>
                    <button type="submit" name="submit">Delete</button>
            </form>
    </body>
</html>
