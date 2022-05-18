<?php

session_start();
if (!$_SESSION['id']) {
    header("Location: ../");
    die();
}

$id = $_POST['id'];
$name = $_POST['name'];
$level = $_POST['level'];

include '../db.php';

if (!$id)
    $query = "insert into skills (name, percentage) values ('$name', '$level')";
else
    $query = "update skills set name = '$name', percentage = '$level' where id = $id";

$con->query($query);

header("Location: index.php");
