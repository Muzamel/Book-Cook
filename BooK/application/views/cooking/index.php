<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

    <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css" type="text/css">
         
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?> css/animate.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>css/creative_cook.css" type="text/css">
          
        
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
                    <h1><?php echo $this->FirstName; ?></h1>
                </div>

                
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <?php if($this->session->userdata('name')){ ?>
                        <li>
                            <a class="page-scroll" href="#about">About</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/login/logout">Log Out</a>
                        </li>
                        <?php  } else { ?>
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
                <div class="header-content-inner">
                    <h1>Welcome to your kitchen </h1>

                    <a href="#about" class="btn btn-primary btn-xl page-scroll">Get Started</a> </div>
            </div>
        </header>


        <section class="bg-primary" id="about">
            <div class="container">
                <div class="col-lg-10">
                    <div class="row col-lg-offset-2 text-center">
                        <h2 class="section-heading">Cook with my interest..!</h2>
                        <hr class="light">

                        <a href="<?php echo base_url(); ?>index.php/cooking_controller/customize" class="btn btn-default btn-xl">Customize the recipe </a>

                        <a href="<?php echo base_url(); ?>index.php/cooking_controller/cook_as_u_want" class="btn btn-default btn-xl">Cook as you want</a>
                    </div>
                </div>
            </div>
            
            
            
        </section>

        

    </body>
    <script src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.fittext.js"></script>
    <script src="<?php echo base_url(); ?>js/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>js/creative.js"></script>
    
    
    
    

</html>
