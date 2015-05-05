<div class="mainpanel">

    <div class="headerbar">

      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
   <!-- header-right -->

</div><!-- headerbar -->

<div class="pageheader">
  <h2><i class="fa fa-table"></i>Insert Inspection Details</span></h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/inspection">Inspection</a></li>
      <li class="active">Add Inspectior</li>
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
      <?php echo form_open('inspection/insert_inspection_info', array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data')); ?>
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  <a href="#" class="panel-close">&times;</a>
                  <a href="#" class="minimize">&minus;</a>
                </div>
                <h4 class="panel-title">Inspection Details</h4>
                <p>Please, Insert the details here below...</p>
              </div>
              <div class="panel-body panel-body-nopadding">
               
                <!--Inspection Identification-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Inspection Identification</label>
                  <div class="col-sm-8">
                    <input type="text" name="inspector_id" class="form-control" />
                  </div>
                  <?php echo form_error('inspector_id');?>
                </div>
                <!--Inspector`s First Name-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Inspector`s First Name</label>
                  <div class="col-sm-8">
                    <input type="text" name="inspector_fname" class="form-control" />
                  </div>
                  <?php echo form_error('inspector_fname');?>
                </div>
                 <!--Inspector`s Last Name-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Inspector`s Last Name</label>
                  <div class="col-sm-8">
                    <input type="text" name="inspector_lname" class="form-control" />
                  </div>
                  <?php echo form_error('inspector_lname');?>
                </div>
                 <!--Previous Expiry Date-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Previous Expiry Date</label>
                  <div class="col-sm-8">
                    <input type="text" id="lastexpirydate" name="last_check" class="form-control" />
                  </div>
                  <?php echo form_error('last_check');?>
                </div>
                 <!--Previous Expiry Date-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Next Expiry Date</label>
                  <div class="col-sm-8">
                    <input type="text" id="nextexpirydate" name="next_check" class="form-control" />
                  </div>
                  <?php echo form_error('next_check');?>
                </div>
                 <!--Bus Registration-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Bus Registration</label>
                  <div class="col-sm-8">
                    <select class="form-control mb15" name="bus_reg_is" placeholder="Bus Registration">
                        <option value="" disabled selected>Select Bus Registration</option>
                      <?php foreach($query4 as $row){ 

                         echo '<option value="'.$row->bus_reg.'">'.$row->bus_reg.'</option>';
                      }
                      ?>
                    </select>
                </div>
                  <?php echo form_error('bus_reg_is');?>
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