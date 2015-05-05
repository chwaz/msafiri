<div class="mainpanel">

    <div class="headerbar">

      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
   <!-- header-right -->

</div><!-- headerbar -->

<div class="pageheader">
  <h2><i class="fa fa-table"></i>Owners<span></span></h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="index.html">Owners</a></li>
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
      <!--Owners Details form-->
      <!--<form id="form2" class="form-horizontal form-bordered">-->
      <h5 class="subtitle mb5">List of Owners</h5>
          
          <div class="table-responsive">
          <table class="table table-hidaction table-hover mb30">
            <thead>
              <tr>
                <th>Identification Number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Middle Name</th>
                <th>Owner Type</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Residence</th>
                <th>Date Inserted</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach($query as $owner){ ?>
                         
              <tr>
                <td><?php echo $owner['idno'];?></td>
                <td><?php echo $owner['first_name'];?></td>
                <td><?php echo $owner['last_name'];?></td>
                <td><?php echo $owner['middle_name'];?></td>
                <td><?php echo $owner['owner_type'];?></td>
                <td><?php echo $owner['owner_address'];?></td>
                <td><?php echo $owner['owner_email'];?></td>
                <td><?php echo $owner['owner_phoneno'];?></td>
                <td><?php echo $owner['place_ofresidence'];?></td>
                <td><?php echo $owner['date_registered'];?></td>
                <td class="table-action-hide">
                  <?php echo "<a href='".site_url('owners/edit/'.$owner['idno'])."'><i class='fa fa-pencil'></i></a>";?>&nbsp;
                  <!-- <a href="#" class="delete-row"><i class="fa fa-trash-o"></i></a> -->
                  <?php echo "<a href='".site_url('owners/delete/'.$owner['idno'])."'class='delete-row'><i class='fa fa-trash-o'></i></a>";?>&nbsp;

                </td> 
              </tr>
           <?php }?>
            </tbody>
          </table>
          </div><!-- table-responsive -->
        
    </div>
    
  </div><!-- mainpanel -->
  
  

