<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $no=$_POST['no'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    include "conect.php";
    if($password==$cpassword)
    {
        $s=mysqli_query($con,"select * from student where no='$no'");
        if($r=mysqli_fetch_array($s))
        {
            $s=mysqli_query($con,"select * from login where no='$no'");
            if($r=mysqli_fetch_array($s))
            {
                echo "<script>alert('Your Account Allready Created Please Login**')</script>";
            }
             else
             {
    
            $t=mysqli_query($con,"insert into login (name,no,password) values('$name','$no','$password')");
            echo "<script>alert('Your Account Has Been Created Successfully Please Login!!!')</script>";
            

            header("location:login.php");
            
            }
        }
        else
        {
    
           
            echo "<script>alert('Sorry Only Join Tapasvi-Classes Students!!!')</script>";


        }
    }
    else
    {
       ?>
       <script type="text/javascript">
           document.getElementById('h').innerHTML="<font color='red'>***Both Password Are Not Match</font>";
       </script>
       <?php
    }

}
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Register</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/TAPSVI_CLASSES-removebg-preview.png">

	<!-- CSS here -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- ? Preloader Start -->
     <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/TAPSVI_CLASSES-removebg-preview.png" alt="" height="60px" width="500px">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->


<!-- Register -->

<main class="login-body" data-vide-bg="assets/img/login-bg.mp4">
    <!-- Login Admin -->
    <form class="form-default" method="POST">
        
        <div class="login-form">
            <!-- logo-login -->
            <div class="logo-login">
                <a href="index.php"><img src="assets/img/logo/Untitled design.jpg" alt="" height="60px" width="100px"></a>
            </div>
            <h2>Registration Here</h2>

            <div class="form-input">
                <label for="name">Full name</label>
                <input  type="text" name="name" placeholder="Entre Name (As Enterd In Admission Form) " required="">
            </div>
            <div class="form-input">
                <label for="name">Mobail NO</label>
                <input type="" name="no"   pattern="[0-9]{10}" placeholder="Enter No (As Enterd In Admission Form)" required="" > 
            </div>

            <div class="form-input">
                <label for="name">Password</label>
                <input type="password" name="password" placeholder="Password" required="">
            </div>
            <div class="form-input">
                <label for="name">Confirm Password</label>
                <input type="password" name="cpassword" placeholder="Confirm Password" required="">
            </div>
            <span id="b"></span>
            <div class="form-input pt-30">
                <input type="submit" name="submit" value="Join">
            </div>
            <!-- Forget Password -->
            <a href="login.php" class="registration">login</a>
              <a href="index.php" class="registration">Home</a>
        </div>
    </form>
    <!-- /end login form -->
</main>


    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Video bg -->
    <script src="./assets/js/jquery.vide.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <!-- Progress -->
    <script src="./assets/js/jquery.barfiller.js"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    
    </body>
</html>
