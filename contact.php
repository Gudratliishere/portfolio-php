<div class="footer-section" id="contact" id="contact">
    <div class="container">
        <div class="contact-header">
            <h3><?=$lang['contact']?></h3>
            <p><?=$lang['contact-text']?></p>
        </div>
        <div class="social-icon">
            <a href="#"><i class="icon1"></i></a>
            <a href="#"><i class="icon2"></i></a>
            <a href="#"><i class="icon3"></i></a>
            <a href="#"><i class="icon4"></i></a>
            <a href="#"><i class="icon5"></i></a>
            <a href="#"><i class="icon6"></i></a>
            <a href="#"><i class="icon7"></i></a>
            <a href="#"><i class="icon8"></i></a>
        </div>
        <div class="contact">
            <form method="post" action="add_message.php">
                <div class="col-md-4 contactgrid">
                    <input type="text" name="name" required class="text" placeholder="<?=$lang['name']?>">
                </div>
                <div class="col-md-4 contactgrid">
                    <input type="text"  name="email" required class="text" placeholder="<?=$lang['email']?>">
                </div>
                <div class="col-md-4 contactgrid">
                    <input type="text" name="phone" required  class="text" placeholder="<?=$lang['phone']?>">
                </div>
                <div class="col-md-8 contactgrid1">
                    <textarea  name="message" required placeholder="<?=$lang['message']?>"></textarea>
                </div>
                <div class="col-md-4 contactgrid2">
                    <input type="submit" value="[<?=$lang['send-message']?>]">
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
        <div class="footer-bottom">

            <p>&copy; <?=date('Y')?> <?=$lang['copyright']?> | <?=$name?> <?=$surname?></p>

        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                /*
                var defaults = {
                      containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear'
                 };
                */

                $().UItoTop({easingType: 'easeOutQuart'});

            });
        </script>
        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    </div>

</div>
</div>