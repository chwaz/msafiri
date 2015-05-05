<div class="mainpanel">

    <div class="headerbar">

      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
   <!-- header-right -->

</div><!-- headerbar -->

<div class="pageheader">
  b  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/service_repair">Service&Repair</a></li>
      <li class="active">Home</li>
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
      <!--buss Details form-->
      <!--<form id="form2" class="form-horizontal form-bordered">-->
      <h5 class="subtitle mb5">List of Service&Repair Log</h5>
          
          <div class="table-responsive">
          <table class="table table-hidaction table-hover mb30">
            <thead>
              <tr>
                <th>Bus Registration</th>
                <th>Nature</th>
                <th>Description</th>
                <th>Total Cost</th>
                <th>Previous Check Date</th>
                <th>Next Check Date</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($query as $service_repair){ ?>
                         
              <tr>
                <td><?php echo $service_repair['bus_reg_sr'];?></td>
                <td><?php echo $service_repair['nature'];?></td>
                <td><?php echo $service_repair['description'];?></td>
                <td><?php echo $service_repair['total_cost'];?></td>
                <td><?php echo $service_repair['date_of_previous'];?></td>
                <td><?php echo $service_repair['date_of_next'];?></td>
                <td class="table-action-hide">
                  <?php echo "<a href='".site_url('service_repair/edit/'.$service_repair['service_repairid'])."'><i class='fa fa-pencil'></i></a>";?>&nbsp;
                  <!-- <a href="#" class="delete-row"><i class="fa fa-trash-o"></i></a> -->
                  <?php echo "<a href='".site_url('service_repair/delete/'.$service_repair['service_repairid'])."'class='delete-row'><i class='fa fa-trash-o'></i></a>";?>&nbsp;

                </td> 
              </tr>
           <?php }?>
            </tbody>
          </table>
          </div><!-- table-responsive -->
        
    </div>
    
  </div><!-- mainpanel -->
  
  

