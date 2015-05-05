<div class="mainpanel">

    <div class="headerbar">

      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
   <!-- header-right -->

</div><!-- headerbar -->

<div class="pageheader">
  <h2><i class="fa fa-table"></i>PSV License log</span></h2>
  <div class="breadcrumb-wrapper">  
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/psv">PSV</a></li>
      <li class="active">Update PSV license log slot</li>
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
      <?php echo form_open('psv/update_psv_info/'.$r->psv_detailsid, array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data')); ?>
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  <a href="#" class="panel-close">&times;</a>
                  <a href="#" class="minimize">&minus;</a>
                </div>
                <h4 class="panel-title">PSV Log</h4>
                <p>Please, Insert the details here below...</p>
              </div>
              <div class="panel-body panel-body-nopadding">
                  <!--County Name-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Date of Acquisition</label>
                  <div class="col-sm-8">
                    <input type="text" id="date_ofacquisition" name="date_ofacquisition" class="form-control" value="<?php echo $r->date_ofacquisition; ?>" />
                  </div>
                  <?php echo form_error('date_ofacquisition');?>
                </div>
                <!--Next Renewal Date-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Next Renewal</label>
                  <div class="col-sm-8">
                    <input type="text" id="nextrenewaldate" name="next_renewal" class="form-control" value="<?php echo $r->next_renewal; ?>"/>
                  </div>
                  <?php echo form_error('next_renewal');?>
                </div>
                <!--Previous Renewal Date-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Previous Renewal</label>
                  <div class="col-sm-8">
                    <input type="text" id="lastrenewaldate" name="last_renewal" class="form-control" value="<?php echo $r->last_renewal; ?>"/>
                  </div>
                  <?php echo form_error('last_renewal');?>
                </div>
                   <!--Bus Registration-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Bus Registration</label>
                  <div class="col-sm-8">
                    <select class="form-control mb15" name="bus_reg_psv" placeholder="Bus Registration">
                        <option value="" disabled selected>Select Bus Registration</option>
                      <?php foreach($query4 as $row){ 

                         echo '<option value="'.$row->bus_reg.'">'.$row->bus_reg.'</option>';
                      }
                      ?>
                    </select>
                </div>
                  <?php echo form_error('bus_reg_psv');?>
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