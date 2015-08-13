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
         <link href="<?php echo base_url(); ?>css/login.css" rel="stylesheet">
    </head>

    <body>
        <div id="background">
            <div id="container-fluid">
                <div id="formBody">
                    <div id="formHeader">
                        <h3>Registration Form</h3>
                    </div>
                    <div id="loginForm">
                        
                        <?php echo validation_errors(); ?>                      
                        <?php echo form_open("login/create_member"); ?>
                        <div class="row">
                            <div class="col-lg-6">
                              <div class="form-group">
                            <label for="email">First Name:</label>
                            <?php
                            $firstNameData = array(
                                'id' => 'email',
                                'name' => 'first_name', //you are missing this attribute
                                'value' => set_value('first_name'),
                                'required' => 'required',
                                'placeholder' => 'First Name',
                                'class' => 'form-control',
                            );
                            ?>
                            <?php echo form_input($firstNameData); ?>
<!--<input type="text" name="username" class="form-control" id="email" placeholder="Your Name">-->
                        </div>  
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                            <label for="email">Last Name:</label>
                            <?php
                            $LastNameData = array(
                                'id' => 'email',
                                'name' => 'last_name', //you are missing this attribute
                                'value' => set_value('last_name'),
                                'required' => 'required',
                                'placeholder' => 'Last Name',
                                'class' => 'form-control',
                            );
                            ?>
                            <?php echo form_input($LastNameData); ?>
<!--<input type="text" name="username" class="form-control" id="email" placeholder="Your Name">-->
                        </div>
                            </div>
                            
                        </div> 
                        
                        
                        <div class="row">
                            
                            <div class="col-lg-6">
                                <div class="form-group">
                            <label for="email">Email:</label>
                            <?php
                            $EmailNameData = array(
                                'id' => 'email',
                                'name' => 'email', //you are missing this attribute
                                'value' => set_value('email'),
                                'required' => 'required',
                                'placeholder' => 'Email',
                                'class' => 'form-control',
                            );
                            ?>
                            <?php echo form_input($EmailNameData); ?>
<!--<input type="text" name="username" class="form-control" id="email" placeholder="Your Name">-->
                        </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                            <label for="email">Username:</label>
                            <?php
                            $UserNameData = array(
                                'id' => 'email',
                                'name' => 'username', //you are missing this attribute
                                'value' => set_value('username'),
                                'required' => 'required',
                                'placeholder' => 'Username',
                                'class' => 'form-control',
                            );
                            ?>
                            <?php echo form_input($UserNameData); ?>
<!--<input type="text" name="username" class="form-control" id="email" placeholder="Your Name">-->
                        </div>
                            </div>
                            
                        </div>
                        
                        
                        <div class="row">
                            <div class="col-lg-6">
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
                            </div>
                            
                            <div class="col-lg-6">
                                 <div class="form-group">
                            <label for="pwd">Confirm Password:</label>
                            <?php
                            $password2Data = array(
                                'id' => 'pwd',
                                'name' => 'password2', //you are missing this attribute
                                'value' => set_value('password2'),
                                'required' => 'required',
                                'placeholder' => 'Confirm Password',
                                'class' => 'form-control',
                            );
                            ?>
                            <?php echo form_password($password2Data); ?>
<!--  <input type="password" name="password" class="form-control" id="pwd" placeholder="Your Password">-->
                        </div>
                            </div>
                        </div>
                   
                        <!-- <button type="submit" class="btn btn-default">Submit</button>-->
                        <div class="row">
                            <div class="col-lg-6">
                                <?php
                        $data = array(
                            'name' => 'button',
                            'id' => 'button',
                            'value' => 'true',
                            'type' => 'submit',
                            'content' => 'Create Account',
                            'class' => 'btn btn-default'
                        );

                        echo form_button($data);
                        ?>
                            </div>
                            
                        </div>
                        
                       
                    </div>
                    
                </div>
            </div>
        </div>


    </body>

    
</html>