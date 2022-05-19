<?php
session_start();
if (!$_SESSION['id']) {
    header("Location: login.php");
    die();
}

$image = $_FILES['image']['tmp_name'];
$image_name = $_FILES['image']['name'];

include '../db.php';

$query = "insert into gallery (path) values ('$image_name')";
copy($image, '../images/' . $image_name);

$con->query($query);

header("Location: index.php");