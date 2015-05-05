<div class="mainpanel">

    <div class="headerbar">

      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
   <!-- header-right -->

</div><!-- headerbar -->

<div class="pageheader">
  <h2><i class="fa fa-table"></i>Speed Governor log</span></h2>
  <div class="breadcrumb-wrapper">  
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/speedgov">Speed Governor</a></li>
      <li class="active">Update Speed Governor log</li>
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
      <?php echo form_open('speedgov/update_speedgov_info/'.$r->speedgov_detailsid, array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data')); ?>
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  <a href="#" class="panel-close">&times;</a>
                  <a href="#" class="minimize">&minus;</a>
                </div>
                <h4 class="panel-title">Speed Governor Log</h4>
                <p>Please, Insert the details here below...</p>
              </div>
              <div class="panel-body panel-body-nopadding">
                 <!--Company Name-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Company Name</label>
                  <div class="col-sm-8">
                    <input class="form-control" name="company_name" value="<?php echo $r->company_name;?>"/>
                  </div>
                  <?php echo form_error('company_name');?>
                </div>
                 <!--Company Address-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Company Address</label>
                  <div class="col-sm-8">
                    <input class="form-control" name="company_address" value="<?php echo $r->company_address;?>"/>
                  </div>
                  <?php echo form_error('company_address');?>
                </div>
                 <!--Company Email-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Company Email</label>
                  <div class="col-sm-8">
                    <input class="form-control" name="company_email" value="<?php echo $r->company_email;?>" />
                  </div>
                  <?php echo form_error('company_email');?>
                </div>
                 <!--Company Phone Number-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Company Phone Number</label>
                  <div class="col-sm-8">
                    <input class="form-control" name="company_phoneno" value="<?php echo $r->company_phoneno;?>"/>
                  </div>
                  <?php echo form_error('company_phoneno');?>
                </div>
                 <!--Company Website-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Company Website</label>
                  <div class="col-sm-8">
                    <input class="form-control" name="company_website" value="<?php echo $r->company_website;?>"/>
                  </div>
                  <?php echo form_error('company_website');?>
                </div>
                <!--Fitted By-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Fitted by Whom</label>
                  <div class="col-sm-8">
                    <input class="form-control" name="fitted_by" value="<?php echo $r->fitted_by;?>"/>
                  </div>
                  <?php echo form_error('fitted_by');?>
                </div>
                <!--Date Fittedk-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Date Fitted</label>
                  <div class="col-sm-8">
                    <input class="form-control" id="datefitted" name="date_fitted" value="<?php echo $r->date_fitted;?>" />
                  </div>
                  <?php echo form_error('date_fitted');?>
                </div>
                  <!--Bus Registration-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Bus Registration</label>
                  <div class="col-sm-8">
                    <select class="form-control mb15" name="bus_reg_sg" placeholder="Bus Registration">
                        <option value="" disabled selected>Select Bus Registration</option>
                      <?php foreach($query4 as $row){ 

                         echo '<option value="'.$row->bus_reg.'">'.$row->bus_reg.'</option>';
                      }
                      ?>
                    </select>
                </div>
                  <?php echo form_error('bus_reg_sg');?>
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