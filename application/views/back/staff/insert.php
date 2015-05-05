<div class="mainpanel">

    <div class="headerbar">

      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
   <!-- header-right -->

</div><!-- headerbar -->

<div class="pageheader">
  <h2><i class="fa fa-table"></i>Staff<span></span></h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/staff">staff</a></li>
      <li class="active">Add New staff</li>
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
      <!--staff Details form-->
      <!--<form id="form2" class="form-horizontal form-bordered">-->
      <?php echo form_open('staff/insert_staff_info', array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data')); ?>
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  <a href="#" class="panel-close">&times;</a>
                  <a href="#" class="minimize">&minus;</a>
                </div>
                <h4 class="panel-title">staff's Details</h4>
                <p>Please, Insert the details here below...</p>
              </div>
              <div class="panel-body panel-body-nopadding">
              
                <!--Identification Number-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Identification Number</label>
                  <div class="col-sm-8">
                    <input type="text" name="idno" class="form-control" />
                  </div>
                  <?php echo form_error('idno');?>
                </div>
                 <!--First Name-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">First Name</label>
                  <div class="col-sm-8">
                    <input type="text" name="first_name" class="form-control" />
                  </div>
                  <?php echo form_error('first_name');?>
                </div>
                <!--Last Name-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Last Name</label>
                  <div class="col-sm-8">
                    <input type="text" name="last_name" class="form-control" />
                  </div>
                  <?php echo form_error('last_name');?>
                </div>
                <!--Middle Name-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Middle Name</label>
                  <div class="col-sm-8">
                    <input type="text" name="middle_name" class="form-control" />
                  </div>
                  <?php echo form_error('middle_name');?>
                </div>
                <!--Phone Number-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Phone Number</label>
                  <div class="col-sm-8">
                    <input type="text" name="phoneno" class="form-control" />
                  </div>
                  <?php echo form_error('phoneno');?>
                </div>
                 <!--Place of Residence-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Place of Residence</label>
                  <div class="col-sm-8">
                    <input type="text" name="place_ofresidence" class="form-control" />
                  </div>
                  <?php echo form_error('place_ofresidence');?>
                </div>
                    <!--Address-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Address</label>
                  <div class="col-sm-8">
                    <input type="text" name="address" class="form-control" />
                  </div>
                   <?php echo form_error('address');?>
                </div>
                 <!--Email-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Email</label>
                  <div class="col-sm-8">
                    <input type="text" name="email" class="form-control" />
                  </div>
                  <?php echo form_error('email');?>
                </div>
                 <!--KRA Pin-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">KRA Pin</label>
                  <div class="col-sm-8">
                    <input type="text" name="kra_pino" class="form-control" />
                  </div>
                  <?php echo form_error('kra_pino');?>
                </div>
                 <!--Health Insurance No-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Health Insurance No</label>
                  <div class="col-sm-8">
                    <input type="text" name="health_insuranceno" class="form-control" />
                  </div>
                  <?php echo form_error('health_insuranceno');?>
                </div>
                 <!--Kin`s First Name-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Kin's First Name</label>
                  <div class="col-sm-8">
                    <input type="text" name="kin_firstname" class="form-control" />
                  </div>
                  <?php echo form_error('kin_firstname');?>
                </div>
                <!--Kin`s Last Name-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Kin's Last Name</label>
                  <div class="col-sm-8">
                    <input type="text" name="kin_lastname" class="form-control" />
                  </div>
                  <?php echo form_error('kin_lastname');?>
                </div>
                <!--Kin`s Middle Name-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Kin's Middle Name</label>
                  <div class="col-sm-8">
                    <input type="text" name="kin_middlename" class="form-control" />
                  </div>
                  <?php echo form_error('kin_middlename');?>
                </div>
                 <!--Kin`s Type of Relation-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Kin`s Type of Relation</label>
                  <div class="col-sm-8">
                    <!--<input type="text" name="first_name" class="form-control" />-->
                    <select class="form-control mb15" id="kin_typeofrelation" name="kin_typeofrelation">
                      <option value="Mother">Mother</option>
                      <option value="Father">Father</option>
                      <option value="Wife">Wife</option>
                      <option value="Husband">Husband</option>
                      <option value="Sister">Sister</option>
                      <option value="Brother">Brother</option>
                      <option value="Cousin">Cousin</option>
                      <option value="Nephew">Nephew</option>
                      <option value="Niece">Niece</option>
                      <option value="Aunt">Aunt</option>
                      <option value="Uncle">Uncle</option>
                    </select>
                  </div>
                </div>
                 <!--Kin`s Identification Number-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Kin`s Identification Number</label>
                  <div class="col-sm-8">
                    <input type="text" name="kin_idno" class="form-control" />
                  </div>
                  <?php echo form_error('kin_idno');?>
                </div>
                 <!--Kin`s Phone Number-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Kin`s Phone Number</label>
                  <div class="col-sm-8">
                    <input type="text" name="kin_phoneno" class="form-control" />
                  </div>
                  <?php echo form_error('kin_phoneno');?>
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