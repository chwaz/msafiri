<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?php echo base_url();?>components/backend/images/favicon.png" type="image/png">

  <title>MMS Admin</title>

  <link href="<?php echo base_url();?>components/backend/css/style.default.css" rel="stylesheet">
  <link href="<?php echo base_url();?>components/backend/css/jquery.datatables.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url();?>components/backend/css/bootstrap-wysihtml5.css" />
  <link href="<?php echo base_url();?>components/backend/css/style.default.css" rel="stylesheet">
  <link href="<?php echo base_url();?>components/backend/css/jquery.datatables.css" rel="stylesheet">
  <script src="<?php echo base_url();?>components/backend/js/jquery-1.10.2.min.js"></script>
  <script type="text/javascript">
$(document).ready(function() {

    $('#bus_make').on("change", function() {
        var cattype = $(this).val();
        optionswitch(cattype);
    });

});

function optionswitch(myfilter) {
    //Populate the optionstore if the first time through
    if ($('#optionstore').text() == "") {
        $('option[class^="sub-"]').each(function() {
            var optvalue = $(this).val();
            var optclass = $(this).prop('class');
            var opttext = $(this).text();
            optionlist = $('#optionstore').text() + "@%" + optvalue + "@%" + optclass + "@%" + opttext;
            $('#optionstore').text(optionlist);
        });
    }
    //delete everything
    $('option[class^="sub-"]').remove();
    // put the filtered stuff back
    populateoption = rewriteoption(myfilter);
    $('#bus_model').html(populateoption);
}

function rewriteoption(myfilter) {
    //rewrite only the filtered stuff back into the option
    var options = $('#optionstore').text().split('@%');
    var resultgood = false;
    var myfilterclass = "sub-" + myfilter;
    var optionlisting = "";
    
    myfilterclass = (myfilter != "")?myfilterclass:"all";
    //first variable is always the value, second is always the class, third is always the text
    for (var i = 3; i < options.length; i = i + 3) {
        if (options[i - 1] == myfilterclass || myfilterclass == "all") {
            optionlisting = optionlisting + '<option value="' + options[i - 2] + '" class="sub-' + options[i - 1] + '">' + options[i] + '</option>';
            resultgood = true;
        }
    }
    if (resultgood) {
        return optionlisting;
    }
}
</script>   
  <script src="<?php echo base_url();?>components/backend/js/alert.js"></script>
  <!--Date Picker-->
  <!-- <link rel="stylesheet" href="<?php echo base_url();?>components/backend/css/date/jquery.ui.all.css" type="text/css"  /> -->
  <!-- <link rel="stylesheet" href="<?php echo base_url();?>components/backend/css/date/demos.css" type="text/css" /> -->
  <script src="<?php echo base_url();?>components/backend/js/date/jquery.ui.core.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>components/backend/js/date/jquery.ui.widget.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>components/backend/js/date/jquery.ui.datepicker.js" type="text/javascript"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({dateFormat: 'yy-mm-dd' });
    $( "#yearpicker" ).datepicker({dateFormat: 'yy-mm-dd' });
    $( "#lastexpirydate" ).datepicker({dateFormat: 'yy-mm-dd' });
    $( "#nextexpirydate" ).datepicker({dateFormat: 'yy-mm-dd' });
    $( "#lastrenewaldate" ).datepicker({dateFormat: 'yy-mm-dd' });
    $( "#nextrenewaldate" ).datepicker({dateFormat: 'yy-mm-dd' });
    $( "#previouscheckdate" ).datepicker({dateFormat: 'yy-mm-dd' });
    $( "#nextcheckdate" ).datepicker({dateFormat: 'yy-mm-dd' });
     $( "#datefitted" ).datepicker({dateFormat: 'yy-mm-dd' });
     $( "#date_ofacquisition" ).datepicker({dateFormat: 'yy-mm-dd' });

  });
  </script>
  <!-- Disable back buttons once logout -->
  <!-- <script language="javascript" type="text/javascript">
//     window.history.forward();
// </script>-->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body>
    
<!-- Preloader -->
<div id="preloader">
   <!--  <div id="status"><i class="fa fa-spinner fa-spin"></i></div> -->
</div>

