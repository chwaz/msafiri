
  
  <div class="mainpanel">
    
    <div class="headerbar">
      
      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
         
      <div class="header-right">
        <ul class="headermenu">
          
          <li>
            
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <!-- <img src="<?php echo base_url();?>components/backend/images/photos/loggeduser.png" alt="" /> -->
                Administrator
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                <li><a href="profile.html"><i class="glyphicon glyphicon-user"></i> My Profile</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Account Settings</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> Help</a></li>
                <li><a href="<?php echo base_url();?>index.php/dashboard/logout"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
              </ul>
            </div>
          </li>
          <li>
            <button id="chatview" class="btn btn-default tp-icon chat-icon">
                <i class="glyphicon glyphicon-comment"></i>
            </button>
          </li>
        </ul>
      </div><!-- header-right -->
      
    </div><!-- headerbar -->
    
    <div class="pageheader">
      <h2><i class="fa fa-home"></i> Dashboard <span>Subtitle goes here...</span></h2>
      <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
          <li><a href="index.html">Admin</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </div>
    </div>
    
    <div class="contentpanel">
      
      <div class="row">
        
        <div class="col-sm-6 col-md-3">
          <div class="panel panel-success panel-stat">
            <div class="panel-heading">
              
              <div class="stat">
                <div class="row">
                  <div class="col-xs-4">
                    <img src="<?php echo base_url();?>components/backend/images/is-document.png" alt="" />
                  </div>
                  <div class="col-xs-8">
                    <small class="stat-label"><a class="btn btn-black" href="<?php echo base_url(); ?>index.php/owners" >Owners Log</a></small>
                    <h1></h1>
                  </div>
                </div><!-- row -->
                
                <div class="mb15"></div>
                
                <div class="row">
                  <div class="col-xs-6">
                    <small class="stat-label"></small>
                  </div>
                  
                  <div class="col-xs-6">
                    <small class="stat-label"></small>
                    <!-- s -->
                  </div>
                </div><!-- row -->
              </div><!-- stat -->
              
            </div><!-- panel-heading -->
          </div><!-- panel -->
        </div><!-- col-sm-6 -->
        
        <div class="col-sm-6 col-md-3">
          <div class="panel panel-danger panel-stat">
            <div class="panel-heading">
              
              <div class="stat">
                <div class="row">
                  <div class="col-xs-4">
                  <img src="<?php echo base_url();?>components/backend/images/is-document.png" alt=""/>
                  </div>
                  <div class="col-xs-8">
                    <small class="stat-label"><a class="btn btn-black" href="<?php echo base_url(); ?>index.php/staff" >Staff Log</a></small>
                    <h1><?php //echo $tenders; ?></h1>
                  </div>
                </div><!-- row -->
                
                <div class="mb15"></div>
                
                <small class="stat-label">List of staff on board</small>
                <h4></h4>
                  
              </div><!-- stat -->
              
            </div><!-- panel-heading -->
          </div><!-- panel -->
        </div><!-- col-sm-6 -->
        
        <div class="col-sm-6 col-md-3">
          <div class="panel panel-primary panel-stat">
            <div class="panel-heading">
              
              <div class="stat">
                <div class="row">
                  <div class="col-xs-4">
                    <img src="<?php echo base_url();?>components/backend/images/is-document.png" alt="" />
                  </div>
                  <div class="col-xs-8">
                    <small class="stat-label"><a class="btn btn-black" href="<?php echo base_url(); ?>index.php/owners" >Bus list Log</a></small>
                    <h1><?php //echo $projects ?></h1>
                  </div>
                </div><!-- row -->
                
                <div class="mb15"></div>
                
                <small class="stat-label"></small>
                <h4></h4>
                  
              </div><!-- stat -->
              
            </div><!-- panel-heading -->
          </div><!-- panel -->
        </div><!-- col-sm-6 -->
        
        <div class="col-sm-6 col-md-3">
          <div class="panel panel-dark panel-stat">
            <div class="panel-heading">
              
              <div class="stat">
                <div class="row">
                  <div class="col-xs-4">
                    <img src="<?php echo base_url();?>components/backend/images/is-money.png" alt="" />
                  </div>
                  <div class="col-xs-8">
                    <small class="stat-label"><a class="btn btn-white" href="<?php echo base_url(); ?>index.php/body_builders" >Body Builders <br>Log</a></small>
                    <h1><?php //echo $events ?></h1>
                  </div>
                </div><!-- row -->
                
                <div class="mb15"></div>
                
                <div class="row">
                  <div class="col-xs-6">
                    <small class="stat-label"></small>
                    <h4></h4>
                  </div>
                  
                  <div class="col-xs-6">
                    <small class="stat-label"></small>
                    <h4></h4>
                  </div>
                </div><!-- row -->
                  
              </div><!-- stat -->
              
            </div><!-- panel-heading -->
          </div><!-- panel -->
        </div><!-- col-sm-6 -->
      </div><!-- row -->
      
     
      
    </div><!-- contentpanel -->
    
  </div><!-- mainpanel -->
  
  
  
  
