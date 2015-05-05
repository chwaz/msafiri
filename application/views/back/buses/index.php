<div class="mainpanel">

    <div class="headerbar">

      <a class="menutoggle"><i class="fa fa-bars"></i></a>
      
   <!-- header-right -->

</div><!-- headerbar -->

<div class="pageheader">
  <h2><i class="fa fa-table"></i>Buses<span></span></h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="index.html">Buses</a></li>
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
      <h5 class="subtitle mb5">List of Buses</h5>
          
          <div class="table-responsive">
          <table class="table table-hidaction table-hover mb30">
            <thead>
              <tr>
                <th>Bus Registration</th>
                <th>Bus Make</th>
                <th>Bus Model</th>
                <th>Number of Seats</th>
                <th>Bus Chasis Number</th>
                <th>Bus Engine Number</th>
                <th>Year of Manufacture</th>
                <th>Date of Purchase</th>
                <th>Date Inserted</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach($query as $bus){ ?>
                         
              <tr>
                <td><?php echo $bus['bus_reg'];?></td>
                <td><?php echo $bus['bus_make'];?></td>
                <td><?php echo $bus['bus_model'];?></td>
                <td><?php echo $bus['no_of_seats'];?></td>
                <td><?php echo $bus['bus_chasisno'];?></td>
                <td><?php echo $bus['bus_engineno'];?></td>
                <td><?php echo $bus['year_of_manufacture'];?></td>
                <td><?php echo $bus['date_of_purchase'];?></td>
                <td><?php echo $bus['date_registered'];?></td>
                <td class="table-action-hide">
                  <?php echo "<a href='".site_url('buses/edit/'.$bus['bus_reg'])."'><i class='fa fa-pencil'></i></a>";?>&nbsp;
                  <!-- <a href="#" class="delete-row"><i class="fa fa-trash-o"></i></a> -->
                  <?php echo "<a href='".site_url('buses/delete/'.$bus['bus_reg'])."'class='delete-row'><i class='fa fa-trash-o'></i></a>";?>&nbsp;

                </td> 
              </tr>
           <?php }?>
            </tbody>
          </table>
          </div><!-- table-responsive -->
        
    </div>
    
  </div><!-- mainpanel -->
  
  

