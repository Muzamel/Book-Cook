<script type="text/javascript">
    base_url = '<?php print_r(base_url()); ?>';


</script>


<!DOCTYPE html>
<html>
<head>
    <title>RECEIPES Bootstarp responsive Website Template| Ordered-Lists :: w3layouts</title>




    <link href="<?php echo base_url();?>css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <link href="<?php echo base_url();?>css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="<?php echo base_url();?>application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!--Animation-->
    <script src="<?php echo base_url();?>js/wow.min.js"></script>
    <link href="<?php echo base_url();?>css/animate.css" rel='stylesheet' type='text/css' />
    <script>
        new WOW().init();
    </script>
    <script type="text/javascript" src="<?php echo base_url();?>js/move-top.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
            });
        });
    </script>
    <script src="<?php echo base_url();?>js/simpleCart.min.js"> </script>
    <script src="<?php echo base_url();?>js/calculate_price.js"> </script>




</head>
<body>
<!-- header-section-starts -->
<div class="header">
    <div class="container">
        <div class="top-header">
            <div class="logo">
                <a href="index.html"><img src="../../img/book_image/logo.png" class="img-responsive" alt="" /></a>
            </div>
            <div class="queries">
                <p>Questions? Call us Toll-free!<span>1800-0000-7777 </span><label>(11AM to 11PM)</label></p>
            </div>
            <div class="header-right">
                <div class="cart box_1">
                    <a href="checkout.html">
                        <h3> <span class="simpleCart_total"> $0.00 </span> (<span id="simpleCart_quantity" class="simpleCart_quantity"> 0 </span> items)<img src="images/bag.png" alt=""></h3>
                    </a>
                    <p><a href="javascript:;" class="simpleCart_empty">Empty card</a></p>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="menu-bar">
        <div class="container">
            <div class="top-menu">
                <ul>
                    <li><a href="index.html">Home</a></li>|
                    <li class="active"><a href="popular-restaurents.html">Popular Restaurants</a></li>|
                    <li><a href="order.html">Order</a></li>|
                    <li><a href="contact.html">contact</a></li>
                    <div class="clearfix"></div>
                </ul>
            </div>
            <div class="login-section">
                <ul>
                    <li><a href="login.html">Login</a>  </li> |
                    <li><a href="register.html">Register</a> </li> |
                    <li><a href="#">Help</a></li>
                    <div class="clearfix"></div>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>


<!-- header-section-ends -->
<!-- content-section-starts -->



<div class="orders">
<div class="container">



 <table align="centre" class="orders" style="width:70%">


     <thread class="order-top"  >

         <tr>
             <th class="">


             </th>


             <th class="item-lists" >
                 Menu list
             </th>



            <th class="pre-top" >
                Quantity
            </th>



             <th class="pr-right">
                 Price
             </th>



             <th class="pr-right">
                Choose Your Quantity
            </th>



             <th class="clearfix product-price">
                 Your bill


             </th>



         </tr>

     </thread>

     <form action="<?php echo base_url();?>index.php/BulkRecipe_Controller/get_insert_order" method="POST">

     <tbody>
     <script>
         var quantity_recepie = new Array();
         //var max_quantity = new Array($j);


         //quantity_recepie[$i] = quantity_recepie[$j];


     </script>

<?php $i=1; foreach($result as $row){
?>


<?php $j=0;  $row->max_quantity;
    echo "<script>quantity_recepie[".$i."] = ".$row->max_quantity.";</script>"?>

     <tr>
         <th >
<!--             --><?php //echo $i ;?>

         </th>






             <input type="hidden" name="bulk_delivery[]" value="<?php echo $row->bulk_delivery_id;?>" >




         <th class="item-lists">
             <span id="order_recipe<?php echo $i;?>"><?php echo $row->recipe_name;?></span>
         </th>
         <th class="pre-top">
            <?php echo $row->quantity;?>
         </th>
        <th class="pr-right">
            <span name="price" id="priceT<?php echo $i;?>" ><?php echo $row->price;?></span>
        </th>
        <th class="pr-right">



            <input type="text"  name="quantity[]" step="1" class="container" value="" onfocus="this.value = '';" onblur=";" style="width: 60px" id="quantityT<?php echo $i;?>" onkeyup="CalculatePrice (<?php echo $i;?>,<?php echo $row->max_quantity; ?>)">
            <br>(Quantity Available = <?php echo $row->max_quantity; ?>)
        </th>

         <th class="clearfix product-price">
             <input type="text" name="price[]" class="container row-total" value="" onfocus="this.value = '';" onblur="if (this.value == '') this.value = '';" style="width: 60px"id="TPrice<?php echo $i;?>" readonly>
         </th>



     </tr>


    <?php
$i++;
} ?>










     </tbody>








     <!--     <td><input type='submit' class="btn btn-success"  value="" id="order" onclick = "check_order();">-->




