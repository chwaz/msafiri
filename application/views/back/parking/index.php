<div class="mainpanel">

    <div class="headerbar">

      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
   <!-- header-right -->

</div><!-- headerbar -->

<div class="pageheader">
  b  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/parking">Parking</a></li>
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
      <h5 class="subtitle mb5">List of Parking License Log</h5>
          
          <div class="table-responsive">
          <table class="table table-hidaction table-hover mb30">
            <thead>
              <tr>
                <th>County Name</th>
                <th>Last Renewal</th>
                <th>Next Renewal</th>
                <th>Timestamp</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($query as $parking){ ?>
                         
              <tr>
                <td><?php echo $parking['county_name'];?></td>
                <td><?php echo $parking['last_renewal'];?></td>
                <td><?php echo $parking['next_renewal'];?></td>
                <td><?php echo $parking['timestamp'];?></td>
                <td class="table-action-hide">
                  <?php echo "<a href='".site_url('parking/edit/'.$parking['parking_detailsid'])."'><i class='fa fa-pencil'></i></a>";?>&nbsp;
                  <!-- <a href="#" class="delete-row"><i class="fa fa-trash-o"></i></a> -->
                  <?php echo "<a href='".site_url('parking/delete/'.$parking['parking_detailsid'])."'class='delete-row'><i class='fa fa-trash-o'></i></a>";?>&nbsp;

                </td> 
              </tr>
           <?php }?>
            </tbody>
          </table>
          </div><!-- table-responsive -->
        
    </div>
    
  </div><!-- mainpanel -->
  
  

