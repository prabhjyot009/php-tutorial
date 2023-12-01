<?php
include "database.php";
if(isset($_POST['submit']))
{
    $name=$_POST['studentName'];
    $student_id=$_POST['studentID'];
    $contact=$_POST['contactNumber'];
    $sql="INSERT INTO student(name,student_id,contact) VALUES('$name','$student_id','$contact')";
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('New record inserted')</script>";
        echo "<script>window.open('saveStudentDetails.php','_self')</script>";
    }
    else{
        echo "Error:".$sql."<br>".mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>