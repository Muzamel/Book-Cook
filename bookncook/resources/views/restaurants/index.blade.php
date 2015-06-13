@extends('...layout.main')

@section('content')


<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">


        <title>Book & Cook </title>


        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/datepicker.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
        <link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="/resources/demos/style.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <!-- Plugin CSS -->
        <link rel="stylesheet" href="css/animate.min.css" type="text/css">
        {{--<link rel="stylesheet" href="css/bootstrap-timepicker.min" type="text/css">--}}
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/creative.css" type="text/css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
          <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        {{--<script src="js/jquery.min.js"></script>--}}
        <script src="js/my_functions.js"></script>
        {{--<script src="js/datepicker.js"></script>--}}
        {{--<script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>--}}





    </head>

    <body id="page-top">

        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand page-scroll" href="#page-top">Book&Cook</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="page-scroll" href="#about">About</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#reservation">Reservation</a>
                        </li>

                        <li>
                            <a class="page-scroll" href="#unique_code">unique code</a>
                        </li>


                        <li>
                            <a class="page-scroll" href="Login.html">Login</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contact</a>
                        </li>

                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <header>
            <div class="header-content">
                <div class="header-content-inner text-center wow fadeInLeft" data-wow-delay="0.2s">
                    <h1>Cook your Food make your life easy</h1>


                    <a href="#about" class="btn btn-primary btn-xl page-scroll">Get Started</a>            </div>
            </div>
        </header>

        <section class="bg-primary" id="about">

            <div class="banner wow fadeInUp" data-wow-delay="0.2s" id="Home">
                <div class="container">
                    <div class="banner-info">
                        <div class="banner-info-head text-center wow fadeInLeft" data-wow-delay="0.5s">
                            <h1>Network of  Restaurants</h1>
                            <div class="line">
                                <h2> Reserve Table & Order Online</h2>
                            </div>
                        </div>
                        <div class="form-list wow fadeInRight" data-wow-delay="0.5s">
                            <form>
                                <div class="row">
                                    <div class="col-xs-3"><span> I know my Restaurant </span>
                                        <input type="text" list="restaurants" id="restaurant_list" name="restaurant_list" class="text" value="e.g Nando's" onFocus="this.value = '';" onBlur="if (this.value == '') {
                                                    this.value = 'restaurant';

                                                }">

                                        <datalist id="restaurants">
                                            @foreach($restaurants as $restaurant)
                                            <option value="{!!$restaurant->name!!}">{!!$restaurant->name!!}</option>
                                            @endforeach
                                        </datalist>
                                        <a class="page-scroll" style="color:#D3FBFF" href="#reservation detail">next proceed</a>
                                    </div>


                                    <div class="col-xs-3"><span>Food based Restaurant </span>

                                        <input type="text" list = 'ramzan_offers' id="ramzan_offer_list" name="ramzan_offer_list" class="text" value="e.g Pizza Hut" onFocus="this.value = '';" onBlur="if (this.value == '') {
                                                    this.value = 'ramzan's offer';
                                                }">

                                        <datalist id="ramzan_offers">
                                            @foreach($offer as $offers)
                                            <option value="{!!$offers->name!!}">{!!$offers->name!!}</option>
                                            @endforeach
                                        </datalist>
                                        <a class="page-scroll" style="color:#D3FBFF" href="#reservation">next proceed</a>



                                    </div>
                                    <div class="col-xs-3"><span>Bulk Delivery </span>
                                        <input type="text" class="text" value="Chicken Biriyani Daig" onFocus="this.value = '';" onBlur="if (this.value == '') {
                                                    this.value = 'Chicken Biriyani Daig';
                                                }">


                                        <a class="page-scroll" style="color:#D3FBFF" href="#reservation">next proceed</a>
                                    </div>
                                    <div class="col-xs-3"><span>Date Time based restaurant's</span>
                                        <input type="date" class="text" />


                                        <div style="display:block;" class="bootstrap-timepicker">
                                            <div style="text-align: center;padding-top: 5px; padding-bottom: 5px;border: 3px solid #FF4500; border-radius:10px; width:245px; ">
                                                Book Slot

                                                <div style="  height:65px; " class="bootstrap-timepicker">
                                                    <ul style="float:left; list-style:none;">
                                                        <li style="width:200px; float:left;">
                                                            <label for="Start time" class="control-label">Start Time</label>

                                                            <input id="timepicker1" type="text" class="input-small"
                                                                   style="color: black; width:75px; "/>
                                                            <i class="icon-time"></i>
                                                        </li>
                                                        <hr>

                                                        <li style="width:200px; float:left;">
                                                            <label for="End time" class=" control-label" style=" ">End Time</label>
                                                            <input id="timepicker2" type="text" class="input-small"
                                                                   style="color:black;width:75px;  ">
                                                        </li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                        <a class="page-scroll" style="color:#D3FBFF" href="#reservation">next proceed</a>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
        </section>
        <section id="reservation">
            <div class="container" >
                <h2>Restaurants Name</h2>
                <button type="button" class="btn btn-link">Avari</button></br>
                <button type="button" class="btn btn-link">Holiday</button></br>
                <button type="button" class="btn btn-link">Nendous</button></br>
                <button type="button" class="btn btn-link">Peerus club</button></br>
                <button type="button" class="btn btn-link">Lasani</button></br>
                <button type="button" class="btn btn-link">Bando Khan</button></br>
                <button type="button" class="btn btn-link">Fry chicks</button><br></div>


            <div class="map" style="position: absolute; top:1400px; right:200px">
                <h2>Restaurants on Map</h2>
                <button type="button" class="btn btn-link">Avari Map</button></br>
                <button type="button" class="btn btn-link">Holiday Map</button></br>
                <button type="button" class="btn btn-link">Nendous Map</button></br>
                <button type="button" class="btn btn-link">Peerus club Map</button></br>
                <button type="button" class="btn btn-link">Lasani Map</button></br>
                <button type="button" class="btn btn-link">Bando Khan Map</button></br>
                <button type="button" class="btn btn-link">Fry chicks Map</button></br>
            </div>


        </section>



        <form action="restaurants" method="POST">

            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <section id="reservation detail">
                <div class="container" style=" margin-left:10px;">
                    <fieldset>
                        <legend>Reservation Details</legend>


                        <div class="form-group">
                            <label for="no of people" class="col-sm-2 control-label">Number Of People*</label>

                            <div class="col-sm-2">
                                <input type="text" placeholder="Number of People " id="number_of_people" name="no_people"
                                       class="form-control">
                            </div>
                        </div>
                        <br/>

                        <div class="form group">
                            <label for="date" class="col-sm-2 control-label ">Date*</label>

                            <div class="col-sm-2  ">
                                <input type="text"  name="dates" id="datepicker" class="form-control datepicker">
                            </div>
                        </div>
                    </fieldset>
                </div>

            <div class="map" style="position: absolute; right:200px">
                <h2>Cheack availablity of restaurants</h2>
                <button type="button" class="btn btn-link">Avari Map</button></br>
                <button type="button" class="btn btn-link">Holiday Map</button></br>
                <button type="button" class="btn btn-link">Nendous Map</button></br>
                <button type="button" class="btn btn-link">Peerus club Map</button></br>
                <button type="button" class="btn btn-link">Lasani Map</button></br>
                <button type="button" class="btn btn-link">Bando Khan Map</button></br>
                <button type="button" class="btn btn-link">Fry chicks Map</button></br>
            </div>

            </section>
            <section>
                <div class="form-group">


                    <div style="display:block;" class="bootstrap-timepicker">
                        <div style="text-align: center;padding-top: 5px; padding-bottom: 5px;border: 3px solid #FF4500; border-radius:10px; width:465px; ">
                            Book Slot

                            <div style="  height:50px; " class="bootstrap-timepicker">
                                <ul style="float:left; list-style:none;">
                                    <li style="width:200px; float:left;">
                                        <label for="Start time" class="control-label">Start Time</label>

                                        <input id="timepicker1" type="text" class="input-small"
                                               style="color: black; width:75px; "/>
                                        <i class="icon-time"></i>
                                    </li>

                                    <li style="width:200px; float:left;">
                                        <label for="End time" class=" control-label" style=" ">End Time</label>
                                        <input id="timepicker2" type="text" class="input-small"
                                               style="color:black;width:75px;  ">
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>

                <div style="text-align: center;padding-top: 5px; padding-bottom: 5px;border: 3px solid #FF4500; border-radius:10px; width:465px;  background: burlywood">
                    reserve Slots
                    <div class="bootstrap-timepicker">
                        <label for="Start time" control-label">Start Time: 5:45 pm</label>
                        <label for="End time" class=" control-label">End Time 5:59 am</label></br>

                        <label for="Start time" class=" control-label">Start Time: 9:45 pm</label>
                        <label for="End time" class=" control-label">End Time 12:59 am</label>


                    </div>
                </div>
                <br/>


                <div style="display:block;" class="bootstrap-timepicker">
                    <div style="text-align: center;padding-top: 5px; padding-bottom: 5px;border: 3px solid #FF4500; border-radius:10px; width:465px;">
                        Book Slot

                        <div style="  height:50px; " class="bootstrap-timepicker">


                            <ul style="float:left; list-style:none;">
                                <li style="width:200px; float:left;">
                                    <label for="Start time" class="control-label">Start Time</label>

                                    <input id="timepicker3" type="text" class="input-small "
                                           style="color: black; width:75px; ">

                                </li>

                                <li style="width:200px; float:left;">
                                    <label for="End time" class=" control-label" style=" ">End Time</label>
                                    <input id="timepicker4" type="text" class="input-small"
                                           style="color:black;width:75px;  "/>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                </br>
                </br>


            </section>

            <br/>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <input type="submit" class="btn btn-success" value="Check Reservation" >
                    <button class="btn btn-info" type="button">Check availability  other restaurants</button>

                </div>
            </div>
            </br>
        </form>

    </fieldset>

