<div class="mainpanel">

    <div class="headerbar">

      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
   <!-- header-right -->

</div><!-- headerbar -->

<div class="pageheader">
  <h2><i class="fa fa-table"></i>Insurance Log</span></h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/insurance">Insurance</a></li>
      <li class="active">Update Insurance log</li>
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
      <?php echo form_open('insurance/update_insurance_info/'.$r->insurance_detailsid, array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data')); ?>
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  <a href="#" class="panel-close">&times;</a>
                  <a href="#" class="minimize">&minus;</a>
                </div>
                <h4 class="panel-title">Insurance Details</h4>
                <p>Please, Insert the details here below...</p>
              </div>
              <div class="panel-body panel-body-nopadding">
               
                <!--Insurance Company Name-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Insurance Company Name</label>
                  <div class="col-sm-8">
                    <input type="text" name="insurance_name" class="form-control" value="<?php echo $r->insurance_name;?>"/>
                  </div>
                  <?php echo form_error('insurance_name');?>
                </div>
                <!--Insurance Contact-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Insurance Contact</label>
                  <div class="col-sm-8">
                    <input type="text" name="insurance_phoneno" class="form-control" value="<?php echo $r->insurance_phoneno;?>"/>
                  </div>
                  <?php echo form_error('insurance_phoneno');?>
                </div>
                 <!--Insurance Company Email-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Insurance Company Email</label>
                  <div class="col-sm-8">
                    <input type="text" name="insurance_email" class="form-control" value="<?php echo $r->insurance_email;?>"/>
                  </div>
                  <?php echo form_error('insurance_email');?>
                </div>Insurance Website
                <!--Insurance Website-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Insurance Website</label>
                  <div class="col-sm-8">
                    <input type="text" name="insurance_website" class="form-control" value="<?php echo $r->insurance_website;?>"/>
                  </div>
                  <?php echo form_error('insurance_website');?>
                </div>
                 <!--Insurance Physical Location-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Insurance Physical Location</label>
                  <div class="col-sm-8">
                    <textarea name="insurance_location" class="form-control"><?php echo $r->insurance_location;?></textarea>
                  </div>
                  <?php echo form_error('insurance_location');?>
                </div>
                 <!--Insurance Physical Address-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Insurance Physical Address</label>
                  <div class="col-sm-8">
                    <textarea name="insurance_address" class="form-control"><?php echo $r->insurance_address;?></textarea>
                  </div>
                  <?php echo form_error('insurance_website');?>
                </div>
                 <!--Previous Renewal Date-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Previous Renewal</label>
                  <div class="col-sm-8">
                    <input type="text" id="lastrenewaldate" name="last_renewal" class="form-control" value="<?php echo $r->last_renewal;?>"/>
                  </div>
                  <?php echo form_error('last_renewal');?>
                </div>
                 <!--Previous Renewal Date-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Next Renewal</label>
                  <div class="col-sm-8">
                    <input type="text" id="nextrenewaldate" name="next_renewal" class="form-control" value="<?php echo $r->next_renewal;?>"/>
                  </div>
                  <?php echo form_error('next_renewal');?>
                </div>
                  <!--Bus Registration-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Bus Registration</label>
                  <div class="col-sm-8">
                    <select class="form-control mb15" name="bus_reg_in" placeholder="Bus Registration">
                        <option value="" disabled selected>Select Bus Registration</option>
                      <?php foreach($query4 as $row){ 

                         echo '<option value="'.$row->bus_reg.'">'.$row->bus_reg.'</option>';
                      }
                      ?>
                    </select>
                </div>
                  <?php echo form_error('bus_reg_in');?>
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