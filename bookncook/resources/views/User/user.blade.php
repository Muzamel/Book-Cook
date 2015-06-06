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
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-timepicker.min" type="text/css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
    <script src="js/jquery.min.js"></script>
    <script src="js/datepicker.js"></script>
    <script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>

    <script>

        $(document).ready(function () {


            $("#portfolio").hide();
            $("#myName").click(function () {
                $("#portfolio").show();
            });

        });
    </script>



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
                    <a class="page-scroll" href="#Billing">Billing</a>
                </li>


                <li>
                    <a class="page-scroll" href="{!!URL::to('/Userlogin')!!}">Login</a>
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
        <div class="header-content-inner">
            <h1>Cook your Food make your life easy</h1>

            <p>Make your Kitchen Online and book your restaurant as your want</p>
            <a href="#about" class="btn btn-primary btn-xl page-scroll">Get Started</a>            </div>
    </div>
</header>

<section class="bg-primary" id="about">

    <div class="banner wow fadeInUp" data-wow-delay="0.4s" id="Home">
        <div class="container">
            <div class="banner-info">
                <div class="banner-info-head text-center wow fadeInLeft" data-wow-delay="0.5s">
                    <h1>Network of over 5000 Restaurants</h1>
                    <div class="line">
                        <h2> To Order Online</h2>
                    </div>
                </div>
                <div class="form-list wow fadeInRight" data-wow-delay="0.5s">
                    <form>
                        <ul class="navmain">
                            <li><span>Location Name</span>
                                <input type="text" class="text" value="Secunderabad" onFocus="this.value = '';" onBlur="if (this.value == '') {
                                                    this.value = 'Secunderabad';
                                                }">
                            </li>

                            <li><span>Restaurant Name</span>
                                <input type="text" class="text" value="Swagath Grand" onFocus="this.value = '';" onBlur="if (this.value == '') {
                                                    this.value = 'Swagath Grand';
                                                }">
                            </li>
                            <li><span>Food Based Restaurant </span>
                                <input type="text" class="text" value="Chicken Biriyani" onFocus="this.value = '';" onBlur="if (this.value == '') {
                                                    this.value = 'Chicken Biriyani';
                                                }">
                            </li>
                        </ul>
                    </form>
                </div>



            </div>
        </div>
    </div>
</section>
<section id="reservation">
    <div class="container">
        <fieldset>
            <legend>Reservation Details</legend>

            </br>



            <div class="form-group">
                <label for = "no of people" class="col-sm-3 control-label">Number Of People*</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="Numer of People " id="number_of_people" name="no_people" class="form-control">
                </div>

            </div></br>
            <div class="form group">
                <label for="date" class="col-sm-3 control-label">Date*</label>
                <div class="col-sm-3  ">
                    <input id="datepicker" placeholder="Select Date" data-provide="datepicker" class="form-control">
                </div>
            </div>
            <br>
            <br>
            <div class="form-group">
                <label for="subject" class="col-sm-3 control-label">Subject </label>
                <div class="col-sm-3">
                    <input type="text" placeholder="Subject e.g Birthday party" id="subject" name="subject" class="form-control">
                </div>
            </div>
            </br></br>

            <section class="no-padding" id="portfolio">
                <div class="container-fluid">
                    <div class="row no-gutter">
                        <div class="col-lg-4 col-sm-6">
                            <a  class="portfolio-box">
                                <img src="img/portfolio/1.jpg" class="img-responsive" alt="">

                                <div class="portfolio-box-caption">
                                    <div class="portfolio-box-caption-content">
                                        <div class="project-category text-faded">
                                            Reserve Slots
                                        </div>


                                        <div class="bootstrap-timepicker">
                                            <input id="timepicker1" type="text" class="input-small" style="color: black;">
                                            <i class="icon-time"></i>

                                            <input id="timepicker2" type="text" class="input-small" style="color:black;">
                                            <i class="icon-time"></i>


                                        </div>



                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <a class="portfolio-box">

                                <img src="img/portfolio/2.jpg" class="img-responsive" alt="">
                                <div class="portfolio-box-caption">
                                    <div class="portfolio-box-caption-content">
                                        <div class="project-category text-faded">
                                            Click to Book your table
                                        </div>



                                        <div class="bootstrap-timepicker">
                                            <input id="timepicker3" type="text" class="input-small" style= "color:black;">
                                            <i class="icon-time"></i>

                                            <input id="timepicker4" type="text" class="input-small" style="color:black;">
                                            <i class="icon-time"></i>


                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <a class="portfolio-box">
                                <img src="img/portfolio/3.jpg" class="img-responsive" alt="">
                                <div class="portfolio-box-caption">
                                    <div class="portfolio-box-caption-content">
                                        <div class="project-category text-faded">
                                            Reserve slots
                                        </div>

                                        <div class="bootstrap-timepicker">
                                            <input id="timepicker5" type="text" class="input-small" style="color:black;">
                                            <i class="icon-time"></i>

                                            <input id="timepicker6" type="text" class="input-small" style="color:black;">
                                            <i class="icon-time"></i>


                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>


                    </div>
                </div>
            </section></br>
            <button type="button" class="btn btn-success" id="myName">Check availbility</button>
            <button type="button" class="btn btn-success" id="myName">Check From another restaurants</button>
            <script type="text/javascript" src="js/jquery.timer.js"></script>






            <!--                    <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button class="btn btn-success" type="button">Check Reservation</button>
                                        <button class="btn btn-info" type="button">Check availability  other restaurants</button>

                                    </div>
                                </div></br>-->

        </fieldset>

    </div>