<section>
  
  <div class="leftpanel">
    
    <div class="logopanel">
        <h1><span>MMS </span> Admin</h1>
    </div><!-- logopanel -->
        
    <div class="leftpanelinner">    
        
        <!-- This is only visible to small devices -->
        <div class="visible-xs hidden-sm hidden-md hidden-lg">   
            <div class="media userlogged">
                <img alt="" src="<?php echo base_url();?>components/backend/images/photos/loggeduser.png" class="media-object">
                <div class="media-body">
                    <h4><?php //echo $this->session->userdata("firstname"); ?></h4>
                    <span>"Life is so..."</span>
                </div>
            </div>
          
            <h5 class="sidebartitle actitle">Account</h5>
            <ul class="nav nav-pills nav-stacked nav-bracket mb30">
              <li><a href="profile.html"><i class="fa fa-user"></i> <span>Profile</span></a></li>
              <li><a href="#"><i class="fa fa-cog"></i> <span>Account Settings</span></a></li>
              <li><a href="#"><i class="fa fa-question-circle"></i> <span>Help</span></a></li>
              <li><a href="<?php base_url();?>index.php/logout"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
            </ul>
        </div>
      
      <h5 class="sidebartitle">Navigation</h5>
      <ul class="nav nav-pills nav-stacked nav-bracket">
        <li class="active"><a href="<?php echo base_url();?>index.php/dashboard"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>Owners</span></a>
            <ul class="children">
            <li><a href="<?php echo base_url();?>index.php/owners"><i class="fa fa-caret-right"></i> Owners</a></li>
            <li><a href="<?php echo base_url();?>index.php/owners/insert"><i class="fa fa-caret-right"></i> Add Owner</a></li>
          </ul>
        </li>
         <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>Buses</span></a>
            <ul class="children">
            <li><a href="<?php echo base_url();?>index.php/buses"><i class="fa fa-caret-right"></i> Buses</a></li>
            <li><a href="<?php echo base_url();?>index.php/buses/insert"><i class="fa fa-caret-right"></i> Add a Bus</a></li>
          </ul>
        </li>
        <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>Body Builders <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and Fabricators</span></a>
            <ul class="children">
            <li><a href="<?php echo base_url();?>index.php/body_builders"><i class="fa fa-caret-right"></i> Body Builders/Fabricators</a></li>
            <li><a href="<?php echo base_url();?>index.php/body_builders/insert"><i class="fa fa-caret-right"></i> Add Builders/Fabricators</a></li>
          </ul>
        </li>
        <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>Bus Status</span></a>
            <ul class="children">
            <li><a href="<?php echo base_url();?>index.php/bus_status"><i class="fa fa-caret-right"></i> Bus Status</a></li>
            <li><a href="<?php echo base_url();?>index.php/bus_status/insert"><i class="fa fa-caret-right"></i> Add Bus Status</a></li>
          </ul>
        </li>
        <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>Inspection Log</span></a>
            <ul class="children">
            <li><a href="<?php echo base_url();?>index.php/inspection"><i class="fa fa-caret-right"></i> Inspection Log</a></li>
            <li><a href="<?php echo base_url();?>index.php/inspection/insert"><i class="fa fa-caret-right"></i> Add Inspection Log</a></li>
          </ul>
        </li>
        <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>Insurance</span></a>
            <ul class="children">
            <li><a href="<?php echo base_url();?>index.php/insurance"><i class="fa fa-caret-right"></i> Insurance</a></li>
            <li><a href="<?php echo base_url();?>index.php/insurance/insert"><i class="fa fa-caret-right"></i> Add Insurance</a></li>
          </ul>
        </li>
         <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>PSV</span></a>
            <ul class="children">
            <li><a href="<?php echo base_url();?>index.php/psv"><i class="fa fa-caret-right"></i> PSV</a></li>
            <li><a href="<?php echo base_url();?>index.php/psv/insert"><i class="fa fa-caret-right"></i> add a PSV license log</a></li>
          </ul>
        </li>
        <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>TLB</span></a>
            <ul class="children">
            <li><a href="<?php echo base_url();?>index.php/tlb"><i class="fa fa-caret-right"></i> TLB</a></li>
            <li><a href="<?php echo base_url();?>index.php/tlb/insert"><i class="fa fa-caret-right"></i> Add TLB log</a></li>
          </ul>
        </li>
         <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>Staff</span></a>
            <ul class="children">
            <li><a href="<?php echo base_url();?>index.php/staff"><i class="fa fa-caret-right"></i> Staff</a></li>
            <li><a href="<?php echo base_url();?>index.php/staff/insert"><i class="fa fa-caret-right"></i> Add Staff</a></li>
          </ul>
        </li>
        <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>Staff Operations</span></a>
            <ul class="children">
            <li><a href="<?php echo base_url();?>index.php/staff_operations"><i class="fa fa-caret-right"></i> Staff Operations</a></li>
            <li><a href="<?php echo base_url();?>index.php/staff_operations/insert"><i class="fa fa-caret-right"></i> Add Staff Operations Log</a></li>
          </ul>
        </li>
        <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>Routes</span></a>
            <ul class="children">
            <li><a href="<?php echo base_url();?>index.php/route"><i class="fa fa-caret-right"></i> Routes</a></li>
            <li><a href="<?php echo base_url();?>index.php/route/insert"><i class="fa fa-caret-right"></i> Add Routes Log</a></li>
          </ul>
        </li>
        <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>Staff Position</span></a>
            <ul class="children">
            <li><a href="<?php echo base_url();?>index.php/staff_position"><i class="fa fa-caret-right"></i> Staff Position</a></li>
            <li><a href="<?php echo base_url();?>index.php/staff_position/insert"><i class="fa fa-caret-right"></i> Add Staff Position Log</a></li>
          </ul>
        </li>
        <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>Staff Operational Status</span></a>
            <ul class="children">
            <li><a href="<?php echo base_url();?>index.php/staff_status"><i class="fa fa-caret-right"></i> Staff Operational Status</a></li>
            <li><a href="<?php echo base_url();?>index.php/staff_status/insert"><i class="fa fa-caret-right"></i> Add Staff Operational status Log</a></li>
          </ul>
          <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>Monthly Worksheets</span></a>
            <ul class="children">
            <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>January Worksheet</span></a>
              <li><a href="<?php echo base_url();?>index.php/january_worksheet"><i class="fa fa-caret-right"></i> January Worksheet</a></li>
              <li><a href="<?php echo base_url();?>index.php/january_worksheet/insert"><i class="fa fa-caret-right"></i> January Worksheet</a></li>
            <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>February Worksheet</span></a>
              <li><a href="<?php echo base_url();?>index.php/february_worksheet"><i class="fa fa-caret-right"></i> February Worksheet</a></li>
              <li><a href="<?php echo base_url();?>index.php/february_worksheet/insert"><i class="fa fa-caret-right"></i> February Worksheet Insert</a></li>
              <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>March Worksheet</span></a>
              <li><a href="<?php echo base_url();?>index.php/march_worksheet"><i class="fa fa-caret-right"></i> March Worksheet</a></li>
              <li><a href="<?php echo base_url();?>index.php/march_worksheet/insert"><i class="fa fa-caret-right"></i> March Worksheet Insert</a></li>
              <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>March Worksheet</span></a>
              <li><a href="<?php echo base_url();?>index.php/april_worksheet"><i class="fa fa-caret-right"></i> April Worksheet</a></li>
              <li><a href="<?php echo base_url();?>index.php/april_worksheet/insert"><i class="fa fa-caret-right"></i> April Worksheet Insert</a></li>
              <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>April Worksheet</span></a>
              <li><a href="<?php echo base_url();?>index.php/may_worksheet"><i class="fa fa-caret-right"></i> May Worksheet</a></li>
              <li><a href="<?php echo base_url();?>index.php/may_worksheet/insert"><i class="fa fa-caret-right"></i> May Worksheet Insert</a></li>
              <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>June Worksheet</span></a>
              <li><a href="<?php echo base_url();?>index.php/june_worksheet"><i class="fa fa-caret-right"></i> June Worksheet</a></li>
              <li><a href="<?php echo base_url();?>index.php/june_worksheet/insert"><i class="fa fa-caret-right"></i> June Worksheet Insert</a></li>
              <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>July Worksheet</span></a>
              <li><a href="<?php echo base_url();?>index.php/july_worksheet"><i class="fa fa-caret-right"></i> July Worksheet</a></li>
              <li><a href="<?php echo base_url();?>index.php/july_worksheet/insert"><i class="fa fa-caret-right"></i> July Worksheet Insert</a></li>
              <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>August Worksheet</span></a>
              <li><a href="<?php echo base_url();?>index.php/august_worksheet"><i class="fa fa-caret-right"></i> August Worksheet</a></li>
              <li><a href="<?php echo base_url();?>index.php/august_worksheet/insert"><i class="fa fa-caret-right"></i> August Worksheet Insert</a></li>
              <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>September Worksheet</span></a>
              <li><a href="<?php echo base_url();?>index.php/september_worksheet"><i class="fa fa-caret-right"></i> September Worksheet</a></li>
              <li><a href="<?php echo base_url();?>index.php/september_worksheet/insert"><i class="fa fa-caret-right"></i> September Worksheet Insert</a></li>
              <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>October Worksheet</span></a>
              <li><a href="<?php echo base_url();?>index.php/october_worksheet"><i class="fa fa-caret-right"></i> October Worksheet</a></li>
              <li><a href="<?php echo base_url();?>index.php/october_worksheet/insert"><i class="fa fa-caret-right"></i> October Worksheet Insert</a></li>
              <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>November Worksheet</span></a>
              <li><a href="<?php echo base_url();?>index.php/november_worksheet"><i class="fa fa-caret-right"></i> November Worksheet</a></li>
              <li><a href="<?php echo base_url();?>index.php/november_worksheet/insert"><i class="fa fa-caret-right"></i> November Worksheet Insert</a></li>
              <!-- <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>November Worksheet</span></a>
              <li><a href="<?php echo base_url();?>index.php/november_worksheet"><i class="fa fa-caret-right"></i> November Worksheet</a></li>
              <li><a href="<?php echo base_url();?>index.php/november_worksheet/insert"><i class="fa fa-caret-right"></i> November Worksheet Insert</a></li> -->
              <li class="nav-parent"><a href="#"><i class="fa fa-edit"></i> <span>December Worksheet</span></a>
              <li><a href="<?php echo base_url();?>index.php/december_worksheet"><i class="fa fa-caret-right"></i> December Worksheet</a></li>
              <li><a href="<?php echo base_url();?>index.php/december_worksheet/insert"><i class="fa fa-caret-right"></i> December Worksheet Insert</a></li>
          </ul>
        </li>
        
        </ul>
      </div><!-- infosummary -->
      
    </div><!-- leftpanelinner -->
  </div><!-- leftpanel -->

