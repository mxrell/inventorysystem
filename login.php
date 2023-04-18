<?php 

    include('server.php') 

?>

<!DOCTYPE html>
<html>
    <head>
    <title>Login | Inventory Management System</title>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Vrinda Maru Kansal">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Favicone Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/favicon.png">

    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="css/ionicons.css" rel="stylesheet" type="text/css" />
    <link href="css/plugin/sidebar-menu.css" rel="stylesheet" type="text/css" />
    <link href="css/plugin/animate.css" rel="stylesheet" type="text/css" />
    <link href="css/jquery-ui.css" rel="stylesheet" type="text/css" />


 <!-- Preloader -->
    <section id="preloader">
        <div class="loader" id="loader">
            <div class="loader-img"></div>
        </div>
    </section>
    <!-- End Preloader -->

    <!-- Search Overlay Menu -->
    <div class="search-overlay-menu">
        <span class="search-overlay-close"><i class="ion ion-ios-close-empty"></i></span>
        <form role="search" id="searchform" action="/search" method="get">
            <input value="" name="q" type="search" placeholder="Search..." />
            <button type="submit"><i class="ion ion-ios-search"></i></button>
        </form>
    </div>
    <!-- End Search Overlay Menu -->
    <!-- Site Wraper -->
    <div class="wrapper">

        <!-- Header -->
        <header id="header" class="header shadow">
            <div class="header-inner">


                <!-- Logo -->
                <div class="logo">
                    <a href="">
                        <img class="logo-light" src="img/gth-logo-white.png" alt="Global Talent House" />
                        <img class="logo-dark" src="img/gth-logo-black.png" alt="Global Talent House" />
                    </a>
                </div>
                <!-- End Logo -->

                <!-- Rightside Menu (Search icon) -->
                <div class="side-menu-btn">
                    
                </div>
                <!-- End Rightside Menu -->

                <!-- Mobile Navbar Icon -->
                <div class="nav-mobile nav-bar-icon">
                    <span></span>
                </div>
                <!-- End Mobile Navbar Icon -->

                <!-- Navbar Navigation -->
                <div class="nav-menu">
                    <ul class="nav-menu-inner">
                        <li>
                            <a class=""></a>                         
                        </li>
                        
                        
                        <li>
                            <a class="" href=""></a>
                        </li>
                        
                       
                    </ul>
                </div>
                <!-- End Navbar Navigation -->

            </div>
        </header>
        <!-- End Header -->

 

        <!-- CONTENT --------------------------------------------------------------------------------->
        <!-- Intro Section -->
        <section class="inner-intro dark-bg overlay-dark">
            <div class="container">
                <div class="row title">
                    <h2 class="h2">Welcome</h2>
                   
                </div>
            </div>
        </section>
        <!-- End Intro Section -->
        
        <!-- Login Section -->
        <section id="Pricing" class="ptb-60 ptb-sm-30">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="border-box">
                            <h4>            </h4>
                            
                               

<h2>Login</h2>
        <form method="POST" action="login.php" id="login-form">
        <?php include('errors.php'); ?>            
        <input type="text" name="username" id="username" required="_required"placeholder="Username"/>
        <br><input type="password" name="password" id="password" required="_required" placeholder="Password"/>
        <br><input type="checkbox" onclick="myFunction()">show password 
        <script>
            function myFunction()
            {
                var x = document.getElementById("password");
                if (x.type === "password") 
                {
                    x.type = "text";
                } 
                else
                {
                    x.type = "password";
                }
            }
        </script>   
         <br><button name="submit" id="form-submit" type="submit" class="btn btn-md btn-black">login</button>     
               
            </form>              
    </body>
</html>




















                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="border-box">
                            <h4>For Employees</h4>
                            <p>  Please contact the administrator to give you a personal account on this system.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Login Section -->

    




        













 <!-- FOOTER -->
        <footer class="footer pt-60">
            <div class="container">
                <!--Footer Info -->
                <div class="row footer-info mb-30">
                    <div class="col-md-6 col-sm-12 col-xs-12 mb-sm-30 text-sm-left">
                        <p class="mb-xs-0"><b>CONTACT</b></p>
                        <ul class="link-small">
                            <li><a href="mailto:luangcozahravette@gmail.com"><i class="fa fa-envelope-o left"></i>luangcozahravette@gmail.com</a></li>
                            <li><a><i class="fa fa-phone left"></i>+63 (0) 917 905 3670</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 text-right text-sm-left">
                        <ul class="link">
                            <li><a href=""></a></li>
                            <li><a href=""></a></li>
                            <li><a href=""></a></li>
                            <li><a href=""></a></li>
                        </ul>
                        <div class="spacer-30"></div>
                        <ul class="social">
                            <li><a target="_blank" href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://instagram.com/"><i class="fa fa-instagram"></i></a></li>
                            <li><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Footer Info -->
            </div>

            <hr />

            <!-- Copyright Bar -->
            <section class="copyright ptb-15">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 text-left text-sm-left"><b>© 2022 Inventory Management System. All Rights Reserved.</b></div>
                        <div class="col-sm-6 text-right text-sm-left"><a target="_blank" href=""><b></b></a></div>
                    </div>
                </div>
            </section>
            <!-- End Copyright Bar -->

        </footer>
        <!-- END FOOTER -->

        <!-- Scroll Top -->
        <a class="scroll-top">
            <i class="fa fa-angle-double-up"></i>
        </a>
        <!-- End Scroll Top -->

    </div>
    <!-- Site Wraper End -->


    <!-- JS -->

    <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.easing.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.flexslider.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.fitvids.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.viewportchecker.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.stellar.min.js" type="text/javascript"></script>
    <script src="js/plugin/wow.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.colorbox-min.js" type="text/javascript"></script>
    <script src="js/plugin/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/plugin/isotope.pkgd.min.js" type="text/javascript"></script>
    <script src="js/plugin/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="js/plugin/imagesloaded.pkgd.min.js" type="text/javascript"></script>
    <script src="js/plugin/jquery.fs.tipper.min.js" type="text/javascript"></script>
    <script src="js/plugin/mediaelement-and-player.min.js"></script>
    <script src="js/plugin/jquery.validate.min.js" type="text/javascript"></script>
    <script src="js/plugin/sidebar-menu.js" type="text/javascript"></script>
    <script src="js/theme.js" type="text/javascript"></script>
    <script src="js/navigation.js" type="text/javascript"></script>
</body>
</html>
