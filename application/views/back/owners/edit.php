<div class="mainpanel">

    <div class="headerbar">

      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
   <!-- header-right -->

</div><!-- headerbar -->

<div class="pageheader">
  <h2><i class="fa fa-table"></i>Add New Owner<span></span></h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/owners">Owners</a></li>
      <li class="active">Add New Owner</li>
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
      <?php echo form_open('owners/update_owner_info', array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data')); ?>
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
                  <label class="col-sm-4 control-label">Identification Number</label>
                  <div class="col-sm-8">
                    <input type="text" name="idno" class="form-control" value="<?php echo $r->idno;?>" />
                  </div>
                  <?php echo form_error('idno');?>
                </div>
                 <!--First Name-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">First Name</label>
                  <div class="col-sm-8">
                    <input type="text" name="first_name" class="form-control" value="<?php echo $r->first_name;?>"/>
                  </div>
                  <?php echo form_error('first_name');?>
                </div>
                <!--Last Name-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Last Name</label>
                  <div class="col-sm-8">
                    <input type="text" name="last_name" class="form-control" value="<?php echo $r->last_name;?>"/>
                  </div>
                  <?php echo form_error('last_name');?>
                </div>
                <!--Middle Name-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Middle Name</label>
                  <div class="col-sm-8">
                    <input type="text" name="middle_name" class="form-control" value="<?php echo $r->middle_name;?>"/>
                  </div>
                  <?php echo form_error('middle_name');?>
                </div>
                 <!--UserName-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Username</label>
                  <div class="col-sm-8">
                    <input type="text" name="username" class="form-control" value="<?php echo $r->username;?>"/>
                  </div>
                  <?php echo form_error('username');?>
                </div>
                <!--Type of Ownership-->
                 <div class="form-group">
                  <label class="col-sm-4 control-label">Type of Ownership:</label>
                  <div class="col-sm-8">
                    <!--<input type="text" name="first_name" class="form-control" />-->
                    <select class="form-control mb15" id="ownertype" name="ownertype" placeholder="Type of Ownership" value="<?php echo $r->ownertype;?>">
                      <option placeholder="Type of Ownership"></option>
                      <option value="individual">Individual</option>
                      <option value="joint">Joint Ownership</option>
                      <option value="co-operatives">Co-operative societies</option>
                    </select>
                    </div>
                    </div> 
                    <!--Owner Address-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Address:</label>
                  <div class="col-sm-8">
                    <input type="text" name="owner_address" class="form-control" value="<?php echo $r->owner_address;?>"/>
                    <?php echo form_error('owner_address');?>
                  </div>
                </div>
                <!--Owner Email-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Email</label>
                  <div class="col-sm-8">
                    <input type="text" name="owner_email" class="form-control" value="<?php echo $r->owner_email;?>"/>
                  </div>
                  <?php echo form_error('owner_email');?>
                </div>
                <!--Owner Phone Number-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Phone Number</label>
                  <div class="col-sm-8">
                    <input type="text" name="owner_phoneno" class="form-control" value="<?php echo $r->owner_phoneno;?>"/>
                  </div>
                  <?php echo form_error('owner_phoneno');?>
                </div>
                <!--Owner place of Residence-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Place of Residence</label>
                  <div class="col-sm-8">
                    <input type="text" name="place_ofresidence" class="form-control" value="<?php echo $r->place_ofresidence;?>"/>
                  </div>
                  <?php echo form_error('place_ofresidence');?>
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