<?php
session_start();
if (!$_SESSION['id']) {
    header("Location: login.php");
    die();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <title>Dunay Gudratli | Admin Panel</title>
</head>
<body>
    <div class="info">
        <img src="../images/pic-9.jpg">
        <input type="file">
        <input type="text">
        <input type="text">
    </div>
</body>
</html>
