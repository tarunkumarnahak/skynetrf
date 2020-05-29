<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Metrica - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A premium admin dashboard template by Mannatthemes" name="description" />
        <meta content="Mannatthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- App css -->
        <link href="<?php echo base_url(); ?>assets\dashboard\css\bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets\dashboard\css\icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets\dashboard\css\metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets\dashboard\css\style.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="account-body accountbg">

        <!-- Log In page -->
        <div class="row vh-100 ">
            <div class="col-12 align-self-center">
                <div class="auth-page">
                    <div class="card auth-card shadow-lg">
                        <div class="card-body">
                            <div class="px-3">
                          
                                <div class="auth-logo-box">
                                <a href="<?php echo base_url(); ?>index.php" class="logo logo-admin"><img src="<?php echo base_url(); ?>assets\dashboard\images\logo.png" height="55" alt="logo" class="auth-logo"></a>
                                </div><!--end auth-logo-box-->
                                
                                <div class="text-center auth-logo-text">
                                    <h4 class="mt-0 mb-3 mt-5">Let's Get Started </h4>
                                    <p class="text-muted mb-0">Sign in to continue to Skynet RF Online</p>  
                                </div> <!--end auth-logo-text-->  

                                
                                <form class="form-horizontal auth-form my-4" action="<?php echo base_url(); ?>index.php/login/checkinguser">
        
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <div class="input-group mb-3">
                                            <span class="auth-form-icon">
                                                <i class="dripicons-user"></i> 
                                            </span>                                                                                                              
                                            <input type="text" class="form-control" id="username" placeholder="Enter username">
                                        </div>                                    
                                    </div><!--end form-group--> 
        
                                    <div class="form-group">
                                        <label for="userpassword">Password</label>                                            
                                        <div class="input-group mb-3"> 
                                            <span class="auth-form-icon">
                                                <i class="dripicons-lock"></i> 
                                            </span>                                                       
                                            <input type="password" class="form-control" id="userpassword" placeholder="Enter password">
                                        </div>                               
                                    </div><!--end form-group--> 
        
                                    <div class="form-group row mt-4">
                                        <div class="col-sm-6">
                                            <div class="custom-control custom-switch switch-success">
                                                <input type="checkbox" class="custom-control-input" id="customSwitchSuccess">
                                                <label class="custom-control-label text-muted" for="customSwitchSuccess">Remember me</label>
                                            </div>
                                        </div><!--end col--> 
                                        <div class="col-sm-6 text-right">
                                            <a href="#" class="text-muted font-13"><i class="dripicons-lock"></i> Forgot password?</a>                                    
                                        </div><!--end col--> 
                                    </div><!--end form-group--> 
        
                                    <div class="form-group mb-0 row">
                                        <div class="col-12 mt-2">
                                            <button id="send" type="Save Now!"class="btn btn-primary btn-round btn-block waves-effect waves-light" type="submit">Log In <i class="fas fa-sign-in-alt ml-1"></i></button>
                                        </div><!--end col--> 
                                    </div> <!--end form-group-->                           
                                </form><!--end form-->
                            </div><!--end /div-->
                            
                            
                        </div><!--end card-body-->
                    </div><!--end card-->
                   <!--end account-social-->
                </div><!--end auth-page-->
            </div><!--end col-->           
        </div><!--end row-->

        <!-- End Log In page -->
    

        <!-- jQuery  -->
        <script src="<?php echo base_url(); ?>assets\dashboard\js\jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\js\bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\js\metisMenu.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\js\waves.min.js"></script>
        <script src="<?php echo base_url(); ?>assets\dashboard\js\jquery.slimscroll.min.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url(); ?>assets\dashboard\js\app.js"></script>

    </body>
</html>