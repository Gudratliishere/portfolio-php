<?php
include 'db.php';

$query = 'select * from gallery';
$result = $con->query($query);
$images = array();
while ($row = $result->fetch_assoc())
    array_push($images, $row['path']);
?>

<div class="works-section" id="work" id="work">
    <div class="works-header">
        <h3><?=$lang['work']?></h3>
        <p><?=$lang['work-text']?></p>
    </div>
    <div class="portfolio-section-bottom-row" id="portfolio">
        <div class="container">

            <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#horizontalTab').easyResponsiveTabs({
                        type: 'default', //Types: default, vertical, accordion
                        width: 'auto', //auto or any width like 600px
                        fit: true   // 100% fit in a container
                    });
                });

            </script>
            <link rel="stylesheet" href="css/swipebox.css">
            <script src="js/jquery.swipebox.min.js"></script>
            <script type="text/javascript">
                jQuery(function ($) {
                    $(".swipebox").swipebox();
                });
            </script>
            <!-- Portfolio Ends Here -->
            <div class="sap_tabs">
                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                    <ul class="resp-tabs-list">
                        <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"></li>
                        <div class="clearfix"></div>
                    </ul>
                    <div id="portfoliolist">
                        <div class="resp-tabs-container">
                            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                                <div class="tab_img">
                                    <?php foreach ($images as $image) { ?>
                                        <div class="col-md-3 img-top grid_box">
                                            <a href="images/pic-1.jpg" class="swipebox" title="Image Title">
                                                <img src="images/<?= $image ?>" class="img-responsive" alt="">
                                                <span class="zoom-icon"></span>
                                            </a>
                                        </div>
                                    <?php } ?>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="arrow">
                <a href="#services" class="scroll"><img src="images/arrow.png" alt=""/></a>
            </div>
        </div>
    </div>
</div>