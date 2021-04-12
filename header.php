<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  
     if ($page == "index") {
        echo "Home";
   }
     if ($page == "about") {
        echo "About Us";
   }
   if ($page == "test") {
        echo "Test";
   }
   if ($page == "bmi") {
       echo "BMI Calculator";
  }
   if ($page == "details") {
       echo "Project Details";
  }
  if ($page == "gallery") {
   echo "Gallery";
}
if ($page == "contact") {
echo "Contact";
}
if ($page == "calorie") {
echo "Calorie Calculator";
}
    
    ?></title>
    
    <!--=======================================
      All Css Style link
    ===========================================-->

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- FAVICONS -->
    <link rel="icon" href="assets/img/favicon-16x16.png" type="image/png" sizes="16x16">
    <link rel="shortcut icon" href="assets/img/favicon-16x16.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/img/favicon-16x16.png">

    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="assets/img/apple-icon-72x72.png" sizes="72x72" />
    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="assets/img/apple-icon-114x114.png" sizes="114x114" />
    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="assets/img/apple-icon-144x144.png" sizes="144x144" />
    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="assets/img/favicon-16x16.png" />

</head>
<body>

    <!-- Menu Area Start -->
    <section class="menu-section-area padding-zero">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top d-none d-sm-none d-md-block d-lg-block d-xl-block" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="images/logowhite.png" style="height: 45px; " alt="gym logo"></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item">
                            <a class="nav-link <?php if($page=="index"){echo "active";} ?>" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($page=="about"){echo "active";} ?>" href="about.php">About</a>
                        </li>
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle  <?php if($page == "bmi" OR $page== "calorie"){echo "active";} ?>" data-toggle="dropdown">Calculators<i class="fas fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="bmi_calculator.php">BMI Calculator</a></li>
                                <li><a href="calorie_cal.php">Calorie Calculator</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link <?php if($page=="gallery"){echo "active";} ?>" href="gallery.php">Gallery</a>
                           
                        </li>
                        
                        
                        
                        <li class="nav-item">
                            <a class="nav-link <?php if($page=="contact"){echo "active";} ?>" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($page=="details"){echo "active";} ?>" href="details.php">Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase section-button btn btn-effect" href="login.php">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navigation -->

        <!-- Mobile Menu Start -->
        <nav class="mobile_menu hidden d-none">
            <a href="index.php"><img class="mobile-logo" src="images/logowhite.png"  alt="Gym"></a>
            <ul class="nav navbar-nav navbar-right menu">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="dropdown">
                    <a>Calculators</a>
                    <ul class="sub_menu">
                        <li><a href="bmi_calculator.php">BMI Calculator</a></li>
                        <li><a href="calorie_cal.php">Calorie Calculator</a></li>
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                
                
                
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="details.php">Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link section-button btn btn-effect text-uppercase font-14 para-color" href="pricing-table.html">Become a Member</a>
                </li>
            </ul>
        </nav>
        <!-- Mobile Menu End -->
    </section>
    <!-- Menu Area End -->

</body>
</html>