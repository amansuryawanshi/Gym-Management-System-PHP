<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php 
    $page="gallery";
    include "header.php" ;
    include "breadcrumb.php";
    ?>
    <section class="our-gallery-area">
        <div class="container">

            <!--Our Gallery Button Start-->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="gallery-filter-btn btn-group-toggle justify-content-center d-flex" data-toggle="buttons">
                        <label class="btn btn-sm position-relative active wow fadeIn" data-wow-duration="0.5s" data-wow-delay=".25s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.25s; animation-name: fadeIn;">
                            <input type="radio" name="shuffle-filter" value="all" checked="checked">All
                        </label>
                        <label class="btn btn-sm position-relative wow fadeIn" data-wow-duration="0.5s" data-wow-delay=".25s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.25s; animation-name: fadeIn;">
                            <input type="radio" name="shuffle-filter" value="fitness">Fitness
                        </label>
                        <label class="btn btn-sm position-relative wow fadeIn" data-wow-duration="0.5s" data-wow-delay=".25s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.25s; animation-name: fadeIn;">
                            <input type="radio" name="shuffle-filter" value="strength">Strength Training
                        </label>
                        <label class="btn btn-sm position-relative wow fadeIn" data-wow-duration="0.5s" data-wow-delay=".25s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.25s; animation-name: fadeIn;">
                            <input type="radio" name="shuffle-filter" value="gym">Gym
                        </label>
                        <label class="btn btn-sm position-relative wow fadeIn" data-wow-duration="0.5s" data-wow-delay=".25s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.25s; animation-name: fadeIn;">
                            <input type="radio" name="shuffle-filter" value="running">Running
                        </label>
                        <label class="btn btn-sm position-relative wow fadeIn" data-wow-duration="0.5s" data-wow-delay=".25s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.25s; animation-name: fadeIn;">
                            <input type="radio" name="shuffle-filter" value="weight">Weight Lose
                        </label>
                    </div>
                </div>
            </div>
            <!--Our Gallery Button End-->

            <!--Our Gallery image Start-->
            <div class="row shuffle-wrapper shuffle" style="position: relative; overflow: hidden; height: 1152px; transition: height 250ms cubic-bezier(0.4, 0, 0.2, 1) 0s;">
                <div class="col-lg-4 col-6 mb-30 shuffle-item wow fadeIn shuffle-item--visible" data-groups="[&quot;fitness&quot;,&quot;strength&quot;]" data-wow-duration="0.5s" data-wow-delay=".25s" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity; animation-duration: 0.5s; animation-delay: 0.25s; animation-name: fadeIn;">
                    <div class="position-relative hover-wrapper">
                        <img src="assets/img/gallery-img/1.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
                        <div class="hover-overlay">
                            <div class="hover-content">
                                <a class="btn btn-sm venobox vbox-item" data-gall="myGallery" href="assets/img/gallery-img/1.jpg">
                                    <i class="flaticon-add"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 mb-30 shuffle-item wow fadeIn shuffle-item--visible" data-groups="[&quot;gym&quot;]" data-wow-duration="0.5s" data-wow-delay=".25s" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(380px, 0px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity; animation-duration: 0.5s; animation-delay: 0.25s; animation-name: fadeIn;">
                    <div class="position-relative hover-wrapper">
                        <img src="assets/img/gallery-img/2.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
                        <div class="hover-overlay">
                            <div class="hover-content">
                                <a class="btn btn-sm venobox vbox-item" data-gall="myGallery" href="assets/img/gallery-img/2.jpg">
                                    <i class="flaticon-add"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 mb-30 shuffle-item wow fadeIn shuffle-item--visible" data-groups="[&quot;running&quot;]" data-wow-duration="0.5s" data-wow-delay=".25s" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(760px, 0px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity; animation-duration: 0.5s; animation-delay: 0.25s; animation-name: fadeIn;">
                    <div class="position-relative hover-wrapper">
                        <img src="assets/img/gallery-img/3.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
                        <div class="hover-overlay">
                            <div class="hover-content">
                                <a class="btn btn-sm venobox vbox-item" data-gall="myGallery" href="assets/img/gallery-img/3.jpg">
                                    <i class="flaticon-add"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 mb-30 shuffle-item wow fadeIn shuffle-item--visible" data-groups="[&quot;weight&quot;,&quot;gym&quot;]" data-wow-duration="0.5s" data-wow-delay=".25s" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(0px, 288px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity; animation-duration: 0.5s; animation-delay: 0.25s; animation-name: fadeIn;">
                    <div class="position-relative hover-wrapper">
                        <img src="assets/img/gallery-img/4.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
                        <div class="hover-overlay">
                            <div class="hover-content">
                                <a class="btn btn-sm venobox vbox-item" data-gall="myGallery" href="assets/img/gallery-img/4.jpg">
                                    <i class="flaticon-add"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 mb-30 shuffle-item wow fadeIn shuffle-item--visible" data-groups="[&quot;fitness&quot;]" data-wow-duration="0.5s" data-wow-delay=".25s" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(760px, 288px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity; animation-duration: 0.5s; animation-delay: 0.25s; animation-name: fadeIn;">
                    <div class="position-relative hover-wrapper">
                        <img src="assets/img/gallery-img/5.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
                        <div class="hover-overlay">
                            <div class="hover-content">
                                <a class="btn btn-sm venobox vbox-item" data-gall="myGallery" href="assets/img/gallery-img/5.jpg">
                                    <i class="flaticon-add"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 mb-30 shuffle-item wow fadeIn shuffle-item--visible" data-groups="[&quot;strength&quot;]" data-wow-duration="0.5s" data-wow-delay=".25s" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(380px, 571px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity; animation-duration: 0.5s; animation-delay: 0.25s; animation-name: fadeIn;">
                    <div class="position-relative hover-wrapper">
                        <img src="assets/img/gallery-img/7.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
                        <div class="hover-overlay">
                            <div class="hover-content">
                                <a class="btn btn-sm venobox vbox-item" data-gall="myGallery" href="assets/img/gallery-img/7.jpg">
                                    <i class="flaticon-add"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 mb-30 shuffle-item wow fadeIn shuffle-item--visible" data-groups="[&quot;gym&quot;,&quot;fitness&quot;,&quot;running&quot;]" data-wow-duration="0.5s" data-wow-delay=".25s" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(0px, 576px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity; animation-duration: 0.5s; animation-delay: 0.25s; animation-name: fadeIn;">
                    <div class="position-relative hover-wrapper">
                        <img src="assets/img/gallery-img/8.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
                        <div class="hover-overlay">
                            <div class="hover-content">
                                <a class="btn btn-sm venobox vbox-item" data-gall="myGallery" href="assets/img/gallery-img/8.jpg">
                                    <i class="flaticon-add"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 mb-30 shuffle-item wow fadeIn shuffle-item--visible" data-groups="[&quot;strength&quot;]" data-wow-duration="0.5s" data-wow-delay=".25s" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(760px, 576px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity; animation-duration: 0.5s; animation-delay: 0.25s; animation-name: fadeIn;">
                    <div class="position-relative hover-wrapper">
                        <img src="assets/img/gallery-img/9.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
                        <div class="hover-overlay">
                            <div class="hover-content">
                                <a class="btn btn-sm venobox vbox-item" data-gall="myGallery" href="assets/img/gallery-img/9.jpg">
                                    <i class="flaticon-add"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6 mb-30 shuffle-item wow fadeIn shuffle-item--visible" data-groups="[&quot;gym&quot;,&quot;fitness&quot;,&quot;running&quot;]" data-wow-duration="0.5s" data-wow-delay=".25s" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(0px, 864px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity; animation-duration: 0.5s; animation-delay: 0.25s; animation-name: fadeIn;">
                    <div class="position-relative hover-wrapper">
                        <img src="assets/img/gallery-img/6.jpg" alt="portfolio-image" class="img-fluid w-100 d-block">
                        <div class="hover-overlay">
                            <div class="hover-content">
                                <a class="btn btn-sm venobox vbox-item" data-gall="myGallery" href="assets/img/gallery-img/6.jpg">
                                    <i class="flaticon-add"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Our Gallery image End-->
        </div>
    </section>
    <?php include "footer.php" ?>

</body>
</html>