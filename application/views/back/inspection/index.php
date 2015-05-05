<div class="mainpanel">

    <div class="headerbar">

      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
   <!-- header-right -->

</div><!-- headerbar -->

<div class="pageheader">
  <h2><i class="fa fa-table"></i>Inspections Details<span></span></h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/inspection">Inspections</a></li>
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
      <h5 class="subtitle mb5">List of Inspection Details</h5>
          
          <div class="table-responsive">
          <table class="table table-hidaction table-hover mb30">
            <thead>
              <tr>
                <th>Inspectors ID</th>
                <th>Inspectors First Name</th>
                <th>Inspectors Last Name</th>
                <th>Last Check</th>
                <th>Next Check</th>
                <th>Time Inserted</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($query as $inspectors){ ?>
                         
              <tr>
                <td><?php echo $inspectors['inspector_id'];?></td>
                <td><?php echo $inspectors['inspector_fname'];?></td>
                <td><?php echo $inspectors['inspector_lname'];?></td>
                <td><?php echo $inspectors['last_check'];?></td>
                <td><?php echo $inspectors['next_check'];?></td>
                <td><?php echo $inspectors['timestamp'];?></td>
                <td class="table-action-hide">
                  <?php echo "<a href='".site_url('inspection/edit/'.$inspectors['inspection_detailsid'])."'><i class='fa fa-pencil'></i></a>";?>&nbsp;
                  <!-- <a href="#" class="delete-row"><i class="fa fa-trash-o"></i></a> -->
                  <?php echo "<a href='".site_url('inspection/delete/'.$inspectors['inspection_detailsid'])."'class='delete-row'><i class='fa fa-trash-o'></i></a>";?>&nbsp;

                </td> 
              </tr>
           <?php }?>
            </tbody>
          </table>
          </div><!-- table-responsive -->
        
    </div>
    
  </div><!-- mainpanel -->
  
  

