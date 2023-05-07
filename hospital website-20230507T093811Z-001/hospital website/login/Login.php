<?php
    session_start();
?>
    <!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="Login.css">
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <div class="fadeIn first"></div>
            <form action="login.inc.php" method="post">
                <label for="fname">Email/Username:</label><br>
                <input type="text" id="login" class="fadeIn second" name="uid" placeholder="Enter your Email/Username">
                <label for="fname">Password:</label><br>
                <input type="text" id="password" class="fadeIn third" name="pwd" placeholder="Enter your Password">
                <button type="submit" name="submit">Log In</button>
            </form>
        </div>
    </div>
    <php include_once 'error.php'; ?>
</body>

</html>