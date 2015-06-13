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
        <link type="text/css"href="css/bootstrap.css" rel="stylesheet">
        <link type="text/css"href="css/style_1.css" rel="stylesheet">
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
                {{--<a href="admin_panel.html" class="logo">--}}
                <a href="{{url('admin_panel')}}" class="logo"><b>Admin Panel</b></a>


                <div class="top-menu">
                    <ul class="nav pull-right top-menu">
                        <li><a class="login" href="{{url('sign_in')}}">Login</a></li>
                    </ul>
                </div>
                </header>
            </section>



            <aside>
                <div id="sidebar"  class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">

                        <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                        <h5 class="centered">Book & Cook</h5>

                        <li class="mt">

                            {{--<a class="active" href="admin_panel.html">--}}
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
                            {{--<a  href="calendar.html">--}}
                                <i class="fa fa-calendar"></i>
                                <span>calendar </span>
                            </a>

                        </li>
                        <li class="sub-menu">
                            <a  href="{{url('reservation')}}">
                                <i class="fa fa-calendar"></i>
                                <span>reservation </span>
                            </a>

                        </li>

                    </ul>
                    <!-- sidebar menu end-->
                </div>



            </aside>



        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <div class="row mt">
                    <div class="col-lg-8 col-md-6 col-sm-12">

                        <div class="showback">
                            <h4><i class="fa fa-angle-right"></i> Admin Control</h4>
                            <button type="button" class="btn btn-success" id="myname">Add Restaurant</button>
                            {{--<button type="button" class="btn btn-danger">Delete  Restaurant</button>--}}
                            {{--<button type="button" class="btn btn-primary">Update Restaurant</button>--}}
                            {{--<button type="button" class="btn btn-info">Edit Restaurant</button>--}}
                            {{--<button type="button" class="btn btn-warning">Licence Renew</button>--}}
                            {{--<br>--}}
                            {{--<br>--}}
                            {{--<button type="button" class="btn btn-info">Show Registered Restaurant</button>--}}


                        </div><!-- /showback -->
                    </div><!-- /showback -->

                 </div>
                </section><!-- /MAIN CONTENT -->


        </section>



<div class="container" id="addrestaurant" >
        <div style="margin-left: 20%; width: 50%" >
        		            <input type="text" class="form-control" placeholder="Enter Restaurant Name" autofocus>
        		            <br>
        		            <input type="text" class="form-control" placeholder="Enter Restaurant Address">
        		            <br>
                            <input type="number" class="form-control" placeholder="Enter Restaurant Land line Number">
                            <br>
                            <input type="number" class="form-control" placeholder="Enter Restaurant Mobile Number">
                            <br>

                            <button type="button" style="align-right:100px" class="btn btn-success" >Add</button>
                            <br>
                            <br>


{{--id="myname"--}}
        		            </div>


</div>


 {{--<h1>Peru BookStore</h1>--}}
 {{--<a href="{{url('/books/create')}}" class="btn btn-success">Create Book</a>--}}
 {{--<hr>--}}
<div style="margin-left: 20%; width: 50%" >
 <table class="table table-striped table-bordered table-hover">
     <thead>
     <tr class="bg-info">
         <th>Id</th>
         <th>Name</th>
         <th>Address</th>
         <th>Mobile Number</th>
         <th>Land Line Number</th>

         <th colspan="3">Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($restaurants as $restaurant)
         <tr>
             <td>{!! $restaurant->id !!}</td>
             <td>{!! $restaurant->name !!}</td>
             <td>{!! $restaurant->address !!}</td>
             <td>{!! $restaurant->mobile_no !!}</td>
             <td>{!! $restaurant->land_line_no !!}</td>
{{--             <td><img src="{{asset('img/'.$book->image.'.jpg')}}" height="35" width="30"></td>--}}
{{--             <td><a href="{{url('restaurants',$restaurant->id)}}" class="btn btn-primary">Read</a></td>--}}
{{--             <td><a href="{{route('books.edit',$book->id)}}" class="btn btn-warning">Update</a></td>--}}
             <td>
             {!! Form::open(['method' => 'DELETE', 'route'=>['restaurants.destroy', $restaurant->id]]) !!}
             {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
             <button type="button" class="btn btn-info">Update</button>
             <button type="button" class="btn btn-warning">Licence Renew</button>
             {!! Form::close() !!}
             </td>
         </tr>
     @endforeach

     </tbody>

 </table>
 </div>

</div>
        		            </div>

</div>




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

          <script>

                         $(document).ready(function(){


                               $("#addrestaurant").hide();
                        $("#myname").click(function(){
                       $("#addrestaurant").show();
                   });

               });
                       </script>

{{--<script>--}}

                         {{--$(document).ready(function(){--}}


                               {{--$("#addrestaurant").hide();--}}
                        {{--$("#myname").click(function(){--}}
                       {{--$("#addrestaurant").show();--}}
                   {{--});--}}

               {{--});--}}
                       {{--</script>--}}





    </body>
</html>
