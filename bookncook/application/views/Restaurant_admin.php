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
        <link rel="stylesheet" href="<?php echo base_url(); ?>/css/bootstrap.css" type="text/css" media="all">

        <!--external css-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/css/font-awesome.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/css/zabuto_calendar.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/js/gritter/css/jquery.gritter.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/lineicons/style.css" type="text/css" media="all">

        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/css/style.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/css/style-responsive.css" type="text/css" media="all">

        <script src="<?php echo base_url(); ?>/js/chart-master/Chart.js"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]-->
        <script src="<?php echo base_url(); ?>js/html5shiv.js"></script>
        <script src="<?php echo base_url(); ?>js/respond.min.js"></script>


        <!--[endif]-->
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
                             <a href="<?php echo base_url();?>index.php/Admin_panel_controller/home">
                                <i class="fa fa-dashboard"></i>
                                <span>Admin</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                            <a   action="<?php echo base_url();?>index.php/Admin_panel_controller/Restaurant_admin">
                                <i class="fa fa-desktop"></i>
                                <span>Restaurant </span>
                            </a>

                        </li>

                        <li class="sub-menu">
                            <a  href="<?php echo base_url();?>index.php/Admin_panel_controller/calendar">
                                <i class="fa fa-calendar"></i>
                                <span>calendar </span>
                            </a>

                        </li>
                        <li class="sub-menu">
                            <a  href="<?php echo base_url();?>index.php/Admin_panel_controller/reservation">
                                <i class="fa fa-calendar"></i>
                                <span>reservation </span>
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
                <div class="row mt">
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <! -- BASIC BUTTONS -->
                        <div class="showback">
                            <h4><i class="fa fa-angle-right"></i> Restaurant  Control</h4>
                            <button type="button" class="btn btn-success">Restaurant Management</button>
                            <button type="button" class="btn btn-info">Check</button>
                            <button type="button" class="btn btn-danger">Availability</button>
                            <button type="button" class="btn btn-primary">Booking</button>




                        </div><!-- /showback -->
                    </div><!-- /showback -->


            </section><!-- /MAIN CONTENT -->


        </section>




        <!-- js placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url(); ?>/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>/js/jquery-1.8.3.min.js"></script>
        <script src="<?php echo base_url(); ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="<?php echo base_url(); ?>/js/jquery.scrollTo.min.js"></script>
        <script src="<?php echo base_url(); ?>/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url(); ?>/js/jquery.sparkline.js"></script>


        <!--common script for all pages-->
        <script src="<?php echo base_url(); ?>/js/common-scripts.js"></script>
        <script src="<?php echo base_url(); ?>/js/gritter/js/jquery.gritter.js"></script>
        <script src="<?php echo base_url(); ?>/js/gritter-conf.js"></script>

        <!--script for this page-->
        <script src="<?php echo base_url(); ?>/js/sparkline-chart.js"></script>
        <script src="<?php echo base_url(); ?>/js/zabuto_calendar.js"></script>


    </body>
</html>
