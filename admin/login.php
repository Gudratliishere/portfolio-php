<?php
session_start();
if ($_SESSION['id']) {
    header("Location: index.php");
    die();
}

$code = $_GET['code'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dunay Gudratli | Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="display: flex; justify-content: center; padding-top: 10%; background-color: #1B242F">
<form style="color: white" method="post" action="do_login.php">
    <!-- Email input -->
    <div class="form-outline mb-4" >
        <input type="text" id="form1Example1" class="form-control" name="username" required/>
        <label class="form-label" for="form1Example1">Username</label>
    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
        <input type="password" id="form1Example2" class="form-control" name="password" required/>
        <label class="form-label" for="form1Example2">Password</label>
    </div>

    <label for=""><?php if ($code == 1) echo 'Email or password is wrong!'?></label>

    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
</form>
</body>
</html>