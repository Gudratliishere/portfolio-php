<?php
session_start();
include '../db.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "select id from admin where username = '$username' and password = '$password'";
$result = $con->query($query);
$row = $result->fetch_assoc();

if ($row['id'] > 0) {
    $_SESSION['id'] = $row['id'];
    header("Location: index.php");
} else
    header("Location: login.php?code=1");
