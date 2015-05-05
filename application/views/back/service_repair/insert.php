<div class="mainpanel">

    <div class="headerbar">

      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
   <!-- header-right -->

</div><!-- headerbar -->

<div class="pageheader">
  <h2><i class="fa fa-table"></i>Service & Repair log</span></h2>
  <div class="breadcrumb-wrapper">  
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/service_repair">service_repair</a></li>
      <li class="active">Add Service & Repair log slot</li>
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
      <?php echo form_open('service_repair/insert_service_repair_info', array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data')); ?>
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  <a href="#" class="panel-close">&times;</a>
                  <a href="#" class="minimize">&minus;</a>
                </div>
                <h4 class="panel-title">Service & Repair Log</h4>
                <p>Please, Insert the details here below...</p>
              </div>
              <div class="panel-body panel-body-nopadding">
                <!--Bus Registration-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Bus Registration</label>
                  <div class="col-sm-8">
                    <select class="form-control mb15" name="bus_reg_sr" placeholder="Bus Registration">
                        <option value="" disabled selected>Select Bus Registration</option>
                      <?php foreach($busreg as $row){ 

                         echo '<option value="'.$row->bus_reg.'">'.$row->bus_reg.'</option>';
                      }
                      ?>
                    </select>
                </div>
                  <?php echo form_error('bus_reg_sr');?>
                </div>
                 <!--Nature-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Nature</label>
                  <div class="col-sm-8">
                      <select class="form-control mb15" name="nature" placeholder="Nature">
                        <option value="" disabled selected>Select Nature of Repair</option>
                        <option value="Engine">Engine</option>
                        <option value="Body">Body</option>
                        <option value="Interior">Interior</option>
                        <option value="Suspension">Suspension</option>
                        <option value="Upgrade">Upgrade</option>
                      </select>
                  </div>
                  <?php echo form_error('nature');?>
                </div>
                 <!--Description-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Description</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" name="description" ></textarea>
                  </div>
                  <?php echo form_error('description');?>
                </div>
                 <!--Total Cost-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Total Cost</label>
                  <div class="col-sm-8">
                    <input class="form-control" name="total_cost" />
                  </div>
                  <?php echo form_error('total_cost');?>
                </div>
                 <!--Date of Previous Maintenance check-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Previous Service Check</label>
                  <div class="col-sm-8">
                    <input class="form-control" id="previouscheckdate" name="date_of_previous" />
                  </div>
                  <?php echo form_error('date_of_previous');?>
                </div>
                 <!--Date of Next Maintenance check-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Next Service Check</label>
                  <div class="col-sm-8">
                    <input class="form-control" id="nextcheckdate" name="date_of_next" />
                  </div>
                  <?php echo form_error('date_of_next');?>
                </div>
                  <!--Garage Name-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Garage Name</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" name="garage_name" ></textarea>
                  </div>
                  <?php echo form_error('garage_name');?>
                </div>
                  <!--Garage Location-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Garage Location</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" name="garage_location" ></textarea>
                  </div>
                  <?php echo form_error('garage_location');?>
                </div>
                  <!--Garage Contact-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Garage Contact</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" name="garage_contact" ></textarea>
                  </div>
                  <?php echo form_error('garage_contact');?>
                </div>
                  <!--Garage Address-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Garage Address</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" name="garage_address" ></textarea>
                  </div>
                  <?php echo form_error('garage_address');?>
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