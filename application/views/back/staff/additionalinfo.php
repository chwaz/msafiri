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
      <li class="active">Additional Information</li>
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
      <h5 class="subtitle mb5">List of Staff Members Additional Information</h5>
          
          <div class="table-responsive">
          <table class="table table-hidaction table-hover mb30">
            <thead>
              <tr>
                <th>Kin's First Name</th>
                <th>Kin's Last Name</th>
                <th>Kin's Middle Name</th>
                <th>Kin's type of relation</th>
                <th>Kin's Identification Number</th>
                <th>Kin's Phone Number</th>
                <th>Kin's Residence</th>
                <th>Kin's Location</th>
                <th>Kin's Email</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($query2 as $staff){ ?>
                         
              <tr>
                <td><?php echo $staff['kin_firstname'];?></td>
                <td><?php echo $staff['Kin_lastname'];?></td>
                <td><?php echo $staff['kin_middlename'];?></td>
                <td><?php echo $staff['kin_typeofrelation'];?></td>
                <td><?php echo $staff['kin_idno'];?></td>
                <td><?php echo $staff['kin_phoneno'];?></td>
                <td><?php echo $staff['kin_residence'];?></td>
                <td><?php echo $staff['kin_location'];?></td>
                <td><?php echo $staff['kin_email'];?></td>
                <td class="table-action-hide">
                  <?php echo "<a href='".site_url('staff/edit/'.$staff['idno'])."'><i class='fa fa-pencil'></i></a>";?>&nbsp;
                  <!-- <a href="#" class="delete-row"><i class="fa fa-trash-o"></i></a> -->
                  <?php echo "<a href='".site_url('staff/delete/'.$staff['idno'])."'class='delete-row'><i class='fa fa-trash-o'></i></a>";?>&nbsp;

                </td> 
              </tr>
           <?php }?>
            </tbody>
          </table>
          <p>Return</p><a class="btn btn-black" target="_blank" href="<?php echo base_url();?>index.php/staff/index">Back</a> 
          </div><!-- table-responsive -->
        
    </div>
    
  </div><!-- mainpanel -->
  
  

