<?php session_start();
if(isset($_SESSION['b']))
{
$l=$_SESSION['b'];
    
    include "conect.php";
    $s=mysqli_query($con,"select * from admin where username='$l' ");
    while($r=mysqli_fetch_array($s))
    {

    
    ?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <style type="text/css">
    #k{
        font-size: 20px;
        
            }
    #k:hover{
        color: orange;

    }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Control Panel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/TAPSVI_CLASSES-removebg-preview.png" width="25px" height="25px">

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

    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="#"><img src="assets/img/logo/TAPSVI_CLASSES-removebg-preview.png" alt="" height="105px" width="100px"></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">     
                                                                                                                         
                                            <li class="active"  ><a href="main.php"><span id="k">Home</span> </a></li>
                                            <li class="active"  ><a href="ADD Students.php"><span id="k">ADD Students</span> </a></li>
                                                <li><a href="ADD Photos.php"><span id="k"> ADD Photos</span></a></li>
                                                   
                                                     <li><a href="ADD Notification.php"><span id="k">ADD Notification</span></a></li>
                                              
                                               <li><a href="#"><span id="k">Your Account</a>
                                                    <ul class="submenu">
                                                        <li><div> <span> Username</span>  : <?php echo $r['username']; } ?></div></li>
                                                         <li><div>----------------------</div></li>
                                                        
                                                        <li><a href="logout.php">Log Out</a></li>
                                                    </ul>
                                                </li>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <!-- Button -->
                                              
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div> 
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? slider Area Start-->
                   <section class="slider-area slider-area2">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-11 col-md-12">
                                <div class="hero__caption hero__caption2">
                                    <h1 data-animation="bounceIn" data-delay="0.2s">ADD Photos</h1>
                                    <!-- breadcrumb Start-->
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb" style="background-color: transparent;">
                                            <li class="breadcrumb-item"><a href="main.php">Home</a></li>
                                            <li class="breadcrumb-item"><a href="ADD Photos.php">ADD Photos</a></li> 
                                        </ol>
                                    </nav>
                                    <!-- breadcrumb End -->
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </section><br><br><br><br><br><br>
        <form method="post" enctype="multipart/form-data">
       <div align="center"> <input type="file" name="p"  placeholder="choos Photo" align="center"> <br><br>
        <button name="s" class="btn btn-info add-new" ><font color='blue'  />Send</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       <button class="btn btn-info add-new"><a href="view_photo.php">View photos</a></button></div>

</form>
</main>
<?php
if(isset($_POST['s']))
{
    $photo= "photos/".$_FILES['p']['name'];
    move_uploaded_file($_FILES['p']['tmp_name'],$photo);
    include "conect.php";
    mysqli_query($con,"insert into photos(url) values('$photo')");
    echo "<script>alert('Photo Send')</script>";
}
?><br><br><br>









        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

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

        <?php
}
else
{
	header("location:index.php");
}
?>