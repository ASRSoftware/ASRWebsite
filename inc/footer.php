<!--Bottom-->
<section id="bottom" class="main">
    <!--Container-->
    <div class="container">

        <!--row-fluids-->
        <div class="row-fluid">

            <div class="span6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.5219219292694!2d73.06457649206541!3d19.04077695018364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c2161cd00e89%3A0x161402ab78479c2b!2sBuilding+Landmark!5e0!3m2!1sen!2sin!4v1415089154119" width="500" height="250" align="centre" frameborder="0" style="border:0"></iframe>
            </div>

            <!--Contact Form-->
             <div class="span3">
                <h4>ADDRESS</h4>
                <ul class="unstyled address">
                    <li>
                        <i class="icon-home"></i><strong>Address:</strong> ASR Softwares Pvt.Ltd.<br>Office No.1204,12th Floor,<br/>The Landmark Building,<br/>Plot No-26/A,Sector-7<br/>Kharghar,Navi Mumabi-410210,<br/>Tal.Panvel Dist.Raigad <br/>
                    </li>
                    <li>
                        <i class="icon-envelope"></i>
                        <strong>Email: </strong> info@asrsoftwares.com 
                    </li>
                    <li>
                        <i class="icon-globe"></i>
                        <strong>Website:</strong> http://www.asrsoftwares.com 
                    </li>
                    <li>
                        <i class="icon-phone"></i>
                        <strong>Mobile:</strong>  + 919323170514 
                    </li>
                </ul>
            </div>
            <!--End Contact Form-->

            <!--Important Links-->
            <div id="tweets" class="span3">
                <h4>OUR COMPANY</h4>
                <div>
                    <ul class="arrow">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about-us.php">About us</a></li>
                        <li><a href="services.php">services</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li><a href="contact-us.php">contact</a></li>     
                    </ul>
                </div>  
            </div>
            <!--Important Links-->
    </div>
    <!--/row-fluid-->
</div>
<!--/container-->
</div>
</section>
<!--/bottom-->
<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                &copy; 2013 <a target="_blank" href="http://www.asrsoftwares.com/" title="ASR Softwares">ASR Softwares Pvt.Ltd.</a>. All Rights Reserved.
            </div>
            <!--/Copyright-->

            <div class="span6">
                <ul class="social pull-right">
                    <li><a href="https://www.facebook.com/pages/ASR-Softwares/1506808756237577"><i class="icon-facebook"></i></a></li>
                    <li><a href="https://twitter.com/asr_softwares?lang=en"><i class="icon-twitter"></i></a></li>
                 <!-- <li><a href="#"><i class="icon-pinterest"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-google-plus"></i></a></li>                       
                    <li><a href="#"><i class="icon-youtube"></i></a></li>
                    <li><a href="#"><i class="icon-tumblr"></i></a></li>                        
                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    <li><a href="#"><i class="icon-rss"></i></a></li>
                    <li><a href="#"><i class="icon-github-alt"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>    -->               
                </ul>
            </div>

            <div class="span1">
                <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
            </div>
            <!--/Goto Top-->
        </div>
    </div>
</footer>
<!--/Footer-->

<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="http://shapebootstrap.net/demo/html/nova/index.html" method="post" id="form-login">
            <input type="text" class="input-small" placeholder="Email">
            <input type="password" class="input-small" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox">Remember me
            </label>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <a href="#">Forgot your password?</a>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->

<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- Required javascript files for Slider -->
<script src="js/jquery.ba-cond.min.js"></script>
<script src="js/jquery.slitslider.js"></script>
<!-- /Required javascript files for Slider -->
<!-- SL Slider -->
<script type="text/javascript"> 
$(function() {
    var Page = (function() {

        var $navArrows = $( '#nav-arrows' ),
        slitslider = $( '#slider' ).slitslider( {
            autoplay : true
        } ),

        init = function() {
            initEvents();
        },
        initEvents = function() {
            $navArrows.children( ':last' ).on( 'click', function() {
                slitslider.next();
                return false;
            });

            $navArrows.children( ':first' ).on( 'click', function() {
                slitslider.previous();
                return false;
            });
        };

        return { init : init };

    })();

    Page.init();
});
</script>
<!-- /SL Slider -->

</body>

<!-- Mirrored from shapebootstrap.net/demo/html/nova/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Nov 2014 17:56:46 GMT -->
</html>
