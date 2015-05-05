<div class="mainpanel">

    <div class="headerbar">

      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
   <!-- header-right -->

</div><!-- headerbar -->

<div class="pageheader">
  <h2><i class="fa fa-table"></i>March Worksheet<span></span></h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/march_worksheet">March Worksheet</a></li>
      <li class="active">Add March Worksheet Entry</li>
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
      <?php echo form_open('march_worksheet/insert_march_worksheet_info', array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data')); ?>
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  <a href="#" class="panel-close">&times;</a>
                  <a href="#" class="minimize">&minus;</a>
                </div>
                <h4 class="panel-title">Owner's Details</h4>
                <p>Please, Insert the details here below...</p>
              </div>
              <div class="panel-body panel-body-nopadding">
              
                <!--Identification Number-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Number of Trips</label>
                  <div class="col-sm-8">
                    <input type="text" name="no_oftrips" class="form-control" />
                  </div>
                  <?php echo form_error('no_oftrips');?>
                </div>
                 <!--First Name-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Total Collected Amount</label>
                  <div class="col-sm-8">
                    <input type="text" name="amount" class="form-control" />
                  </div>
                  <?php echo form_error('amount');?>
                </div>
                <!--Last Name-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Total Fuel in liters</label>
                  <div class="col-sm-8">
                    <input type="text" name="fuel_liters" class="form-control" />
                  </div>
                  <?php echo form_error('fuel_liters');?>
                </div>
                <!--Middle Name-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Total Fuel Cost</label>
                  <div class="col-sm-8">
                    <input type="text" name="fuel_cost" class="form-control" />
                  </div>
                  <?php echo form_error('fuel_cost');?>
                </div>
                 <!--UserName-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Total Car Wash Cost</label>
                  <div class="col-sm-8">
                    <input type="text" name="car_wash" class="form-control" />
                  </div>
                  <?php echo form_error('car_wash');?>
                </div>
                    <!--Owner Address-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Miscelleanous Cost</label>
                  <div class="col-sm-8">
                    <input type="text" name="miscelleanous" class="form-control" />
                    <?php echo form_error('miscelleanous');?>
                  </div>
                </div>
                <!--Owner Email-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Number of Kms</label>
                  <div class="col-sm-8">
                    <input type="text" name="no_ofkms" class="form-control" />
                  </div>
                  <?php echo form_error('no_ofkms');?>
                </div>
                  <!--Bus Registration-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Bus Registration</label>
                  <div class="col-sm-8">
                    <select class="form-control mb15" name="bus_reg_mar" placeholder="Bus Registration">
                        <option value="" disabled selected>Select Bus Registration</option>
                      <?php foreach($busreg as $row){ 

                         echo '<option value="'.$row->bus_reg.'">'.$row->bus_reg.'</option>';
                      }
                      ?>
                    </select>
                </div>
                  <?php echo form_error('bus_reg_mar');?>
                </div>
                  <!--Bus Registration-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Staff Operation ID</label>
                  <div class="col-sm-8">
                    <select class="form-control mb15" name="staff_operationid_mar" placeholder="Bus Registration">
                        <option value="" disabled selected>Select Staff Operation ID</option>
                      <?php foreach($staffops as $row){ 

                         echo '<option value="'.$row->staff_operationsid.'">'.$row->staff_operationsid.'</option>';
                      }
                      ?>
                    </select>
                </div>
                  <?php echo form_error('staff_operationid_mar');?>
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