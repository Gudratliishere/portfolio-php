<?php
session_start();
if (!$_SESSION['id']) {
    header("Location: login.php");
    die();
}

include '../db.php';

$query = 'select * from info';
$result = $con->query($query);
$info = $result->fetch_assoc();

$query = 'select * from skills';
$result = $con->query($query);
$skills = array();
while ($row = $result->fetch_assoc()) {
    $skill = array();
    array_push($skill, $row['id'], $row['name'], $row['percentage']);
    array_push($skills, $skill);
}

$query = 'select * from gallery';
$result = $con->query($query);
$images = array();
while ($row = $result->fetch_assoc()) {
    $image = array();
    array_push($image, $row['id'], $row['path']);
    array_push($images, $image);
}

$query = 'select * from messages order by send_date desc';
$result = $con->query($query);
$messages = array();
while ($row = $result->fetch_assoc()) {
    $message = array();
    array_push($message, $row['id'], $row['name'], $row['email'], $row['phone'], $row['message'], $row['send_date']);
    array_push($messages, $message);
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
    <title><?= $info['name'] ?> <?= $info['surname'] ?> | Admin Panel</title>
</head>
<body>
<!--Personal info-->
<form action="do_edit.php" method="post" class="info" enctype="multipart/form-data">
    <div>
        <img src="../images/<?= $info['image'] ?>" id="img">
        <input type="file" name="image" id="image">
    </div>
    <input type="text" value="<?= $info['name'] ?>" placeholder="Name" name="name">
    <input type="text" value="<?= $info['surname'] ?>" placeholder="Surname" name="surname">
    <input type="submit" value="Save">
</form>
<!--Personal info ends-->

<!--Skill info-->
<div class="skills">
    <table style="width:100%">
        <tr>
            <th>Skill name</th>
            <th>Level</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php foreach ($skills as $skill) { ?>
            <tr>
                <td class="col-1"><?= $skill[1] ?></td>
                <td class="col-2"><?= $skill[2] ?></td>
                <td class="col-3"><a href="update_skill.php?id=<?= $skill[0] ?>"><img src="images/edit.png" alt=""></a>
                </td>
                <td class="col-3"><a href="delete_skill.php?id=<?= $skill[0] ?>"><img src="images/delete.png"
                                                                                      alt=""></a></td>
            </tr>
        <?php } ?>
    </table>
    <a href="update_skill.php" class="add-skill"><img src="images/add.png" alt=""></a>
</div>
<!--Skill info ends-->

<!--Gallery-->
<div class="gallery">
    <table style="width: 100%">
        <tr>
            <th>Image</th>
            <th>Delete</th>
        </tr>
        <?php foreach ($images as $image) { ?>
            <tr>
                <td><img src="../images/<?= $image[1] ?>"></td>
                <td><a href="delete_image.php?id=<?= $image[0] ?>"><img src="images/delete.png"
                                                                        alt=""></a></td>
            </tr>
        <?php } ?>
    </table>
    <form action="add_skill.php" method="post" class="add-image" id="gallery-form" enctype="multipart/form-data">
        <img src="images/add.png" id="gallery-img">
        <input type="file" name="image" id="gallery-image">
    </form>
</div>
<!--Gallery ends-->

<!--Messages-->
<div class="messages">
    <table style="width: 100%;">
        <tr>
            <th>Sender name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
            <th>Send date</th>
            <th>Delete</th>
        </tr>
        <?php foreach ($messages as $message) { ?>
            <tr>
                <td class="col-name"><?= $message[1] ?></td>
                <td class="col-email"><?= $message[2] ?></td>
                <td class="col-phone"><?= $message[3] ?></td>
                <td class="col-message"><?= $message[4] ?></td>
                <td class="col-date"><?= $message[5] ?></td>
                <td class="col-delete"><a href="delete_message.php?id=<?= $message[0] ?>"><img src="images/delete.png"
            </tr>
        <?php } ?>
    </table>
</div>
<!--Messages ends-->
</body>
</html>

<script src="js/index.js"></script>