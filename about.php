<?php
include 'db.php';

$query = 'select * from skills';
$result = $con->query($query);
$skills = array();
while ($row = $result->fetch_assoc()) {
    $skill = array();
    array_push($skill, $row['name'], $row['percentage']);
    array_push($skills, $skill);
}

$query = 'select * from info';
$result = $con->query($query);
$row = $result->fetch_assoc();
?>

<div class="about-section" id="about" id="about">
    <div class="container">
        <div class="about-header">
            <h3><?=$lang['about']?></h3>
            <div class="about-imag">
                <img src="images/<?= $row['image'] ?>" alt="" style="width: 200px"/>
            </div>
            <div class="about-text">
                <p><?= $lang['about-text']?></p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="about-sectiongrids">
            <?php foreach ($skills as $skill) { ?>
                <div class="col-md-6 about-leftgrid">
                    <div class="polls">
                        <div class="poll">
                            <div class="poll-desc">
                                <h4><?= $skill[0] ?></h4>
                            </div>
                            <div class="percentage">
                                <p><?= $skill[1] ?>%</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="skills">
                            <div style="width:<?= $skill[1] ?>%"></div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="clearfix"></div>
        </div>
        <div class="arrow1">
            <a href="#work" class="scroll"><img src="images/arrow1.png" alt=""/></a>
        </div>
    </div>
</div>