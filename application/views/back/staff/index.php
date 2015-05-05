<div class="mainpanel">

    <div class="headerbar">

      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
   <!-- header-right -->

</div><!-- headerbar -->

<div class="pageheader">
  <h2><i class="fa fa-table"></i>Staff<span></span></h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/staff">Staff</a></li>
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
      <!--staffs Details form-->
      <!--<form id="form2" class="form-horizontal form-bordered">-->
      <h5 class="subtitle mb5">List of Staff Members</h5>
          
          <div class="table-responsive">
          <table class="table table-hidaction table-hover mb30">
            <thead>
              <tr>
                <th>Identification Number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Middle Name</th>
                <th>Phone Number</th>
                <th>Place of Residence</th>
                <th>Address</th>
                <th>Email</th>
                <th>KRA Pin</th>
                <th>Health Insurance Number</th>
                <!-- <th>Date Registered</th> -->
              </tr>
            </thead>
            <tbody>
              <?php foreach($query as $staff){ ?>
                         
              <tr>
                <td><?php echo $staff['idno'];?></td>
                <td><?php echo $staff['first_name'];?></td>
                <td><?php echo $staff['last_name'];?></td>
                <td><?php echo $staff['middle_name'];?></td>
                <td><?php echo $staff['phoneno'];?></td>
                <td><?php echo $staff['place_ofresidence'];?></td>
                <td><?php echo $staff['address'];?></td>
                <td><?php echo $staff['email'];?></td>
                <td><?php echo $staff['kra_pinno'];?></td>
                <td><?php echo $staff['health_insuranceno'];?></td>
                <!-- <td><?php //echo $staff['date_registered'];?></td> -->
                <td class="table-action-hide">
                  <?php echo "<a href='".site_url('staff/edit/'.$staff['idno'])."'><i class='fa fa-pencil'></i></a>";?>&nbsp;
                  <!-- <a href="#" class="delete-row"><i class="fa fa-trash-o"></i></a> -->
                  <?php echo "<a href='".site_url('staff/delete/'.$staff['idno'])."'class='delete-row'><i class='fa fa-trash-o'></i></a>";?>&nbsp;

                </td> 
              </tr>
           <?php }?>
            </tbody>
          </table>
          <p>More Information available here:</p><a class="btn btn-black" target="_blank" href="<?php echo base_url();?>index.php/staff/additionalinfo">Addditonal Info</a> 
          </div><!-- table-responsive -->
        
    </div>
    
  </div><!-- mainpanel -->
  
  

