<?php
session_start();
if (!$_SESSION['id']) {
    header("Location: ../");
    die();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    include '../db.php';
    $query = "select * from skills where id = $id";
    $result = $con->query($query);
    $row = $result->fetch_assoc();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dunay Gudratli | Edit Skill</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/update_skill.css">
</head>
<body>
<form action="do_skill_edit.php" method="post">
    <input type="hidden" name="id" value="<?= $id ?>">
    <input type="text" name="name" value="<?= $row['name'] ?>">
    <input type="text" name="level" value="<?= $row['percentage'] ?>">
    <input type="submit" value="Save">
</form>
</body>
</html>
