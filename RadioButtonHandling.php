<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Butons</title>
</head>

<body>
    <form action="RadioButtonHandling.php" method="post">
        <label for="">Select any course:</label><br>
        <input type="radio" value="BCA" name="course"> BCA <br>
        <input type="radio" value="MCA" name="course"> MCA <br>
        <input type="radio" value="Btech" name="course"> Btech <br>

        <input type="submit" name="confirm" value="confirm">
    </form>

    <?php
    if (isset($_POST['confirm'])) {
        $course = null;
        //in case of radios
        if (isset($_POST['course'])) {
            $course = $_POST['course'];
        }
        echo $course;
        if ($course=='BCA') {
            echo "You selected: ".$course;
        }
        elseif ($course=='MCA') {
            echo "You selected: ".$course;
        }
        elseif ($course=='Btech') {
            echo "You selected: ".$course;
        }
        else{
            echo "Please select any of the course";
        }

        // switch ($course) {
        //     case ($course=='BCA'):
        //         echo "You selected: " . $course;
        //         break;
        //     case ($course=='MCA'):
        //         echo "You selected: " . $course;
        //         break;
        //     case ($course=='Btech'):
        //         echo "You selected: " . $course;
        //         break;
        //     default:
        //         echo "Please select any of the course";
        // }
    }
    ?>
</body>

</html>