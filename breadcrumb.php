<!-- Header Start -->
<header class="page-banner-area gallery-page-banner">
      <div class="section-overlay d-flex">
          <div class="container">
              <div class="header-caption text-left">
                  <h1 class="header-caption-heading text-capitalize wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
                      <?php
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
                        ?>
                    </h1>
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
                          <li class="breadcrumb-item text-capitalize"><a href="index.php">Home</a></li>
                          <li class="breadcrumb-item active text-capitalize" aria-current="page">
                              <?php
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
                                ?>
                            </li>
                      </ol>
                  </nav>
              </div>
          </div>
      </div>
    </header>
    <!-- Header End -->