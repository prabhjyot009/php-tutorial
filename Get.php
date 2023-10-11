<?php
/*
  ## $_GET, $_POST
  PHP Special / Super global varaibles used to collect
  data from the html form, when data is sent to a
  file action attribute in the <form> tag.

  <form action="some_file.php" method="post>

    # $_GET= Data is appended to the URL
           Not Secure
           Char limit
           Bookmark is possible with values
           GET request can be cached
           Better for a search pages
*/
// print_r($_GET);
if (isset($_GET['submit'])) {
    // echo $_GET["username"] . "<br>";
    // echo $_GET["password"] . "<br>";
    if(empty($_GET['username'])){
        echo "Username is empty";
    }
    else if(empty($_GET['password'])){
        echo "Password is empty";
    }
    else{
        echo "All good";
    }
    
}
?>
<br>
<br>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="get.php" method="get">
        <div>
            <label for="">Username:</label>
            <input type="text" name="username" placeholder="Enter username">
        </div>
        <br>
        <div>
            <label for="">Password:</label>
            <input type="password" name="password" placeholder="Enter password">
        </div>
        <br>
        <div>
            <button type="submit" name="submit">Log In</button>
        </div>
    </form>
    <br><br>
    <a href="./get.php">Home</a>
</body>

</html>