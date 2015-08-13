<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Glassy Login V2.0 By roundCube</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
    </head>

    <body>
        <div id="background">
            <div id="container-fluid">
                <div id="formBody">
                    <div id="formHeader">
                        <h3>Member Login</h3>
                    </div>
                    <div id="loginForm">
                        <!--<form role="form" method="post" action="<?= base_url(); ?>index.php/login/login_authen">-->
                       <?php  echo form_open("login/validate_credentials");?>
                            <div class="form-group">
                                <label for="email">Username:</label>
                                <?php
                                $usernameData = array(
                                    'id' => 'email',
                                    'name' => 'username', //you are missing this attribute
                                    'value' => set_value('username'),
                                    'required' => 'required',
                                    'placeholder' => 'UserName',
                                    'class' => 'form-control',
                                );
                                ?>
<?php echo form_input($usernameData); ?>
<!--<input type="text" name="username" class="form-control" id="email" placeholder="Your Name">-->
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                 <?php
                                $passwordData = array(
                                    'id' => 'pwd',
                                    'name' => 'password', //you are missing this attribute
                                    'value' => set_value('password'),
                                    'required' => 'required',
                                    'placeholder' => 'Your Password',
                                    'class' => 'form-control',
                                );
                                ?>
<?php echo form_password($passwordData); ?>
 <!--  <input type="password" name="password" class="form-control" id="pwd" placeholder="Your Password">-->
                            </div>
                            <div class="checkbox">
                                <label><input type="checkbox"> Remember me</label>
                            </div>
                            <!--<button type="submit" class="btn btn-default">Submit</button>-->
                           
                      <?php 
                      $buttonData = array(
                          'name'=>'submit',
                          'value'=>'Login',
                          'class'=>'btn btn-default',
                      );
                      echo form_submit($buttonData); ?>
                       <?php 
                       $signUPdata = array('class'=>'btn btn-default');
                       echo anchor("login/signup", "Create Account",$signUPdata);?>
                    </div>
                    <div id="copyrights"><a href="https://www.facebook.com/roundCubeInc?fref=ts"><p>&#169; Code-Fusion(IMRAAN)</a></p></div>
                </div>
            </div>
        </div>


    </body>

    <style>
        #background{
            position:absolute;
            top:0px;
            left:0px;
            width:100%;
            height:100%;
            background-image:url(http://i.imgur.com/AMV5J4Z.png);
            background-size:100% 100%;

        }


        #formBody{
            position:absolute;
            top:25%;
            width:35%;
            left:32.5%;
            height:320px;
            background-color:rgba(0,0,0,0.15);
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#66000000,endColorstr=#66000000);

        }

        #formHeader{
            position:absolute;
            top:0px;
            height:60px;
            left:20%;
            width:60%;
            background-color:rgba(0,0,0,0.4);
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#95000000,endColorstr=#95000000);
            border-bottom-left-radius:12px;
            border-bottom-right-radius:12px;
            text-align:center;
            color:white;
        }

        #loginForm{
            position:absolute;
            left:10%;
            width:80%;
            bottom:5px;
            height:70%;
            color:white;


        }


        .btn-default{
            background-color:rgb(240,42,57);
            border-color:rgb(240,42,57);
            border-radius:0px;
            border-left-width:15px;
            border-right-width:15px;
            color:white;
            box-shadow:2px 2px 0 #25282e;

        }
        .btn-default:hover{
            background-color:rgb(188,14,27);
            border-color:rgb(188,14,27);
            color:white;

        }

        #copyrights{
            position:absolute;
            bottom:-25px;
            height:25px;
            left:30%;
            width:40%;
            background-color:black;
            opacity:0.5;
            color:white;
            text-align:center;
            border-bottom-left-radius:7px;
            border-bottom-right-radius:7px;
        }

        #copyrights a{
            text-decoration:none;
            color:white;

        }

        input#email {
            background-image: url(http://4.bp.blogspot.com/-JszBx4hHU4s/VazRpZeav9I/AAAAAAAABYQ/CzfYuNngyI8/s1600/user.png);
            background-repeat: no-repeat;
            background-position:2% 50%;
            text-indent: 32px;
            background-color:white;
            background-color:rgba(255,255,255,0.1);
            background-size:25px 80%;
            -webkit-transition:all 0.5s ease;
            -moz-transition:all 0.5s ease 0s;
            font-weight:bold;
            border-style:none;
        }

        input#email:active,input#email:focus{
            background-color:white;
            font-weight:normal;
            background-image:none;
        }

        input#pwd {
            background-image: url(http://4.bp.blogspot.com/-ZJ_Jq8DLLmw/VazStr4y9lI/AAAAAAAABYc/oCwlOV7N4WA/s1600/lock.png);
            background-repeat: no-repeat;
            background-position:-3% 25%;
            text-indent: 32px;
            background-color:white;
            background-color:rgba(255,255,255,0.1);
            background-size:60px 110%;
            -webkit-transition:all 0.5s ease;
            -moz-transition:all 0.5s ease 0s;
            font-weight:bold;
            border-style:none;
        }

        input#pwd:active,input#pwd:focus{
            background-color:white;
            font-weight:normal;
            background-image:none;
        }

        @media only screen and (max-width:875px)
        {
            #formBody{
                width:40%;
                left:30%;
            }

        }

        @media only screen and (max-width:832px)
        {
            #formBody{
                width:45%;
                left:27.5%;
            }

        }

        @media only screen and (max-width:639px)
        {
            #formBody{
                width:50%;
                left:25%;
            }

        }

        @media only screen and (max-width:539px)
        {
            #formBody{
                width:70%;
                left:15%;
            }

        }

        @media only screen and (max-width:412px)
        {
            #formBody{
                width:90%;
                left:5%;
            }

        }



    </style>

</html>