</div>
<div style="position:absolute; top:1330px; left:700px;">


</div>
</section></br>

<script type="text/javascript" src="js/jquery.timer.js"></script>






<!--                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button class="btn btn-success" type="button">Check Reservation</button>
                            <button class="btn btn-info" type="button">Check availability  other restaurants</button>

                        </div>
                    </div></br>-->

</fieldset>


<section>
    <div class="container">

        <div class="panel panel-default panel-danger">

            <div class="panel-heading"> <h2 class="panel-title">Confirm Booking</h2></div>


            <table class="table">
                <tr>
                    <td> Food name </td>
                    <th> <div class="col-sm-5">
                    <input type="text" id="number_of_people" name="no_people" class="form-control">
                </div></th>

                </tr>
                <tr>
                    <td>Restaurant Name and Address</td>
                    <th> <div class="col-sm-5">
                    <input type="text" id="number_of_people" name="no_people" class="form-control">
                </div></th>

                </tr>
                <tr>
                    <td>Date & Time</td>
                    <th> <div class="col-sm-5">
                    <input  id="number_of_people" name="no_people" class="form-control">
                </div> </th>

                </tr>
                <tr>
                    <td>Number of people</td>
                    <th> <div class="col-sm-5">
                    <input type="text" id="number_of_people" name="no_people" class="form-control">
                </div> </th>

                </tr>
            </table>


        </div>
        <button type="button" class="btn btn-success">Are you sure </button>


    </div>