<br>
    <div class="col-xs-4"><span><h3>Select the Date</h3></span>
        <input type="date" class="text" id="order_date" name="date"/></div>

    <div class="col-lg-5 pager">
        <h3>Select the time</h3></span>
        <div class="dropdown" id="">
            <select  class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="order_time" name="time">
                <option> Start_Time </option>
                <option> 01:15 </option>
                <option> 02:15 </option>
                <option> 03:15 </option>
                <option> 04:15 </option>
                <option> 04:15 </option>
                <option> 05:15 </option>
                <option> 06:15 </option>
                <option> 07:15 </option>
                <option> 08:15 </option>
                <option> 09:15 </option>
                <option> 10:15 </option>
                <option> 11:15 </option>
                <option> 12:15 </option></select></div></div>

         <div class="wow swing animated" data-wow-delay= "0.4s">
             <input type="submit" value="order now">
         </div>


 </table>


 <div style="padding-right:2%; margin-left: 7%; background: darkslategray;width: 20%;height: 20%; margin-top:10% ">

     <button type="button" class="btn btn-success"  style="margin-top: 10%" id="order" onclick="CalculateTotalBill() "><h4>Calculate Your Bill</h4></button>


     <input type="text"  readonly id ="get_bill" style="color: darkgray" name="bill">


 </div>



 </form>


<br>
<div class="col-lg-12  order-form-grid  wow fadeInLeft">
<div class="" data-wow-delay="0.4s" style="white-space:normal">
    <h5>Order Information</h5>


    <div class="col-xs-4">
        <label for="ex3">User_name</label>
        <input class="form-control" id="ex3" type="text" required="plz enter your name">

        <label for="ex3">Restaurant_Name</label>
        <input class="form-control" id="ex3" type="text"required="">



        <label for="ex3">Recipe Names</label>
        <input class="form-control" id="ex3" type="text">



        <label for="ex3">Unique code</label>
        <input class="form-control" id="ex3" type="text">




    </div><br>



</div>
</div>
</div>

</div>




























<div class="contact-section" id="contact">
    <div class="container">
        <div class="contact-section-grids">
            <div class="col-md-3 contact-section-grid wow fadeInLeft" data-wow-delay="0.4s">
                <h4>Site Links</h4>
                <ul>
                    <li><i class="point"></i></li>
                    <li class="data"><a href="#">About Us</a></li>
                </ul>
                <ul>
                    <li><i class="point"></i></li>
                    <li class="data"><a href="#">Contact Us</a></li>
                </ul>
                <ul>
                    <li><i class="point"></i></li>
                    <li class="data"><a href="#">Privacy Policy</a></li>
                </ul>
                <ul>
                    <li><i class="point"></i></li>
                    <li class="data"><a href="#">Terms of Use</a></li>
                </ul>
            </div>
            <div class="col-md-3 contact-section-grid wow fadeInLeft" data-wow-delay="0.4s">
                <h4>Site Links</h4>
                <ul>
                    <li><i class="point"></i></li>
                    <li class="data"><a href="#">About Us</a></li>
                </ul>
                <ul>
                    <li><i class="point"></i></li>
                    <li class="data"><a href="#">Contact Us</a></li>
                </ul>
                <ul>
                    <li><i class="point"></i></li>
                    <li class="data"><a href="#">Privacy Policy</a></li>
                </ul>
                <ul>
                    <li><i class="point"></i></li>
                    <li class="data"><a href="#">Terms of Use</a></li>
                </ul>
            </div>
            <div class="col-md-3 contact-section-grid wow fadeInRight" data-wow-delay="0.4s">
                <h4>Follow Us On...</h4>
                <ul>
                    <li><i class="fb"></i></li>
                    <li class="data"> <a href="#">  Facebook</a></li>
                </ul>
                <ul>
                    <li><i class="tw"></i></li>
                    <li class="data"> <a href="#">Twitter</a></li>
                </ul>
                <ul>
                    <li><i class="in"></i></li>
                    <li class="data"><a href="#"> Linkedin</a></li>
                </ul>
                <ul>
                    <li><i class="gp"></i></li>
                    <li class="data"><a href="#">Google Plus</a></li>
                </ul>
            </div>
            <div class="col-md-3 contact-section-grid nth-grid wow fadeInRight" data-wow-delay="0.4s">
                <h4>Subscribe Newsletter</h4>
                <p>To get latest updates and food deals every week</p>
                <input type="text" class="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
                <input type="submit" value="submit">
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- content-section-ends -->
<!-- footer-section-starts -->
<div class="footer">
    <div class="container">
        <p class="wow fadeInLeft" data-wow-delay="0.4s">&copy; 2014  All rights  Reserved | Template by &nbsp;<a href="http://w3layouts.com" target="target_blank">W3Layouts</a></p>
    </div>
</div>
<!-- footer-section-ends -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
         var defaults = {
         containerID: 'toTop', // fading element id
         containerHoverID: 'toTopHover', // fading element hover id
         scrollSpeed: 1200,
         easingType: 'linear' 
         };
         */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>