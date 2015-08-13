


<form method="post" action="<?= base_url(); ?>index.php/booking_controller/reserve_table">
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
            <h4>Welcome <?php echo $this->FirstName; ?></h4>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <?php if ($this->session->userdata('name')) { ?>
                    <li>
                        <a class="page-scroll" href="#reservation">Reservation</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/Bulk_Controller/bulk_rest_name   "class="page-scroll" href="#reservation">Bulk_Delivery</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/login/logout">Log Out</a>
                    </li>
                <?php } else { ?>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/login">Login</a>
                    </li>
                <?php } ?>
            </ul>
        </div>

    </div>
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
                    <h1 class="section-heading">Network of  Restaurants</h1>
                    <div >
                        <h2 class="light"> Reserve Table & Order Online</h2>
                        <hr class="light">
                    </div>

                </div>
                <div>
                    <?php
                    if ($this->session->flashdata('success')) {
                        echo $this->session->flashdata('success');
                    } else {
                        $this->session->flashdata('failure');
                    }
                    ?>

                    <?php
                    if ($this->session->flashdata('alert-capacity')) {
                        echo $this->session->flashdata('alert-capacity');
                    } elseif ($this->session->flashdata('reservation'))
                        echo $this->session->flashdata('reservation')
                    ?>
                    <div class="form-list wow fadeInRight" data-wow-delay="0.5s">

                        <div class="row" style="color: black;">
                            <div class="col-xs-3"><h3><span> I know my Restaurant </span></h3><br> <br>

                                <select id="rest_times" name="restaurant_id" class="form-control" onchange="get_time();" >
                                    <option>Select Restaurant</option>
                                    <?php foreach ($result as $row) { ?>
                                        <option value="<?php echo $row->restaurant_id; ?>"><?php echo $row->restaurant_name; ?></option>
                                    <?php } ?>
                                </select>
                                <br>

                                <a class="page-scroll" style="color:#2ECC71" href="#reservation detail">next proceed</a>
                            </div>

                            <div class="col-xs-3"><h3 class="light"><span>Food based Restaurant </span> </h3><br> <br>

                                <input type="text" list = 'food_based_restaurant' id="food_based_restaurant" name="food_based_restaurant" class="form-control" value="" onFocus="this.value = '';" onBlur="if (this.value == '') {
                                            }">
                                <br>
                                <a  style="color:#2ECC71" href="#reservation detail">next proceed</a>
                            </div>
                            <div class="col-xs-3"><h3><span>Check Slots Date Time based restaurant's  </span></h3><br>
                                <input type="text" class="form-control" id="date" readonly=""><br>


                                <label>  </label>
                                <ul style="float:left; list-style:none;">
                                    <li>
                                        <label >Start Time</label>
                                        <input id="input_from" type="text" class="form-control"/>
                                    </li>
                                    <li>
                                        <label>End Time</label>
                                        <input id="input_to" type="text" class="form-control"/>
                                    </li>
                                    <li>
                                        <label >Enter number of People</label>
                                        <input id="no_of_people" type = 'number' min="1" step="1" class="form-control" type="" class="form-control"/>
                                    </li>
                                </ul>

                                <input type='button' class="btn btn-success"  value="Check availability" onclick="check_slots();">
                            </div>

                            <div class="col-xs-3"><h3><span>Bulk Delivery </span></h3><br> <br>

                                <input type="text" class="form-control" value="Chicken Biriyani Daig" onFocus="this.value = '';" onBlur="if (this.value == '') {
                                                this.value = 'Chicken Biriyani Daig';
                                            }">

                                <a class="page-scroll" style="color:#D3FBFF" href="#reservation">next proceed</a>
                                <br>
                            </div>

                        </div>
                    </div>
                </div>
            </div></div></section>


<div class="container-fluid">

    <div id="rest_name" class="col-md-6" style="border: 1px solid green; height: 65px; margin-top: 27px; display: none;">

    </div>
    <div class="col-md-6">
        <div id="alert" class="alert alert-success" style="display: none;">Hurry Up Space is available.</div>
        <div id="alert2" class="alert alert-warning" style="display: none;">Space is not available try other slot or time.</div>
        <div id="restdata" style="border: 1px solid green; height: 65px; margin-top: 27px; display: none;">

        </div>
    </div>

</div>



<input type="hidden" name="_token" value="{{ csrf_token() }}" />


