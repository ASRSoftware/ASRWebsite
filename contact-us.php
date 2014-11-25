<?php include 'inc/header.php' ?>
<div class="pagename contact-us.php">
</div>

    <!-- /header -->
	 <section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>contact us</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                        <li class="active">contact-us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="no-margin">
      <div align = "center"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.5219219292694!2d73.06457649206541!3d19.04077695018364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c2161cd00e89%3A0x161402ab78479c2b!2sBuilding+Landmark!5e0!3m2!1sen!2sin!4v1415089154119" width="1000" height="500" align="centre" frameborder="0" style="border:0"></iframe>
    </div>
	</section>

    <section id="contact-page" class="container">
        <div class="row-fluid">

            <div class="span8 offset1">
                <h4>Contact Form</h4>
                <div class="status alert alert-success" style="display: none"></div>

                <form id="contactForm" name="" method="POST" action="sendMail.php">
                  <div class="row-fluid">
                    <div class="span5">
                        <label>First Name</label>
                        <input type="text" class="input-block-level"  placeholder="Your First Name" name="firstname">
                        <label>Last Name</label>
                        <input type="text" class="input-block-level"  placeholder="Your Last Name" name="lastname">
                        <label>Email Address</label>
                        <input type="text" class="input-block-level"  placeholder="Your email address" name="email">
                    </div>
                    <div class="span7">
                        <label>Message</label>
                        <textarea name="message" id="message"  class="input-block-level" rows="8"></textarea>
                    </div>

                </div>
                <input type="submit" value="send message" class="btn btn-primary btn-large pull-right">
                <!-- <button type="submit" class="btn btn-primary btn-large pull-right">Send Message</button> -->
                <p> </p>

                </form>
            </div>

        <div class="span3">
            <h4>Our Address</h4>
            
            <p>
                <i class="icon-map-marker pull-left"></i> ASR Softwares Pvt.Ltd.<br/>
                                       Office No.1204,12th Floor,<br/>
                                       The Landmark Building,<br/>
                                       Plot No-26/A,Sector-7<br/>
                                       Kharghar,Navi Mumbai-410210,<br/>
                                       Tal.Panvel Dist.Raigad <br>
                
            </p>
            <p>
                <i class="icon-envelope"></i> &nbsp; info@asrsoftwares.com
            </p>
            <p>
                <i class="icon-phone"></i> &nbsp;+91 2220870567 / +91 9323170514
            </p>
            <p>
                <i class="icon-globe"></i> &nbsp;http://www.asrsoftwares.com 
            </p>
        </div>

    </div>

</section>


<?php include 'inc/footer.php' ?>