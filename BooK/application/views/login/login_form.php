<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Member  Login </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
         <link rel="stylesheet" href="<?php echo base_url(); ?>css/login.css" type="text/css">
    </head>

    <body>
        <div id="background">
            <div id="container-fluid">
                <div id="formBody">
                    <div id="formHeader">
                        <h3>Member Login</h3>
                    </div>
                   
                    
                    
                    <div id="loginForm">
                        
                        <?php if($this->session->flashdata('warning')){
                            echo $this->session->flashdata('warning');
                        } ?>
                        
                         <?php if($this->session->flashdata('loginSuccess'))
                        echo $this->session->flashdata('loginSuccess');
                        ?>
                        <!--<form role="form" method="post" action="<?= base_url(); ?>index.php/login/login_authen">-->
                        <?php echo validation_errors(); ?>                      
                        <?php echo form_open("login/validate_credentials"); ?>

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
                        
                      
                        <!-- <button type="submit" class="btn btn-default">Submit</button>-->

                        <?php
                        $data = array(
                            'name' => 'button',
                            'id' => 'button',
                            'value' => 'true',
                            'type' => 'submit',
                            'content' => 'Login',
                            'class' => 'btn btn-default'
                        );

                        echo form_button($data);
                        ?>
                        <?php
                        $signUPdata = array('class' => 'btn btn-default', 'id' => 'account');
                        echo anchor("login/signup", "Create Account", $signUPdata);
                        ?>
                    </div>
                    <div id="copyrights">&#169; Book&Cook</p></div>
                </div>
            </div>
        </div>


    </body>

</html>