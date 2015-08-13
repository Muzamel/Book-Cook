<script type="text/javascript">
    base_url = '<?php print_r(base_url()); ?>';


</script>





<!DOCTYPE html>
<html>
<head>
    <title>RECEIPES Bootstarp responsive Website Template| Popular-restaurent :: w3layouts</title>


    <link href="<?php echo base_url(); ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="<?php echo base_url();?>js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!--Animation-->
    <script src="<?php echo base_url();?>js/wow.min.js"></script>
    <link href="<?php echo base_url(); ?>css/animate.css" rel='stylesheet' type='text/css' />
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






</head>
<body>

    <div class="menu-bar">
        <div class="container">
            <div class="top-menu">
                <ul>
                    <li><a href="index.html">Home</a></li>|
                    <li class="active"><a href="popular-restaurents.html" id="bulk_rest">Popular Restaurants</a></li>|
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
<div class="Popular-Restaurants-content"style="background-color:burlywood">
    <div class="Popular-Restaurants-grids">


        <div class="container">


            <table align="centre" class="table table-condensed table-striped table-hover no-margin"style="width:70%">

           <thread>

           <tr style="width: 56%;">
               <th>
                   No.

               </th>
               <th style="">
                Restaurant Names
               </th>
           </tr>

           </thread>
            <tbody>

            <?php $i=1;foreach($result as $row){
                ?>

            <tr id="<?php echo $row->restaurant_id; ?>" class="res_id">
                <th style="">
                    <?php echo  $i++; ?>

                </th>
                <th style="">
                    <?php echo $row->restaurant_name; ?>




                </th>

                <th style="width: 1%" >
                    <a href="<?php echo base_url();?>index.php/BulkRecipe_Controller/bulk_recipe/<?php echo $row->restaurant_id;?>"  class="btn btn-warning" <i class="glyphicon-edit"></i>See Menu</a>

                </th>
                 </tr>
            <?php } ?>

            </tbody>
            </table>
</div>

















<!--            <tr>-->
<!---->
<!--                <th style="width: 3%"></th>-->
<!---->
<!---->
<!---->
<!---->
<!--                <div class="Popular-Restaurants-grid wow fadeInRight" data-wow-delay="1.4s">-->
<!---->
<!--                <div class="col-lg-7restaurent-title" >-->
<!---->
<!---->
<!--                    <div class="logo-title">-->
<!---->
<!--                        --><?php
//                        foreach ($result as $row)
//                        {
//                            ?>
<!---->
<!--                            <div class="col-lg-7" style="">-->
<!--                            <td style="">--><?php //echo $row->restaurant_name;"</br></br>"?><!--</td>-->
<!--                            </div>-->
<!---->
<!---->
<!---->
<!--                            <div class="col-lg-2"style="">-->
<!--                            <td style=""><a class="morebtn hvr-rectangle-in" href="orders-list.html">See Menu</a></td>-->
<!--                        </div>-->
<!--            </tr>-->
<!--                --><?php //}?>
<!--            </tbody>-->
<!--            </table>-->
<!---->
<!---->
<!--                    </div>-->
<!---->
<!---->
<!--                </div></div>-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--</div>-->
<!---->
<!---->
<!---->
<!--</div>-->
<!--</div>-->


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