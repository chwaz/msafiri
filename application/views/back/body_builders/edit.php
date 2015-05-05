<div class="mainpanel">

    <div class="headerbar">

      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
   <!-- header-right -->

</div><!-- headerbar -->

<div class="pageheader">
  <h2><i class="fa fa-table"></i>Update Body Builder Entry</span></h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/body_builders">Body Builders</a></li>
      <li class="active">Edit Body Builder</li>
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
      <?php echo form_open('body_builders/update_builder_info/'.$r->body_builderid, array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data')); ?>
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  <a href="#" class="panel-close">&times;</a>
                  <a href="#" class="minimize">&minus;</a>
                </div>
                <h4 class="panel-title">Bus Body Builder Details</h4>
                <p>Please, Insert the details here below...</p>
              </div>
              <div class="panel-body panel-body-nopadding">
               
                <!--Name of Company-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Company Name</label>
                  <div class="col-sm-8">
                    <input type="text" name="company_name" class="form-control" value="<?php echo $r->company_name;?>"/>
                  </div>
                  <?php echo form_error('company_name');?>
                </div>
                <!--Abbreviations-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Abbreviations</label>
                  <div class="col-sm-8">
                    <input type="text" name="abbreviations" class="form-control" value="<?php echo $r->abbreviations;?>"/>
                  </div>
                  <?php echo form_error('abbreviations');?>
                </div>
                <!--Category Type-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Category Type</label>
                  <div class="col-sm-8">
                    <select class="form-control mb15" id="category_type" name="category_type">
                      <option value="" disabled selected>Select your option</option>
                      <option value="fabricator">Fabricator</option>
                      <option value="builder">Builder</option>
                    </select>
                    <!-- <input type="text"  class="form-control" /> -->
                  </div>
                  <?php echo form_error('category_type');?>
                </div>
                <span id="optionstore" style="display:none;"></span>               
                <!--Address-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Address</label>
                  <div class="col-sm-8">
                    <textarea name="address" class="form-control" ><?php echo $r->address;?></textarea>
                    <?php echo form_error('address');?>
                  </div>
                </div>
                <!--Location-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Physical Location</label>
                  <div class="col-sm-8">
                    <textarea name="physical_location" class="form-control" ><?php echo $r->physical_location;?></textarea>
                    <?php echo form_error('physical_location');?>
                  </div>
                </div>
                 <!--Email-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Email</label>
                  <div class="col-sm-8">
                    <input type="text" name="email" class="form-control" value="<?php echo $r->email;?>" />
                  </div>
                  <?php echo form_error('email');?>
                </div>
                <!--Phone number-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Phone Number</label>
                  <div class="col-sm-8">
                    <input type="text" name="phoneno" class="form-control" value="<?php echo $r->phoneno;?>"/>
                  </div>
                  <?php echo form_error('phoneno');?>
                </div>               
                <!--Website-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Website</label>
                  <div class="col-sm-8">
                    <input type="text" name="website" class="form-control" value="<?php echo $r->website;?>"/>
                  </div>
                  <?php echo form_error('website');?>
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