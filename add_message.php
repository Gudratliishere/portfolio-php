<?php

session_start();
if (!$_SESSION['id']) {
    header("Location: login.php");
    die();
}

include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $con->real_escape_string($_POST['message']);


$query = "insert into messages (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";
$result = $con->query($query);

header("Location: index.php");