<section id="reservation detail">
    <div class="container" style=" margin-left:10px;">
        <fieldset>
            <div id="capacity-alert">
                <ul id="capacity">

                </ul>
            </div>
            <legend>Reservation Details</legend>

            <div style="display:block;" class="bootstrap-timepicker" id="times"></div>
            <div class="form-group">
                <table>
                    <tr>
                        <td>Number Of People*</td>

                        <td> <input class="form-control" type = 'number' min="1" step="1" name='noPeople' id="noPeople"></td>
                    </tr>
                    <tr>
                        <td>Date*</td>

                        <td> <input class="form-control" type="text"  name="res_date" readonly="" id="reserve_date"/></td>
                    </tr>


                    <tr>
                        <td>     <div class="col-lg-2 pager dropdown">
                                <div class="dropdown" id="">
                                    <select name="start_time"  class="btn btn-primary dropdown-toggle" data-toggle="dropdown" id="start_time">
                                        <option> Start Time </option>
                                        <option> 12:15:00 </option>
                                        <option> 01:15:00 </option>
                                        <option> 02:15:00 </option>
                                        <option> 03:15:00 </option>
                                        <option> 04:15:00 </option>
                                        <option> 05:15:00 </option>
                                        <option> 06:15:00 </option>
                                        <option> 07:15:00 </option>
                                        <option> 08:15:00 </option>
                                        <option> 09:15:00 </option>
                                        <option> 10:15:00 </option>
                                        <option> 11:15:00 </option>
                                        <option> 12:15:00 </option>
                                        <option> 13:15:00 </option>
                                        <option> 14:15:00 </option>
                                        <option> 15:15:00 </option>
                                        <option> 16:15:00 </option>
                                        <option> 17:15:00 </option>
                                        <option> 18:15:00 </option>
                                        <option> 19:15:00 </option>
                                        <option> 20:15:00 </option>
                                        <option> 21:15:00 </option>
                                        <option> 22:15:00 </option>
                                        <option> 23:15:00 </option>
                                        <option> 24:00:00 </option>
                                    </select></div></div></td>
                        <td>
                            <div class="dropdown">
                                <select  name="end_time" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" id="end_time">
                                    <option> End Time </option>
                                    <option> 12:15:00 </option>
                                    <option> 01:15:00 </option>
                                    <option> 02:15:00 </option>
                                    <option> 03:15:00 </option>
                                    <option> 04:15:00 </option>
                                    <option> 05:15:00 </option>
                                    <option> 06:15:00 </option>
                                    <option> 07:15:00 </option>
                                    <option> 08:15:00 </option>
                                    <option> 09:15:00 </option>
                                    <option> 10:15:00 </option>
                                    <option> 11:15:00 </option>
                                    <option> 12:15:00 </option>
                                    <option> 13:15:00 </option>
                                    <option> 14:15:00 </option>
                                    <option> 15:15:00 </option>
                                    <option> 16:15:00 </option>
                                    <option> 17:15:00 </option>
                                    <option> 18:15:00 </option>
                                    <option> 19:15:00 </option>
                                    <option> 20:15:00 </option>
                                    <option> 21:15:00 </option>
                                    <option> 22:15:00 </option>
                                    <option> 23:15:00 </option>
                                    <option> 24:00:00 </option>

                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><input type='button' class="btn btn-success"  value="Check availability" id="" onclick = "check_reserve();">
                        </td>
                        <td>

                            <a href="<?php echo base_url(); ?>index.php/cooking_controller/index" button type="button" class="btn btn-success">Make your food</button></a></td>
                    </tr>


                    </tr></table></div></fieldset>
    </div>
</section>



<section>
    <div class="container">

        <div class="panel panel-primary">

            <div class="panel-heading"> <h2 class="panel-title">Confirm Booking</h2></div>


            <table class="table">
                <tr>
                    <td> <label> Unique Code </label> </td>
                    <th> <div class="col-sm-5" >
                            <?php if ($record) { ?>
                                <input type="text" value="<?php echo $record->unique_code; ?>" id="number_of_people" name="no_people" class="form-control">
                            <?php } else { ?>
                                <input type="text" value="" id="number_of_people" name="no_people" class="form-control">
                            <?php } ?>
                        </div></th>

                </tr>
                <tr>
                    <td><label>Restaurant Name</label></td>
                    <th> <div class="col-sm-5">
                            <?php if ($record) { ?>
                                <input type="text" value="<?php echo $record->restaurant_name; ?>" id="number_of_people" name="no_people"  class="form-control">
                            <?php } else { ?>
                                <input type="text" value="" id="number_of_people" name="no_people"  class="form-control " readonly="">
                            <?php } ?>
                        </div></th>


                </tr>
                <tr>
                    <td><label>Restaurant Address</label></td>
                    <th> <div class="col-sm-5">
                            <?php if ($record) { ?>
                                <input type="text" value="<?php echo $record->address; ?>" id="number_of_people" name="no_people"  class="form-control">

                            <?php } else { ?>
                                <input type="text" value="" id="number_of_people" name="no_people"  class="form-control"readonly="">
                            <?php } ?>
                        </div></th>

                </tr>
                <tr>
                    <td><label>Date & Time</label></td>
                    <th> <div class="col-sm-5">
                            <?php if ($record) { ?>
                                <input  id="number_of_people" value="<?php echo $record->res_date . ' & ' . $record->start_time . '--' . $record->end_time ?>" name="no_people" class="form-control">

                            <?php } else { ?>
                                <input type="text" value="" id="number_of_people" name="no_people"  class="form-control">
                            <?php } ?>
                        </div> </th>


                </tr>
                <tr>
                    <td><label>Number of people</label></td>
                    <th> <div class="col-sm-5">
                            <?php if ($record) { ?>
                                <input type="text" id="number_of_people" readonly value="<?php echo $record->people; ?>" name="no_people" class="form-control">
                            <?php } else { ?>
                                <input type="text" value="" readonly="readonly" id="number_of_people" name="no_people"  class="form-control">
                            <?php } ?>

                        </div> </th>

                </tr>



                <!--                    <tr>
                        <td><label>Recipe</label></td>
                        <th> <div class="col-sm-5">
                        <?php if ($record) { ?>
                            <input type="text" value="<?php echo $record->recipe; ?>" id="" name="recipe"  class="form-control">
                        <?php } else { ?>
                            <input type="text" value="" id="" name="recipe"  class="form-control " readonly="">
                        <?php } ?>
                    </div></th>


                    </tr>-->

            </table>
        </div>
        <button type="submit" class="btn btn-danger" id="booking"> Book a table  </button>
    </div>
</section>
</form>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Let's Get In Touch!</h2>
                <hr class="primary">
                <p>Contact Us and share yours feedback</p>
                <p><a href="feedbacl@bookncook.com">feedback@BooknCook.com</a></p>
            </div>
        </div>
    </div>
</section>

</body>
</html>
