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
      <?php echo form_open_multipart('owners/do_upload', array('class' => 'form-horizontal')); ?>
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  <a href="#" class="panel-close">&times;</a>
                  <a href="#" class="minimize">&minus;</a>
                </div>
                <h4 class="panel-title">Owner's File Uploads</h4>
                <p>Please, Insert the details here below...</p>
              </div>
              <div class="panel-body panel-body-nopadding">
              
               <!--Receipt Copy-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Receipt Copy:</label>
                  <div class="col-sm-8">
                    <input type="file" name="receipt_copy" class="form-control" />
                  </div>
                  <?php echo form_error('receipt_copy');?>
                </div>
                <!--Log book Copy-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Log Book Copy:</label>
                  <div class="col-sm-8">
                    <input type="file" name="logbook_copy" class="form-control" />
                  </div>
                  <?php echo form_error('logbook_copy');?>
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