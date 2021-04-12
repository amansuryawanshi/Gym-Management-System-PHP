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
    $page ="calorie";
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
                    <h2 class="section-heading color-dark">What is BMR</h2>
                    <h3 class="section-subheading">Basal metabolic rate (BMR) is often used interchangeably with resting metabolic rate (RMR). While BMR is a minimum number of 
                        calories required for basic functions at rest, RMR — also called resting energy expenditure (REE) — is the number of calories that your body burns while it’s at rest.</h3>
                </div>
                <!-- Column End-->

            </div>
            <!--Row End-->

            <!--Row Start-->
            <div class="row bmi-wrapper">
                <!-- Column Start-->
                <div class="col-sm-6">
                    <div class="bmi-box">
                        <h3 class="color-dark">BMR Calculator Chart</h3>
                        <table class="bmi-calculator-chart-table">
                            <tr>
                                <th>Calories Per Day</th>
                                <th >Activity Factor</th>
                            </tr>
                            <tr>
                                <td>BMR x 1.2</td>
                                <td >Sedentary</td>
                            </tr>
                            <tr>
                                <td>BMR x 1.375</td>
                                <td >Lightly active</td>
                            </tr>
                            <tr>
                                <td>BMR x 1.55</td>
                                <td >Moderately active</td>
                            </tr>
                            <tr>
                                <td>BMR x 1.7525</td>
                                <td >Very active</td>
                            </tr>
                            <tr>
                                <td>BMR x 1.9</td>
                                <td >Super active</td>
                            </tr>
                        </table>
                        <p><span class="bmi-star">*</span> <span class="color-dark">BMR</span> Metabolic Rate / <span class="color-dark">BMI</span> Body Mass Index</p>
                    </div>
                </div>
                <!-- Column End-->
<?php
$heightErr =$weightErr=$genderErr=$ageErr="";
$height=$weight=$age=$gender="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["gender"])) {
        $genderErr = "gender is required";
      } else {
        $gender = test_input($_POST["gender"]);
      }
      if (empty($_POST["age"])) {
        $ageErr = "Age is required";
      } else {
        $age = test_input($_POST["age"]);
      }
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
                        <h3 class="color-dark">Calculate Your Calories</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dui. Aenean massa.</p>
                        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <div class="row">
                                <div class="col-sm-6">
                            <div class="form-group">
                                        <select name="gender" class="form-control" aria-placeholder="Gender">
                                        <option disabled selected value>Select Gender</option>
                                        <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                        <span class="error"> <?php echo $genderErr;?></span>

                                    </div>
                                    </div>
                                <div class="col-sm-6">
                                    
                                    <div class="form-group">
                                        <input type="number" class="form-control" placeholder="Age / yr" id="age"  name="age" step="1" pattern="\d+" >
                                        <span class="error"> <?php echo $ageErr;?></span>

                                    </div>
                                </div>
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
                                <div class="col-sm-10  " style="margin-top: 10px; ">
                                    
                                <?php 
$gender="";
$mtheight=1;
$weight=1;
$height=1;
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
$age = $_POST['age'];    
$weight = $_POST['weight'];
$height = $_POST['height'];
$gender = $_POST['gender'];
$calories = "0.0215183";
switch ($gender){
    case 'Female':
        $gender= 655.1 + (9.563 * (float)$weight ) + (1.85 * (float)$height) - (4.676 * (float)$age);

        break;
        case 'Male':
            $gender=66.47 + (13.75 * (float)$weight) + (5.003 * (float)$height) - (6.755 * (float)$age);
}
}
?>
                                </div>
                                <div class="col-sm-11 alert alert-primary" style="margin-left:10px;" >
                                 <?php 
                                   
                                     echo "<p>Your estimated daily metabolic rate is $gender </p>";
                                     echo "<p>This means that you need rouhgly $gender calories a day to maintain your current weight.</p>";
                                 ?>
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