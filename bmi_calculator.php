<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    .error{
        color: red;
        margin-left: 5px;
    }
    </style>
</head>
<body>
    <?php
    session_start();
    $page ="bmi";
    include "header.php";
    include "breadcrumb.php";
    
    ?>
     <!-- Calculate BMI Area Start -->
     <section class="calculate-bmi-area">
        <div class="container">
            <!--Row Start-->
            <div class="row">

                <!-- Column Start-->
                <div class="col-sm-12">
                    <h2 class="section-heading color-dark">What is BMI</h2>
                    <h3 class="section-subheading">Body mass index is a value derived from the mass and height of a person. The BMI is defined as the body mass divided by the
                        square of the body height, and is universally expressed in units of kg/m², resulting from mass in kilograms and height in metres</h3>
                </div>
                <!-- Column End-->

            </div>
            <!--Row End-->

            <!--Row Start-->
            <div class="row bmi-wrapper">
                <!-- Column Start-->
                <div class="col-sm-6">
                    <div class="bmi-box">
                        <h3 class="color-dark">BMI Calculator Chart</h3>
                        <table class="bmi-calculator-chart-table">
                            <tr>
                                <th>BMI</th>
                                <th >Weight Status</th>
                            </tr>
                            <tr>
                                <td>Below 18.5</td>
                                <td style="color: red;">Underweight</td>
                            </tr>
                            <tr>
                                <td>18.5 to 24.9</td>
                                <td style="color: green;">Healthy</td>
                            </tr>
                            <tr>
                                <td>25 to 29.9</td>
                                <td style="color: orange;">Overweight</td>
                            </tr>
                            <tr>
                                <td>30 and Above</td>
                                <td style="color: red;">Obese</td>
                            </tr>
                        </table>
                        <p><span class="bmi-star">*</span> <span class="color-dark">BMR</span> Metabolic Rate / <span class="color-dark">BMI</span> Body Mass Index</p>
                    </div>
                </div>
                <!-- Column End-->
<?php
$heightErr =$weightErr="";
$height=$weight="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["height"])) {
    $heightErr = "Height is required";
  } else {
    $height = test_input($_POST["height"]);
  } 
  if (empty($_POST["weight"])) {
    $weightErr = "Weight is required";
  } else {
    $weight = test_input($_POST["weight"]);
  } 
  
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>
                <!-- Column Start-->
                <div class="col-sm-6">
                    <div class="bmi-box">
                        <h3 class="color-dark">Calculate Your BMI</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dui. Aenean massa.</p>
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Height / cm" id="height"  name="height" step="1" pattern="\d+" >
                                        <span class="error"> <?php echo $heightErr;?></span>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Weight / kg" id="user-weight" name="weight" step="1" pattern="\d+" >
                                        <span class="error"> <?php echo $weightErr;?></span>

                                    </div>
                                </div>
                               
                               
                                <div class="col-sm-12">
                                    
                                    <div class="contact-sub-btn">
                                        <input type="submit" name="submit" value="Calculate" class="section-button btn btn-effect text-uppercase font-14 para-color">
                                    <br>
                                    </div>
                                </div>
                                <div class="col-sm-10  " style="margin-top: 10px;">
                                    
                                <?php 
$bmi=$output="";
$mtheight=1;
$weight=1;
$height=1;
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
$weight = $_POST['weight'];
$height = $_POST['height'];
$mtheight = (int)$height/100;
if($mtheight){

function bmi($weight,$mtheight) {
$bmi = (int)$weight/($mtheight * $mtheight);
return $bmi;
} 

$bmi = bmi($weight,$mtheight);
if ($bmi <= 18.5) {
$output = "Under Weight";
} else if ($bmi > 18.5 AND $bmi<=24.9 ) {
$output = "Normal Weight";
} else if ($bmi > 24.9 AND $bmi<=29.9) {
$output = "Over Weight";
} else if ($bmi > 30) {
$output = "OBESE";
}
}
}
?>
                                </div>
                                <div class="col-sm-11 alert  <?php
                                if ($bmi <= 18.5) {
                                    echo  "alert-danger";
                                    } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
                                    echo "alert-success";
                                    } else if ($bmi > 24.9 AND $bmi<=29.9) {
                                    echo "alert-warning";
                                    } else if ($bmi > 30) {
                                    echo "alert-danger";
                                    }
                                
                                ?>">
<?php 
                                if($height >0 && $weight >0) {

echo "Your BMI value is " . $bmi . " and you are : "; 
echo "$output"; }?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Column End-->
            </div>
            <!--Row End-->
        </div>
    </section>
    <!-- Calculate BMI Area End -->
    <?php include "footer.php"  ?>
</body>
</html>