<!DOCTYPE html>
<?php
$lang = !empty($_GET['lang']) ? trim($_GET['lang']) : "en";

if (!empty($_GET['lang']))
    setcookie('lang', $lang, time() + 86400 * 30, "/");
else if (isset($_COOKIE['lang']))
    $lang = $_COOKIE['lang'];

include "lang/$lang.php";
include 'db.php';

$query = 'select * from info';
$result = $con->query($query);
$row = $result->fetch_assoc();
$name = $row['name'];
$surname = $row['surname'];
?>

<html>
<head>
    <title><?=$name?> <?=$surname?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Onepage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="css/index.css">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
</head>
<body>
<div class="header" id="head">
    <div class="lang">
        <a href="?lang=az"><img title="Azərbaycanca" src="images/az.png"></a>
        <a href="?lang=en"><img title="English" src="images/usa.png"></a>
    </div>
    <div class="container">
        <div class="header-top">
            <div class="logo">
                <a href="index.php"><?=$name?><br><?=$surname?></a>
            </div>
            <div class="top-menu">
                <span class="menu"> </span>
                <ul>
                    <nav class="cl-effect-5">
                        <li><a class="active" href="index.php"><span
                                        data-hover="<?= $lang['home'] ?>"><?= $lang['home'] ?></span></a></li>
                        <li><a href="#about" class="scroll"><span
                                        data-hover="<?= $lang['about'] ?>"><?= $lang['about'] ?></span></a></li>
                        <li><a href="#work" class="scroll"><span
                                        data-hover="<?= $lang['work'] ?>"><span><?= $lang['work'] ?></span></a></li>
                        <li><a href="#services" class="scroll"><span
                                        data-hover="<?= $lang['services'] ?>"><?= $lang['services'] ?></span></a></li>
                        <li><a href="#contact" class="scroll"><span
                                        data-hover="<?= $lang['contact'] ?>"><?= $lang['contact'] ?></span></a></li>
                    </nav>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="index-banner">
            <div class="wmuSlider example1">
                <div class="wmuSliderWrapper">
                    <article style="position: absolute; width: 100%; opacity: 0;">
                        <div class="banner-wrap">
                            <div class="banner_center">
                                <h1><?= $lang['first-banner-first'] ?>,</h1>
                                <h2><?= $lang['first-banner-second'] ?> <span><?= $lang['first-banner-third'] ?></span></h2>
                                <h2><?= $lang['first-banner-fourth'] ?></h2>
                            </div>
                        </div>
                    </article>
                    <article style="position: absolute; width: 100%; opacity: 0;">
                        <div class="banner-wrap">
                            <div class="banner_center">
                                <h1><?= $lang['second-banner-first'] ?>,</h1>
                                <h2><?= $lang['second-banner-second'] ?> <span><?= $lang['second-banner-third'] ?></span></h2>
                                <h2><?= $lang['second-banner-fourth'] ?></h2>
                            </div>
                        </div>
                    </article>
                    <article style="position: absolute; width: 100%; opacity: 0;">
                        <div class="banner-wrap">
                            <div class="banner_center">
                                <h1><?= $lang['third-banner-first'] ?>,</h1>
                                <h2><span><?= $lang['third-banner-third'] ?></span> <?= $lang['third-banner-second'] ?></h2>
                                <h2><?= $lang['third-banner-fourth'] ?></h2>
                            </div>
                        </div>
                    </article>
                </div>

            </div>
            <script src="js/jquery.wmuSlider.js"></script>
        </div>
    </div>
</div>
<div class="content">
    <?php
    include "about.php";
    include "work.php";
    include "services.php";
    ?>
</div>
<?php include 'contact.php' ?>
</body>
</html>

<script src="js/index.js"></script>