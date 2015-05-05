<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">

  <title>Msafara Management Logistical System Portal</title>

  <link href="<?php echo base_url();?>components/backend/css/style.default.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="signin">

<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>
  
    <div class="signinpanel">
        
        <div class="row">
            
            <div class="col-md-7">
                
                <div class="signin-info">
                    <div class="logopanel">
                        <h1><span>MMS Admin</span>  <span></span></h1>
                    </div><!-- logopanel -->
                
                    <div class="mb20"></div>
                
                    <h5><strong></strong></h5>
                    <ul>
                        <li><img src="" alt="" height="" width=""></li>
                    </ul>
                    <div class="mb20"></div>
                    <!-- <strong>Not a member? <a href="">Sign Up</a></strong> -->
                </div><!-- signin0-info -->
            
            </div><!-- col-sm-7 -->
            
            <div class="col-md-5">
                
                <form method="post" action="<?php echo base_url();?>index.php/login/login_process">
                   <?php echo validation_errors(); ?>
                    <h4 class="nomargin">Sign In</h4>
                    <p class="mt5 mb20">Login to access your account.</p>
                    <?php
                    // if($this->session->flashdata('msg')){
                    // echo "<div class='alert alert-error'>".$this->session->flashdata('msg')."</div>";
                    // }?>
                    <input type="text" class="form-control uname" name="username" placeholder="Username" required />
                    <input type="password" class="form-control pword" name="password" placeholder="Password" required/>
                    <a href="#"><small>Forgot Your Password?</small></a>
                    <input type="submit" class="btn btn-success btn-block" value="Login "/>
                    
                </form>
            </div><!-- col-sm-5 -->
            
        </div><!-- row -->
        
        <div class="signup-footer">
            <div class="pull-left">
                &copy; 2015. All Rights Reserved. Msafara Management Company (Sacco) 
            </div>
            <div class="pull-right">
                Powered By: <a href="" target="_blank">JNjenga 2015</a>
            </div>
        </div>
        
    </div><!-- signin -->
  
</section>


<script src="<?php echo base_url();?>components/backend/js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url();?>components/backend/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo base_url();?>components/backend/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>components/backend/js/modernizr.min.js"></script>
<script src="<?php echo base_url();?>components/backend/js/retina.min.js"></script>

<script src="<?php echo base_url();?>components/backend/js/custom.js"></script>

</body>

</html>
