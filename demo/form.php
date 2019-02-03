<?php
if(isset($_POST['submit'])) {

    $minimum = 1;
    $maximum = 10;
    $name = array("Mer", "JQ", "YU", "Peter", "Edwin", "Maria");
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (strlen($username) < $minimum) {
        echo "Username has to be longer than one";
    }

    if (strlen($username) > $maximum) {
        echo "Username cannot be longer than ten";
    }

    if (!in_array($username, $name)) {
        echo "Sorry you are not allowed";
    } else {
        echo "Welcome";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="form.php" method="post">
    <input type="text" name="username" placeholder="Enter Username">
    <input type="password" name="password" placeholder="Enter Password"><br>
    <input type="submit" name="submit">
</form>
</body>
</html>