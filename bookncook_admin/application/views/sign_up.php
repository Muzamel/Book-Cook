<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title> Bootstrap Admin Sign Up</title>

    <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" type="text/css" media="all">
<!--    <link href="assets/css/bootstrap.css" rel="stylesheet">-->
    <!--external css-->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" type="text/css" media="all">
<!--    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />-->

    <!-- Custom styles for this template -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" media="all">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style-responsive.css" type="text/css" media="all">
<!--    <link href="assets/css/style.css" rel="stylesheet">-->
<!--    <link href="assets/css/style-responsive.css" rel="stylesheet">-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url(); ?>https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="<?php echo base_url(); ?>https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">

		      <form class="form-login" action="admin_panel.html">
		        <h2 class="form-login-heading">sign up now</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" placeholder="First Name" autofocus>
		            <br>
					<input type="text" class="form-control" placeholder="Last Name" autofocus>
		            <br>
					<input type="text" class="form-control" placeholder="User Name" autofocus>
		            <br>
					<input type="text" class="form-control" placeholder="Email Address" autofocus>
		            <br>

		            <input type="password" class="form-control" placeholder="Password">
					<br>

					<input type="password" class="form-control" placeholder="Confirm Password">
		            <label class="checkbox">

		            </label>
		            <button class="btn btn-theme btn-block" href="admin_panel" type="submit"><i class="fa fa-lock"></i> SIGN UP</button>
		            <hr>




		        </div>



		      </form>

	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
      <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
      <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

<!--    <script src="assets/js/jquery.js"></script>-->
<!--    <script src="assets/js/bootstrap.min.js"></script>-->

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
      <script src="<?php echo base_url(); ?>assets/js/jquery.backstretch.min.js"></script>

<!--    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>-->
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
