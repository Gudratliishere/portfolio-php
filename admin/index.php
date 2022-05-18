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
<div class="info">
    <img src="../images/<?= $info['image'] ?>">
    <input type="file">
    <input type="text" value="<?= $info['name'] ?>" placeholder="Name">
    <input type="text" value="<?= $info['surname'] ?>" placeholder="Surname">
</div>
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
                <td class="col-3"><a href="update_skill.php?id=<?= $skill[0] ?>"><img src="images/edit.png" alt=""></a></td>
                <td class="col-3"><a href="delete_skill.php?id=<?= $skill[0] ?>"><img src="images/delete.png" alt=""></a></td>
            </tr>
        <?php } ?>
    </table>
    <a href="update_skill.php" class="add-skill"><img src="images/add.png" alt=""></a>
</div>
</body>
</html>
