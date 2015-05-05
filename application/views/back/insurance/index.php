<div class="mainpanel">

    <div class="headerbar">

      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
   <!-- header-right -->

</div><!-- headerbar -->

<div class="pageheader">
  <h2><i class="fa fa-table"></i>Insurance Log<span></span></h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/insurance">Insurance</a></li>
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
      <h5 class="subtitle mb5">List of Insurance Details</h5>
          
          <div class="table-responsive">
          <table class="table table-hidaction table-hover mb30">
            <thead>
              <tr>
                <th>Insurer Name</th>
                <th>Insurer Phone Number</th>
                <th>Insurer Email</th>
                <th>Insurer Website</th>
                <th>Insurer Location</th>
                <th>Insurer Address</th>
                <th>Last Renewal</th>
                <th>Next Renewal</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($query as $insurer){ ?>
                         
              <tr>
                <td><?php echo $insurer['insurance_name'];?></td>
                <td><?php echo $insurer['insurance_phoneno'];?></td>
                <td><?php echo $insurer['insurance_email'];?></td>
                <td><?php echo $insurer['insurance_website'];?></td>
                <td><?php echo $insurer['insurance_location'];?></td>
                <td><?php echo $insurer['insurance_address'];?></td>
                <td><?php echo $insurer['last_renewal'];?></td>
                <td><?php echo $insurer['next_renewal'];?></td>
                <td class="table-action-hide">
                  <?php echo "<a href='".site_url('insurance/edit/'.$insurer['insurance_detailsid'])."'><i class='fa fa-pencil'></i></a>";?>&nbsp;
                  <!-- <a href="#" class="delete-row"><i class="fa fa-trash-o"></i></a> -->
                  <?php echo "<a href='".site_url('insurance/delete/'.$insurer['insurance_detailsid'])."'class='delete-row'><i class='fa fa-trash-o'></i></a>";?>&nbsp;

                </td> 
              </tr>
           <?php }?>
            </tbody>
          </table>
          </div><!-- table-responsive -->
        
    </div>
    
  </div><!-- mainpanel -->
  
  

