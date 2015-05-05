<div class="mainpanel">

    <div class="headerbar">

      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
   <!-- header-right -->

</div><!-- headerbar -->

<div class="pageheader">
  <h2><i class="fa fa-table"></i>TLB Details log</span></h2>
  <div class="breadcrumb-wrapper">  
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/tlb">TLB Details</a></li>
      <li class="active">Add TLB Details log</li>
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
      <?php echo form_open('tlb/insert_tlb_info', array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data')); ?>
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  <a href="#" class="panel-close">&times;</a>
                  <a href="#" class="minimize">&minus;</a>
                </div>
                <h4 class="panel-title">TLB Details Log</h4>
                <p>Please, Insert the details here below...</p>
              </div>
              <div class="panel-body panel-body-nopadding">
                <!--Builder info-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Route Name</label>
                  <div class="col-sm-8">
                    <select class="form-control mb15" name="route_name" placeholder="Body Builder/Fabricator">
                        <option value="" disabled selected>Select Route Name</option>
                      <?php foreach($route as $row){ 

                         echo '<option value="'.$row->route_detailsid.'">'.$row->route_name.'</option>';
                      }
                      ?>
                    </select>
                </div>
                  <?php echo form_error('route_name');?>
                </div>
                 <!--Position Description-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Last Renewal</label>
                  <div class="col-sm-8">
                    <input class="form-control" id="lastrenewaldate" name="last_renewal" />
                  </div>
                  <?php echo form_error('last_renewal');?>
                </div>
                 <!--Last Renewal-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Next Renewal</label>
                  <div class="col-sm-8">
                    <input class="form-control" id="nextrenewaldate" name="next_renewal" />
                  </div>
                  <?php echo form_error('next_renewal');?>
                </div>
                  <!--Bus Registration-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Bus Registration</label>
                  <div class="col-sm-8">
                    <select class="form-control mb15" name="bus_reg_tlb" placeholder="Bus Registration">
                        <option value="" disabled selected>Select Bus Registration</option>
                      <?php foreach($query4 as $row){ 

                         echo '<option value="'.$row->bus_reg.'">'.$row->bus_reg.'</option>';
                      }
                      ?>
                    </select>
                </div>
                  <?php echo form_error('bus_reg_tlb');?>
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