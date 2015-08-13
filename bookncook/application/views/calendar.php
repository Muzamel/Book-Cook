<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>DASHGUM - Bootstrap Admin Template</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" type="text/css" media="all">
        
        <!--external css-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/fullcalendar/bootstrap-fullcalendar.css" type="text/css" media="all">

        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" media="all">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style-responsive.css" type="text/css" media="all">

        
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

            <!-- **********************************************************************************************************************************************************
            MAIN SIDEBAR MENU
            *********************************************************************************************************************************************************** -->
            <!--sidebar start-->
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

                        <li class="sub-menu">
                            <a   action="<?php echo base_url(); ?>index.php/Admin_panel_controller/Restaurant_admin">
                                <i class="fa fa-desktop"></i>
                                <span>Restaurant </span>
                            </a>

                        </li>

                        <li class="sub-menu">
                            <a  href="<?php echo base_url(); ?>index.php/Admin_panel_controller/calendar">
                                <i class="fa fa-calendar"></i>
                                <span>calendar </span>
                            </a>

                        </li>

                        <li class="sub-menu">
                            <a  href="<?php echo base_url(); ?>index.php/Admin_panel_controller/reservation">
                                <i class="fa fa-calendar"></i>
                                <span>reservation </span>
                            </a>

                        </li>

                    </ul>



                    <!-- sidebar menu end-->
                </div>



            </aside>

            <!--sidebar end-->

            <!-- **********************************************************************************************************************************************************
            MAIN CONTENT
            *********************************************************************************************************************************************************** -->
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    <h3><i class="fa fa-angle-right"></i> Calendar</h3>
                    <!-- page start-->
                    <div class="row mt">

                        <aside class="col-lg-9 mt">
                            <section class="panel">
                                <div class="panel-body">
                                    <div id="calendar" class="has-toolbar"></div>
                                </div>
                            </section>
                        </aside>
                    </div>
                    <!-- page end-->
                </section><! --/wrapper -->
            </section><!-- /MAIN CONTENT -->

            <!--main content end-->
            <!--footer start-->
            <footer class="site-footer">
                <div class="text-center">
                    Book and Cook 2015
                    <a href="calendar.html#" class="go-top">
                        <i class="fa fa-angle-up"></i>
                    </a>
                </div>
            </footer>
            <!--footer end-->
        </section>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
        <script src="assets/js/fullcalendar/fullcalendar.min.js"></script>    
        <script src="assets/js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


        <!--common script for all pages-->
        <script src="assets/js/common-scripts.js"></script>

        <!--script for this page-->
        <script src="assets/js/calendar-conf-events.js"></script>    

        <script>
            //custom select box

            $(function () {
                $("select.styled").customSelect();
            });

        </script>

    </body>
</html>
