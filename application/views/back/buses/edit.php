<div class="mainpanel">

    <div class="headerbar">

      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
   <!-- header-right -->

</div><!-- headerbar -->

<div class="pageheader">
  <h2><i class="fa fa-table"></i>Add New Buses></span></h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/buses">Owners</a></li>
      <li class="active">Add New Buses</li>
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
      <?php echo form_open('buses/update_bus_info', array('class' => 'form-horizontal', 'enctype' => 'multipart/form-data')); ?>
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-btns">
                  <a href="#" class="panel-close">&times;</a>
                  <a href="#" class="minimize">&minus;</a>
                </div>
                <h4 class="panel-title">Bus Details</h4>
                <p>Please, Insert the details here below...</p>
              </div>
              <div class="panel-body panel-body-nopadding">
               
                <!--Bus registration-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Bus Registration</label>
                  <div class="col-sm-8">
                    <input type="text" name="bus_reg" class="form-control" value="<?php echo $r->bus_reg;?>"/>
                  </div>
                  <?php echo form_error('bus_reg');?>
                </div>
                <!--IDno-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Identification/Passport No</label>
                  <div class="col-sm-8">
                    <select class="form-control mb15" name="idno" placeholder="Identification/Passport No" value="<?php echo $r->idno;?>">
                        <option value="" disabled selected>Select Owner</option>
                      <?php foreach($idnos as $row){ 

                         echo '<option value="'.$row->idno.'">'.$row->username.'</option>';
                      }
                      ?>
                    </select>
                </div>
                  <?php echo form_error('idno');?>
                </div>
                 <!--Bus Make-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Bus Make</label>
                  <div class="col-sm-8">
                    <select class="form-control mb15" id="bus_make" name="bus_make" value="<?php echo $r->bus_make;?>">
                      <option value="" disabled selected>Select your option</option>
                      <option class="level-0" value="Isuzu">Isuzu</option>
                      <option class="level-0" value="Nissan Diesel">Nissan Diesel</option>
                      <option class="level-0" value="Mitsubishi">Mitsubishi</option>
                      <option class="level-0" value="Hino">Hino</option>
                    </select>
                    <!-- <input type="text"  class="form-control" /> -->
                  </div>
                  <?php echo form_error('bus_make');?>
                </div>
                <span id="optionstore" style="display:none;"></span>
                <!--Bus Model-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Bus Model</label>
                  <div class="col-sm-8">
                    <select class="form-control mb15" id="bus_model" name="bus_model" value="<?php echo $r->bus_model;?>">
                      <option value="" disabled selected>Select your option</option>
                      <option class="sub-Isuzu" value="NKR">NKR</option>
                      <option class="sub-Isuzu" value="NPR">NPR</option>
                      <option class="sub-Isuzu" value="NQR">NQR</option>
                      <option class="sub-Isuzu" value="NQR-MAX">NQR-MAX</option>
                      <option class="sub-Isuzu" value="FRR">FRR</option>
                      <option class="sub-Nissan Diesel" value="NU41">NU41</option>
                      <option class="sub-Nissan Diesel" value="MKB210">MKB210</option>
                      <option class="sub-Mitsubishi" value="Canter">Canter</option>
                      <option class="sub-Mitsubishi" value="FH-215">FH-215</option>
                      <option class="sub-Hino" value="300">300</option>
                      <option class="sub-Hino" value="500">500</option>                       
                    </select>
                    <!-- <input type="text" name="bus_model" class="form-control" /> -->
                  </div>
                  <?php echo form_error('bus_model');?>
                </div>
                 <span id="optionstore" style="display:none;"></span>
                <!--Middle Name-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Number of Seats</label>
                  <div class="col-sm-8">
                    <select class="form-control mb15" id="" name="no_of_seats" value="<?php echo $r->no_of_seats;?>">
                      <option value="" disabled selected>Select your option</option>
                      <option class="level-0" value="29">29 Seater</option>
                      <option class="level-0" value="33">33 Seater</option>
                      <option class="level-0" value="37">37 Seater</option>
                      <option class="level-0" value="51">51 Seater</option>
                    </select>
                    <!-- <input type="text" name="no_of_seats" class="form-control" /> -->
                  </div>
                  <?php echo form_error('no_of_seats');?>
                </div>                
                <!--Owner Address-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Bus Chasis Number:</label>
                  <div class="col-sm-8">
                    <input type="text" name="bus_chasisno" class="form-control" value="<?php echo $r->bus_chasisno;?>"/>
                    <?php echo form_error('bus_chasisno');?>
                  </div>
                </div>
                <!--Owner Email-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Bus Engine Number:</label>
                  <div class="col-sm-8">
                    <input type="text" name="bus_engineno" class="form-control" value="<?php echo $r->bus_engineno;?>"/>
                  </div>
                  <?php echo form_error('bus_engineno');?>
                </div>
                <!--Owner Phone Number-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Year of Manufacture</label>
                  <div class="col-sm-8">
                    <input type="text" name="year_of_manufacture" id="yearpicker" class="form-control" value="<?php echo $r->year_of_manufacture;?>"/>
                  </div>
                  <?php echo form_error('year_of_manufacture');?>
                </div>
                <!--Owner place of Residence-->
                <div class="form-group">
                  <label class="col-sm-4 control-label">Date of Purchase</label>
                  <div class="col-sm-8">
                    <input type="text" name="date_of_purchase" id="datepicker" class="form-control" value="<?php echo $r->date_of_purchase;?>"/>
                  </div>
                  <?php echo form_error('date_of_purchase');?>
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