<?php 
     session_start(); 
     if (!isset($_SESSION['username']))
     {
     $_SESSION['msg'] = "You must log in first";
          header('location: login.php');
     }
     if (isset($_GET['logout']))
     {
          session_destroy();
          unset($_SESSION['password']);
     header("location: login.php");
     }
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Admin | Inventory Management System</title>

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
                              <a><button type="button" class="btn btn-warning">Admin</button></a>

                        </li>
                        <span class="nav-link"></span>
                                 <li>
                            <a class="" href="newuser.php">Add Account</a>                         
                        </li>
                        <span class="nav-link"></span>
                           <li>
                            <a class="" href="inventoryarchive.php">Archive list</a>
                            
                        </li>
                        <span class="nav-link"></span>
                        
                        
                        <li>
                            <a class=""href="inventoryadmin.php?logout='1' "onclick="return  confirm('Are you sure you want to log out?')">Log Out</a>
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
                    <h2 class="h2">Add item here</h2>
                   
                </div>
            </div>
        </section>
        <!-- End Intro Section -->
        
        
<!-- End Intro Section -->
        
        <!-- Login Section -->
        <section id="Pricing" class="ptb-60 ptb-sm-30">
            <div class="container">
                <div class="row">
                    <div class="col-md-1000">
                        <div class="border-box">
                            <h4>            </h4>



    

</style>
     </head>
     <body>
         
          <div class="dropdown"> 
              
               <div class="dropdown-content">
                   
                   
               </div>
          </div>   
               
               <center><form method="POST" action="addadmin.php">
                    <label>Product Name</label><input type="text" name="product">
                    <label>Size</label><input type="text" name="size">
                    <label>Quantity</label><input type="text" name="stock">
                    <label>Price</label><input type="text" name="price">
                    <input type="submit"class="btn btn-md btn-black" value="add item">            
               </form></center>
          </div>
          <div>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
               <center><br><h2>Products</h2></center>
               <center><table class="table table-secondary table-hover"></center>
                    <thead>
                         <th scope="col">Product ID</th>
                         <th scope="col">Name</th>
                         <th scope="col">Size</th>
                         <th scope="col">Stock</th>
                         <th scope="col">Price</th>
                         <th scope="col">Action</th>
                    </thead>     



                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End fot table Section -->









                    <tr>
                         <tbody>
                              <?php                                    
                                   $conn = mysqli_connect("localhost","root","","inventory_system");
                                   $sort_option = "";
                                   $query = "SELECT * FROM proditems ORDER BY product $sort_option";
                                   $query = "SELECT * FROM proditems ORDER BY productid $sort_option";
                                   if(isset($_GET['sort']))
                                   {
                                        if($_GET['sort'] == "a-z")
                                        {
                                             $sort_option = "ASC";
                                             $query = "SELECT * FROM proditems ORDER BY product $sort_option";
                                        }
                                        else if($_GET['sort'] == "z-a")                                            
                                        {                                                                        
                                             $sort_option = "DESC";
                                             $query = "SELECT * FROM proditems ORDER BY product $sort_option";
                                        }              
                                        else if($_GET['sort'] == "low-high")                                            
                                        {                                                                        
                                             $sort_option = "ASC";
                                             $query = "SELECT * FROM proditems ORDER BY productid $sort_option";
                                        }       
                                        else if($_GET['sort'] == "high-low")                                            
                                        {                                                                        
                                             $sort_option = "DESC";
                                             $query = "SELECT * FROM proditems ORDER BY productid $sort_option";
                                        }                                                         
                                   }   
                                                                    
                                   $query_run = mysqli_query($conn, $query);                                  
                                   if(mysqli_num_rows($query_run) > 0)
                                   {
                                        foreach($query_run as $row)
                                        {                                         
                              ?>                                                 
                                             <tr class="table-light">  
                                                  <th><?php echo $row['productid']; ?></th>                  
                                                  <th><?php echo $row['product']; ?></th>
                                                  <th><?php echo $row['size']; ?></th> 
                                                  <th><?php echo $row['stock']; ?></th>
                                                  <th><?php echo $row['price']; ?></th>
                                                  <th>
                                                       <a href="editadmin.php?id=<?php echo $row['productid']; ?>">Edit</a>
                                                       <a href="deleteadmin.php?id=<?php echo $row['productid']; ?>" 
                                                       onclick="return  confirm('Are you sure you want to delete this item?')">Delete</a>
                                                  </th>  
                                             </tr>                                                  
                                             <?php                                                                                           
                                        }
                                   }                                                                             
                                   else
                                   {
                                             ?>
                                        <tr>
                                             <td colspan="6">No Records Found</td>
                                        </tr>
                                        <?php
                                   }                                                                                                           
                                        ?>    
                                        <?php
                                             $conn = mysqli_connect("localhost","root","","inventory_system");
                                             $sql = "SELECT * FROM proditems";
                                             if ($result=mysqli_query($conn,$sql))
                                             {
                                                  $rowcount=mysqli_num_rows($result);
                                                  echo "<b>Total Products:</b> ";
                                                  echo $rowcount."&nbsp;&nbsp;"; 
                                             }
                                        ?>       
                                        <a><b>Sort </a>
                                        <form action="" method="GET">
                                             <select name="sort">
                                                  <option value="" align="center">-- Select Option --</option>
                                                  <option value="low-high" <?php if(isset($_GET['sort']) && $_GET['sort'] == "low-high") { echo "selected"; } ?> >ID: ascending</option>
                                                  <option value="high-low" <?php if(isset($_GET['sort']) && $_GET['sort'] == "high-low") { echo "selected"; } ?> >ID: descending</option>
                                                  <option value="a-z" <?php if(isset($_GET['sort']) && $_GET['sort'] == "a-z") { echo "selected"; } ?> >Name: a-z</option>
                                                  <option value="z-a" <?php if(isset($_GET['sort']) && $_GET['sort'] == "z-a") { echo "selected"; } ?> >Name: z-a</option>
                                             </select>
                                             <button type="submit"class="btn btn-md btn-black">Filter</button> 
                                             <br></br>                         
                                        </form>                               
                         </tbody>
                    </tr>
               </table>
          </div>
     </body>
</html>


        








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
