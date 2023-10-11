<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkboxes</title>
</head>

<body>
    <form action="checkboxesinPHP.php" method="post">
        <label for="">Your favourite food: </label><br>
        <input type="checkbox" value="Fast Food" name="food[]"> Fast Food <br>
        <input type="checkbox" value="Sweets" name="food[]"> Sweets <br>
        <input type="checkbox" value="Namkeen" name="food[]"> Namkeen <br>
        <input type="checkbox" value="Street Food" name="food[]"> Steet Food <br>

        <input type="submit" name="confirm" value="confirm">
    </form>

    <?php
    if(isset($_POST['confirm'])){
        $foods=$_POST['food'];
        echo $foods[2]. "<br>";
        foreach($foods as $food){
            echo "You have selected".$food."<br>";
        }
        // echo "<pre>";
        // print_r($_POST);
        // exit;
        //undefined error handle:
    }
    ?>
</body>

</html>