<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>Book&Cook Admin Panel</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
        <link rel="stylesheet" type="text/css" href="js/gritter/css/jquery.gritter.css" />
        <link rel="stylesheet" type="text/css" href="lineicons/style.css">

        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/style-responsive.css" rel="stylesheet">

        <script src="js/chart-master/Chart.js"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
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
                <a href="{{url('admin_panel')}}" class="logo"><b>Admin Panel</b></a>


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

                        <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                        <h5 class="centered">Book & Cook</h5>

                        <li class="mt">
                            <a href="{{url('admin_panel')}}">
                                <i class="fa fa-dashboard"></i>
                                <span>Admin</span>
                            </a>
                        </li>

                        <li class="sub-menu">
                             <a href="{{url('restaurantAdmin')}}">
                                <i class="fa fa-desktop"></i>
                                <span>Restaurant </span>
                            </a>

                        </li>

                        <li class="sub-menu">
                            <a href="{{url('calendar')}}">
                                <i class="fa fa-calendar"></i>
                                <span>calendar </span>
                            </a>

                        </li>

                          <li class="active" class="sub-menu">
                            <a  href="{{url('reservation')}}">
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


            </section><!-- /MAIN CONTENT -->

   <div class="form-group">

                        <div style="display: block;  " class="bootstrap-timepicker">


                                                        </div>
                        <div style="display:block;" class="bootstrap-timepicker">
                            <div style="text-align: center;padding-top: 5px; padding-bottom: 5px;border: 3px solid #888; background: ">Book Slot

                                           <div style="border: 20px solid orange;  border: 3px; border-radius:8px; border-color: black"   class="bootstrap-timepicker">

                                                    <label for="Start time" class="col-sm-3 control-label">Start Time</label>

                                                    <input id="timepicker5" type="text" class="input-small" style="color: black;">
                                                    <i class="icon-time"></i>

                                                    <label for="End time" class=" control-label">End Time</label>
                                                    <input id="timepicker6" type="text" class="input-small" style="color:black; ">


                                           </div>
                            </div>
                        </div></br>
 <div style="text-align: center;padding-top: 5px; padding-bottom: 5px;border: 3px solid #888;  background: burlywood">
                        <table  class="table">
                        <tr>
                        <th colspan="5"><span style="margin-left: 45%">Reserve Time Slot</span></th>
                        </tr>
                        <a data-toggle="modal" href="reservation#myModal">
                        <div>
                        <tr>
                            <td>Start Time: 5:45 pm</td>
                            <td>End Time: 6:45 pm</td>



                            {{--<span style="margin-left: 5000px">--}}
                            {{--<td ><button type="button" class="btn btn-success">Add</button></td>--}}

                            <td><button type="button" class="btn btn-warning">Edit</button></td>
                            <td><button type="button" class="btn btn-danger">Delete</button></td>

                            <td >

                            <a data-toggle="modal" href="reservation#myModal">Details</a>

                            </td>
                            </tr>
                            </div></a>
<a>
                            <tr>
                            <td>Start Time: 7:45 pm</td>
                            <td>End Time: 9:45 pm</td>

                                                        {{--<span style="margin-left: 5000px">--}}
                            {{--<td ><button type="button" class="btn btn-success">Add</button></td>--}}

                            <td><button type="button" class="btn btn-warning">Edit</button></td>
                            <td><button type="button" class="btn btn-danger">Delete</button></td>
                            <td >

                            <a data-toggle="modal" href="reservation#myModal">Details</a>

                            </td>

                            </tr>
</a>

                            </table>

{{--</br>--}}

                            {{--<label for="Start time" class="col-sm-3 control-label">Start Time: 9:45 pm</label>--}}
                            {{--<label for="End time" class=" control-label">End Time 12:59 am</label>--}}


                        </table>
 </div>
                        <br/>



 <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModal" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Reservation Details</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>****************</p>
		                          <input type="text" name="email" placeholder="Details" autocomplete="off" class="form-control placeholder-no-fix">

		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->

                         <div style="display:block;" class="bootstrap-timepicker">
                            <div style="text-align: center;padding-top: 5px; padding-bottom: 5px;border: 3px solid #888; ">Book Slot

                                           <div style="border: 20px solid orange;  border: 3px; border-radius:8px; border-color: black"   class="bootstrap-timepicker">

                                                    <label for="Start time" class="col-sm-3 control-label">Start Time</label>

                                                    <input id="timepicker5" type="text" class="input-small" style="color: black;">
                                                    <i class="icon-time"></i>

                                                    <label for="End time" class=" control-label">End Time</label>
                                                    <input id="timepicker6" type="text" class="input-small" style="color:black; ">


                                           </div>
                            </div>
                        </div></br>




        </section>




        <!-- js placed at the end of the document so the pages load faster -->
        <script src="js/jquery.js"></script>
        <script src="js/jquery-1.8.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
        <script src="js/jquery.sparkline.js"></script>


        <!--common script for all pages-->
        <script src="js/common-scripts.js"></script>

        <script type="text/javascript" src="js/gritter/js/jquery.gritter.js"></script>
        <script type="text/javascript" src="js/gritter-conf.js"></script>

        <!--script for this page-->
        <script src="js/sparkline-chart.js"></script>
        <script src="js/zabuto_calendar.js"></script>


    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("img/login-bg.jpg", {speed: 500});
    </script>




    </body>
</html>
