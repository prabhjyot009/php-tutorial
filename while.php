<?php
## while loop:

$i=1;
while($i<=10){
    echo $i."<br>";
    $i++;
}
echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While loop</title>
</head>
<body>
    <?php
    $i=1;
    while($i<=10){
        ?><!--php is closed because we need to diplay paragraph tag-->
        <p><?php echo $i."<br>" ?><p><!--the value inside p tag is displayed through dynamic php-->
        <?php $i++;
    } ?>
    <br>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While loop</title>
</head>
<body>
    <?php
    for($i=2;$i<=20;$i+=2){
     ?>   <p><?php echo $i."<br>" ?><p>
   <?php
}
?>
</body>
</html>