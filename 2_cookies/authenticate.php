<?php
    setcookie('username',$_POST['username']);
    $submitted = !empty($_POST)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authenticate</title>
</head>
<body>
    <h2>You are <?php echo $_COOKIE['username']?></h2>
    <p>Form submitted ? <?php echo (int)$submitted;?></p>
    <p>Your login info is</p>
    <ul>
    <li><b>Username </b><?php echo $_POST['username']; ?></li>
    <li><b>Password </b><?php echo $_POST['password']; ?></li>
    </ul>
</body>
</html>