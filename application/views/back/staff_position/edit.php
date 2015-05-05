<div class="mainpanel">

    <div class="headerbar">

      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
   <!-- header-right -->

</div><!-- headerbar -->

<div class="pageheader">
  <h2><i class="fa fa-table"></i>Staff Position log</span></h2>
  <div class="breadcrumb-wrapper">  
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/staff_position">Staff Position</a></li>
      <li class="active">Update Staff Position log</li>
  </ol>
</div>
</div>

<div class="contentpanel">

  <div class="panel panel-default">
    <div class="panel-heading">
      <div class="panel-btns">
        <a href="#" class="panel-close">&times;</a>
        <a href="#" class="minimize">&minus;</a>
    </div><!-- panel-btns -->
</div>
 <div class="panel-body panel-body-nopadding">
        
   
      <!-- content goes here... -->
      <!--Owners Details form-->
      <!--<form id="form2" class="form-horizontal form-bordered">-->
      <?php echo form_open('staff_position/update_staff_position_info/'.$r->staff_positionid, array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data')); ?>
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  <a href="#" class="panel-close">&times;</a>
                  <a href="#" class="minimize">&minus;</a>
                </div>
                <h4 class="panel-title">Staff Position Log</h4>
                <p>Please, Insert the details here below...</p>
              </div>
              <div class="panel-body panel-body-nopadding">
                 <!--Position Title-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Position Title</label>
                  <div class="col-sm-8">
                    <input class="form-control" name="position_title" value="<?php echo $r->position_title;?>"/>
                  </div>
                  <?php echo form_error('position_title');?>
                </div>
                 <!--Position Description-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Position Description</label>
                  <div class="col-sm-8">
                    <input class="form-control" name="position_description" value="<?php echo $r->position_description;?>"/>
                  </div>
                  <?php echo form_error('position_description');?>
                </div>
                 <!--Position Salary Class-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Position Salary Class</label>
                  <div class="col-sm-8">
                    <input class="form-control" name="position_salaryclass" value="<?php echo $r->position_salaryclass;?>"/>
                  </div>
                  <?php echo form_error('position_salaryclass');?>
                </div>
                
               </div><!-- panel-body -->
              <div class="panel-footer">
                <button class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-default">Reset</button>
              </div><!-- panel-footer -->
            </div><!-- panel-default -->
          <?php form_close();?>
    </div>
    
  </div><!-- mainpanel -->