</section>

<section id="unique_code">
    <div class="container">
        <fieldset>
            <legend>Unique Code</legend>

    </div>
</div>
</div>
</div>
</div>

<div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
        <div class="col-sm-3">
            <input type="text" id="number_of_people" name="no_people" class="form-control">
        </div>
        <br/><br/><br/>
        <button class="btn btn-success" type="button">Your reservation Code </button>

    </div>
</div>

</fieldset>

</div>
</section>







<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Let's Get In Touch!</h2>
                <hr class="primary">
                <p>Contact Us and share yours feedback</p>
            </div>
            <div class="col-lg-4 col-lg-offset-2 text-center">
                <i class="fa fa-phone fa-3x wow bounceIn"></i>
                <p></p>
            </div>
            <div class="col-lg-4 text-center">
                <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                <p><a href="mailto:your-email@your-domain.com">feedback@Book&Cook.com</a></p>
            </div>

        </div>
    </div>
</section>





{{--<script type="text/javascript" src="js/jquery.timer.js"></script>--}}
{{--<script src="js/jquery.js"></script>--}}


{{--<script src="js/bootstrap.min.js"></script>--}}


{{--<script src="js/jquery.easing.min.js"></script>--}}
{{--<script src="js/jquery.fittext.js"></script>--}}
{{--<script src="js/wow.min.js"></script>--}}


{{--<script src="js/creative.js"></script>--}}



</body>

</html>
