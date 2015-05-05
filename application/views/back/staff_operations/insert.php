<div class="mainpanel">

    <div class="headerbar">

      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
   <!-- header-right -->

</div><!-- headerbar -->

<div class="pageheader">
  <h2><i class="fa fa-table"></i>Staff Operation Status log</span></h2>
  <div class="breadcrumb-wrapper">  
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/staff_operations">Staff Operation Status</a></li>
      <li class="active">Add Staff Operation Status log</li>
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
      <?php echo form_open('staff_operations/insert_staff_operations_info', array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data')); ?>
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  <a href="#" class="panel-close">&times;</a>
                  <a href="#" class="minimize">&minus;</a>
                </div>
                <h4 class="panel-title">Staff Position Log</h4>
                <p>Please, Insert the details here below...</p>
              </div>
              <div class="panel-body panel-body-nopadding">
                <!--Builder info-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Staff Personnel</label>
                  <div class="col-sm-8">
                    <select class="form-control mb15" name="idno2" placeholder="Staff Personnel">
                        <option value="" disabled selected>Select Staff Personnel</option>
                      <?php foreach($query2 as $row){ 

                         echo '<option value="'.$row->idno.'">'.$row->last_name.'</option>';
                      }
                      ?>
                    </select>
                </div>
                  <?php echo form_error('idno2');?>
                </div>
                <!--Builder info-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Staff Position</label>
                  <div class="col-sm-8">
                    <select class="form-control mb15" name="staff_positionid3" placeholder="Staff Position">
                        <option value="" disabled selected>Select Staff Position</option>
                      <?php foreach($query1 as $row){ 

                         echo '<option value="'.$row->staff_positionid.'">'.$row->position_title.'</option>';
                      }
                      ?>
                    </select>
                </div>
                  <?php echo form_error('staff_positionid3');?>
                </div>
                <!--Builder info-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Staff Operational Status</label>
                  <div class="col-sm-8">
                    <select class="form-control mb15" name="staff_statusid3" placeholder="Staff Operational Status">
                        <option value="" disabled selected>Select Staff Operational Status</option>
                      <?php foreach($query3 as $row){ 

                         echo '<option value="'.$row->staff_statusid.'">'.$row->staffstatus.'</option>';
                      }
                      ?>
                    </select>
                </div>
                  <?php echo form_error('staff_statusid3');?>
                </div>
                <!--Builder info-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Bus Assigned</label>
                  <div class="col-sm-8">
                    <select class="form-control mb15" name="bus_reg_staff" placeholder="Bus Assigned">
                        <option value="" disabled selected>Select Bus Assigned</option>
                      <?php foreach($query4 as $row){ 

                         echo '<option value="'.$row->bus_reg.'">'.$row->bus_reg.'</option>';
                      }
                      ?>
                    </select>
                </div>
                  <?php echo form_error('bus_reg_staff');?>
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