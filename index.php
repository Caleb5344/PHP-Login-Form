<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login Form</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div id="form">
        <h1>Login Form</h1>
        <form action="form" method="POST">
            <label>Username:</label>
            <input type="text" id="user" name="user"></br></br>
            <label>Password</label>
            <input type="password" id="pass" name="pass">
            <input type="submit" id="btn" value="login" name="submit"></br></br>
        </form>
    </div>
</body>

</html>