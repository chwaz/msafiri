<div class="mainpanel">

    <div class="headerbar">

      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
   <!-- header-right -->

</div><!-- headerbar -->

<div class="pageheader">
  <h2><i class="fa fa-table"></i>Body Builders and Fabricators<span></span></h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url();?>index.php/body_builders">Body Builders</a></li>
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
      <h5 class="subtitle mb5">List of Builders and Fabricators</h5>
          
          <div class="table-responsive">
          <table class="table table-hidaction table-hover mb30">
            <thead>
              <tr>
                <th>Company Name</th>
                <th>Abbreviations</th>
                <th>Category Type</th>
                <th>Address</th>
                <th>Physical Location</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Website</th>
                <th>Date Registered</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach($query as $builder){ ?>
                         
              <tr>
                <td><?php echo $builder['company_name'];?></td>
                <td><?php echo $builder['abbreviations'];?></td>
                <td><?php echo $builder['category_type'];?></td>
                <td><?php echo $builder['address'];?></td>
                <td><?php echo $builder['physical_location'];?></td>
                <td><?php echo $builder['email'];?></td>
                <td><?php echo $builder['phoneno'];?></td>
                 <td><a target = "_blank" href="http://<?php echo $builder['website'];?>"><?php echo $builder['website'];?></a></td>
                <td><?php echo $builder['date_registered'];?></td>
                <td class="table-action-hide">
                  <?php echo "<a href='".site_url('body_builders/edit/'.$builder['body_builderid'])."'><i class='fa fa-pencil'></i></a>";?>&nbsp;
                  <!-- <a href="#" class="delete-row"><i class="fa fa-trash-o"></i></a> -->
                  <?php echo "<a href='".site_url('body_builders/delete/'.$builder['body_builderid'])."'class='delete-row'><i class='fa fa-trash-o'></i></a>";?>&nbsp;

                </td> 
              </tr>
           <?php }?>
            </tbody>
          </table>
          </div><!-- table-responsive -->
        
    </div>
    
  </div><!-- mainpanel -->
  
  

