<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.error{
    color: white;
}
</style>
</head>
<body>
    <?php 
    $page = "contact";
    include "header.php";
    include "breadcrumb.php"
    ?>

    <?php 
    
      ?>
     
    <!-- Map Area Start -->
    <section class="map-area">
    <!--    Map Part Start-->
        <div class="google-map"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=lovely%20professional%20university+(lovely%20professional%20university)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
            <div class="container">
                <div class="contact-part">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="contact-wraper">
                                <div class="contact-heading">
                                    <h2>Do You Have Any Questions?</h2>
                                    <p>Please fill this form for any query. Someone from our team will get back to you as soon as possible. </p>
                                </div>
                                <div class="contact-form-area">
                                    <form method="POST" action="submit_contact.php">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" placeholder="Your Name:" id="name" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" placeholder="Your Email:" id="email" required>
                                                                                 </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group nessage-text">
                                                    <textarea name="message" rows="3" class="form-control" placeholder="Enter Your Message:" id="message" required></textarea>
                                                </div>
                                                <div class="contact-sub-btn">
                                                <input type="submit" class="btn btn-effect section-button text-uppercase">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="address-cover-main">
                                <div class="address-box">
                                    <h6>Address</h6>
                                    <p>Lovely Professional Univercity, 144411, GT Road, Phagwara</p>
                                </div>
                                <div class="address-box">
                                    <h6>Phone</h6>
                                    <p><a href="tel:1242486444">+124 (2486) 444</a></p>
                                    <p><a href="tel:1334444878">+133 (4444) 878</a></p>
                                </div>
                                <div class="address-box">
                                    <h6>Mail</h6>
                                    <p><a href="mailto:mail@example.com">mail@example.com</a></p>
                                </div>
                                <div class="address-box">
                                    <h6>Follow Us</h6>
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- Map Area End -->
<?php include "footer.php" ?>
</body>
</html>