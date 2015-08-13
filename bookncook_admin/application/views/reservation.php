<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>Cook&Book Admin Panel </title>

        <!-- Bootstrap core CSS -->

        <?php foreach ($css_files as $file): ?>
            <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />

        <?php endforeach; ?>
        <?php foreach ($js_files as $file): ?>

            <script src="<?php echo $file; ?>"></script>
        <?php endforeach; ?>

<!--        <style type='text/css'>
            body
            {
                font-family: Arial;
                font-size: 14px;
            }
            a {
                color: blue;
                text-decoration: none;
                font-size: 14px;
            }
            a:hover
            {
                text-decoration: underline;
            }
        </style>   -->
                <!--<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" type="text/css" media="all">-->

        <!--external css-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/zabuto_calendar.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/gritter/css/jquery.gritter.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lineicons/style.css" type="text/css" media="all">
        <!--<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" type="text/css" media="all">-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/lineicons/style.css" type="text/css" media="all">

        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style-responsive.css" type="text/css" media="all">

        <script src="<?php echo base_url(); ?>assets/js/chart-master/Chart.js"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]-->

        <script src="<?php echo base_url(); ?>assets/js/html5shiv.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/respond.min.js"></script>

        <!--crud-->


    </head>

    <body>

        <section id="container" >
            <!-- **********************************************************************************************************************************************************
            TOP BAR CONTENT & NOTIFICATIONS
            *********************************************************************************************************************************************************** -->
            <!--header start-->
            <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                </div>
                <!--logo start-->
                <a href="admin_panel.html" class="logo"><b>Admin Panel</b></a>


                <div class="top-menu">
                    <ul class="nav pull-right top-menu">
                        <li><a class="logout" href="login.html">Logout</a></li>
                    </ul>
                </div>
            </header>



            <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">

                        <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                        <h5 class="centered">Book & Cook</h5>

                        <li class="mt">
                            <a href="<?php echo base_url(); ?>index.php/Admin_panel_controller/home">
                                <i class="fa fa-dashboard"></i>
                                <span>Admin</span>
                            </a>
                        </li>

                        <!--                        <li class="sub-menu">
                                                    <a   action="<?php echo base_url(); ?>index.php/Admin_panel_controller/Restaurant_admin">
                                                        <i class="fa fa-desktop"></i>
                                                        <span>Restaurant </span>
                                                    </a>
                        
                                                </li>-->

                        <li class="active" class="sub-menu">
                            <a  href="<?php echo base_url(); ?>index.php/Admin_panel_controller/restaurant">
                                <i class="fa fa-desktop"></i>
                                <span>Restaurant </span>
                            </a>

                        </li>

                        <!--                        <li class="sub-menu">
                                                    <a  href="<?php echo base_url(); ?>index.php/Admin_panel_controller/calendar">
                                                        <i class="fa fa-calendar"></i>
                                                        <span>Calendar </span>
                                                    </a>
                        
                                                </li>-->

                        <li class="active" class="sub-menu">
                            <a  href="<?php echo base_url(); ?>index.php/Admin_panel_controller/reservation">
                                <i class="fa fa-desktop"></i>
                                <span>Reservation </span>
                            </a>

                        </li>
                        <li class="active" class="sub-menu">
                            <a  href="<?php echo base_url(); ?>index.php/Admin_panel_controller/user">
                                <i class="fa fa-desktop"></i>
                                <span>Users </span>
                            </a>

                        </li>

                        <li class="sub-menu">
                            <a  href="<?php echo base_url(); ?>index.php/Admin_panel_controller/recipe">
                                <i class="fa fa-desktop"></i>
                                <span>Recipe </span>
                            </a>

                        </li>
                        <li class="sub-menu">
                            <a  href="<?php echo base_url(); ?>index.php/Admin_panel_controller/restaurant_recipe">
                                <i class="fa fa-desktop"></i>
                                <span>Restaurant's Recipe </span>
                            </a>

                        </li>
                        
                        
                        
                        <li class="sub-menu">
                            <a  href="<?php echo base_url(); ?>index.php/Admin_panel_controller/ingredient">
                                <i class="fa fa-desktop"></i>
                                <span>Ingredient </span>
                            </a>

                        </li>
                        <li class="sub-menu">
                            <a  href="<?php echo base_url(); ?>index.php/Admin_panel_controller/order">
                                <i class="fa fa-desktop"></i>
                                <span>Order </span>
                            </a>

                        </li>
                        <li class="sub-menu">
                            <a  href="<?php echo base_url(); ?>index.php/Admin_panel_controller/ingredient_brand">
                                <i class="fa fa-desktop"></i>
                                <span>Ingredient Brand </span>
                            </a>

                        </li>
                        <li class="sub-menu">
                            <a  href="<?php echo base_url(); ?>index.php/Admin_panel_controller/ingredient_catagory">
                                <i class="fa fa-desktop"></i>
                                <span>Ingredient Category </span>
                            </a>

                        </li>
                        <li class="sub-menu">
                            <a  href="<?php echo base_url(); ?>index.php/Admin_panel_controller/order_recipe">
                                <i class="fa fa-desktop"></i>
                                <span>Order Recipe </span>
                            </a>

                        </li>


                    </ul>
                    <!-- sidebar menu end-->
                </div>



            </aside>

        </section>

        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">

                <?php print_r(@$output); ?>



            </section><!-- /MAIN CONTENT -->




        </section>




        <!-- js placed at the end of the document so the pages load faster -->
<!--        <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.sparkline.js"></script>-->


        <!--common script for all pages-->
        <!--<script src="<?php echo base_url(); ?>assets/js/common-scripts.js"></script>-->
        
        <script src="<?php echo base_url(); ?>js/common-scripts.js"></script>

        <script src="<?php echo base_url(); ?>assets/js/gritter/js/jquery.gritter.js"></script>
        <!--<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>-->
        <!--<script src="<?php echo base_url(); ?>assets/js/jquery-1.8.3.min.js"></script>-->
        <!--<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>-->
        <!--<script src="<?php echo base_url(); ?>assets/js/assets/js/jquery.dcjqaccordion.2.7.js"></script>-->
        <!--<script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>-->
        <!--<script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js"></script>-->
        <!--<script src="<?php echo base_url(); ?>assets/js/jquery.sparkline.js"></script>-->
        <script src="<?php echo base_url(); ?>assets/js/gritter-conf.js"></script>

        <!--script for this page-->
        <script src="<?php echo base_url(); ?>assets/js/sparkline-chart.js"></script>
        <!--<script src="<?php echo base_url(); ?>assets/js/zabuto_calendar.js"></script>-->

         <!--js placed at the end of the document so the pages load faster--> 
        <!--<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>-->
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<!--
         BACKSTRETCH
     You can use an image of whatever size. This script will stretch to fit in any screen size.-->
        <script src="<?php echo base_url(); ?>assets/js/jquery.backstretch.min.js"></script>

<!--    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>-->
        <script>
                    $.backstretch("assets/img/login-bg.jpg", {speed: 500});
        </script>





    </body>
</html>
