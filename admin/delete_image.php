<?php
session_start();
if (!$_SESSION['id']) {
    header("Location: login.php");
    die();
}

$id = $_GET['id'];

include '../db.php';

$query = "delete from gallery where id = $id";
$con->query($query);

header("Location: index.php");
