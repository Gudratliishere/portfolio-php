<?php
session_start();
if (!$_SESSION['id']) {
    header("Location: login.php");
    die();
}

$name = $_POST['name'];
$surname = $_POST['surname'];
$image = $_FILES['image']['tmp_name'];
$image_name = $_FILES['image']['name'];

include '../db.php';

$query = "update info set name = '$name', surname = '$surname' ";
if (!empty($image))
{
    copy($image, '../images/'.$image_name);
    $query = $query." , image = '$image_name'";
}

$con->query($query);

header("Location: index.php");