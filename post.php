<?php
/*
//Post method is used when we need to do secure query in our database

  # $_POST=Data is packaged inside the body of the HTTP request
           More secure
           No data limit
           Can not bookmark
           POST request can be cached
           Better for submitting data in the database
           Better for submitting sure credentials and user login info
*/

// print_r($_POST);

if (isset($_POST['submit'])) {
    // echo $_POST["username"] . "<br>";
    // echo $_POST["password"] . "<br>";
    if(empty($_POST['username'])){
        echo "Username is empty";
    }
    else if(empty($_POST['password'])){
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
    <title>Post Method</title>
</head>

<body>
    <form action="post.php" method="post">
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
    <a href="./post.php">Home</a>
</body>

</html>