</section>


<section>
    <div class="container">

        <div class="panel panel-default panel-danger">

            <div class="panel-heading"> <h2 class="panel-title">Confirm Booking</h2></div>


            <table class="table">
                <tr>
                    <td>Receipt </td>
                    <th> F-17</th>

                </tr>
                <tr>
                    <td>Restaurant Name and Address</td>
                    <th> Options</th>

                </tr>
                <tr>
                    <td>Date & Time</td>
                    <th>  30/5/2015 1:30 PM </th>

                </tr>
                <tr>
                    <td>Number of people</td>
                    <th> 4 </th>

                </tr>
            </table>


        </div>
        <button type="button" class="btn btn-success">Are you sure </button>


    </div>


</section>

<section id="Billing">
    <div class="container">
        <fieldset>
            <legend>Payment</legend>
            <div class="form-group">
                <label for="card-holder-name" class="col-sm-3 control-label">Name on Card*</label>
                <div class="col-sm-9">
                    <input type="text" placeholder="Card Holder's Name" id="card-holder-name" name="card-holder-name" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="card-holder-name" class="col-sm-3 control-label">Enter Your email Address*</label>
                <div class="col-sm-9">
                    <input type="text" placeholder="Your email Address,where should we send invoices?" id="card-holder-name" name="card-holder-name" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="card-number" class="col-sm-3 control-label">Card Number *</label>
                <div class="col-sm-9">
                    <input type="text" placeholder="Debit/Credit Card Number" id="card-number" name="card-number" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="expiry-month" class="col-sm-3 control-label">Expiration Date *</label>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-xs-3">
                            <select id="expiry-month" name="expiry-month" class="form-control col-sm-2">
                                <option>Month</option>
                                <option value="01">Jan (01)</option>
                                <option value="02">Feb (02)</option>
                                <option value="03">Mar (03)</option>
                                <option value="04">Apr (04)</option>
                                <option value="05">May (05)</option>
                                <option value="06">June (06)</option>
                                <option value="07">July (07)</option>
                                <option value="08">Aug (08)</option>
                                <option value="09">Sep (09)</option>
                                <option value="10">Oct (10)</option>
                                <option value="11">Nov (11)</option>
                                <option value="12">Dec (12)</option>
                            </select>
                        </div>
                        <div class="col-xs-3">
                            <select name="expiry-year" class="form-control">
                                <option value="13">2013</option>
                                <option value="14">2014</option>
                                <option value="15">2015</option>
                                <option value="16">2016</option>
                                <option value="17">2017</option>
                                <option value="18">2018</option>
                                <option value="19">2019</option>
                                <option value="20">2020</option>
                                <option value="21">2021</option>
                                <option value="22">2022</option>
                                <option value="23">2023</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="cvv" class="col-sm-3 control-label">Card CVV *</label>
                <div class="col-sm-3">
                    <input type="text" placeholder="Security Code" id="cvv" name="cvv" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <button class="btn btn-success" type="button">Pay Now</button>
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




<script type="text/javascript" src="js/jquery.timer.js"></script>
<script src="js/jquery.js"></script>


<script src="js/bootstrap.min.js"></script>


<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.fittext.js"></script>
<script src="js/wow.min.js"></script>


<script src="js/creative.js"></script>

















</body>

</html>
