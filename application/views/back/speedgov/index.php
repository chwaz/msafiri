<div class="mainpanel">

    <div class="headerbar">

      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
   <!-- header-right -->

</div><!-- headerbar -->

<div class="pageheader">
  b  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/speedgov">Speed Governor</a></li>
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
      <h5 class="subtitle mb5">List of Speed Governor Log</h5>
          
          <div class="table-responsive">
          <table class="table table-hidaction table-hover mb30">
            <thead>
              <tr>
                <th>Company Name</th>
                <th>Company Address</th>
                <th>Company Email</th>
                <th>Company Phone Number</th>
                <th>Company Website</th>
                <th>Fitted By</th>
                <th>Date Fitted</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($query as $speedgov){ ?>
                         
              <tr>
                <td><?php echo $speedgov['company_name'];?></td>
                <td><?php echo $speedgov['company_address'];?></td>
                <td><?php echo $speedgov['company_email'];?></td>
                <td><?php echo $speedgov['company_phone'];?></td>
                <td><a target="_blank" href="<?php echo $speedgov['company_website'];?>"><?php echo $speedgov['company_website'];?></a></td>
                <td><?php echo $speedgov['fitted_by'];?></td>
                <td><?php echo $speedgov['date_fitted']; ?></td>
                <td class="table-action-hide">
                  <?php echo "<a href='".site_url('speedgov/edit/'.$speedgov['speedgov_detailsid'])."'><i class='fa fa-pencil'></i></a>";?>&nbsp;
                  <!-- <a href="#" class="delete-row"><i class="fa fa-trash-o"></i></a> -->
                  <?php echo "<a href='".site_url('speedgov/delete/'.$speedgov['speedgov_detailsid'])."'class='delete-row'><i class='fa fa-trash-o'></i></a>";?>&nbsp;

                </td> 
              </tr>
           <?php }?>
            </tbody>
          </table>
          </div><!-- table-responsive -->
        
    </div>
    
  </div><!-- mainpanel -->
  
  

