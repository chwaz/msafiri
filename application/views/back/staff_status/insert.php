<div class="mainpanel">

    <div class="headerbar">

      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
   <!-- header-right -->

</div><!-- headerbar -->

<div class="pageheader">
  <h2><i class="fa fa-table"></i>Staff Status</span></h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/staff_status">Staff Status</a></li>
      <li class="active">Add Staff Status</li>
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
      <?php echo form_open('staff_status/insert_status_info', array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data')); ?>
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  <a href="#" class="panel-close">&times;</a>
                  <a href="#" class="minimize">&minus;</a>
                </div>
                <h4 class="panel-title">Staff Status Details</h4>
                <p>Please, Insert the details here below...</p>
              </div>
              <div class="panel-body panel-body-nopadding">

                <!--staff Status-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Staff Status</label>
                  <div class="col-sm-8">
                    <select class="form-control mb15" id="staffstatus" name="staffstatus">
                      <option value="" disabled selected>Select Staff Status</option>
                      <option value="Active">Active</option>
                      <option value="Inactive">Inactive</option>
                      <option value="Hired">Hired</option>
                      <option value="Unwell">Unwell</option>
                      <option value="On-leave">On-leave</option>
                    </select>
                    <!-- <input type="text"  class="form-control" /> -->
                  </div>
                  <?php echo form_error('staffstatus');?>
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