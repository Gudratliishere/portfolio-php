<?php
session_start();
if (!$_SESSION['id']) {
    header("Location: ../");
    die();
}

if (isset($_GET['id'])) {
    include '../db.php';

    $id = $_GET['id'];
    $query = "delete from skills where id = $id";
    $con->query($query);
}

header("Location: index.php");