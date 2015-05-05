</section>



<script src="<?php echo base_url();?>components/backend/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo base_url();?>components/backend/js/jquery-ui-1.10.3.min.js"></script>
<script src="<?php echo base_url();?>components/backend/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>components/backend/js/modernizr.min.js"></script>
<script src="<?php echo base_url();?>components/backend/js/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url();?>components/backend/js/toggles.min.js"></script>
<script src="<?php echo base_url();?>components/backend/js/retina.min.js"></script>
<script src="<?php echo base_url();?>components/backend/js/jquery.cookies.js"></script>
<script src="<?php echo base_url();?>components/backend/js/flot/flot.min.js"></script>
<script src="<?php echo base_url();?>components/backend/js/flot/flot.resize.min.js"></script>
<script src="<?php echo base_url();?>components/backend/js/morris.min.js"></script>
<script src="<?php echo base_url();?>components/backend/js/raphael-2.1.0.min.js"></script>
<script src="<?php echo base_url();?>components/backend/js/jquery.datatables.min.js"></script>
<script src="<?php echo base_url();?>components/backend/js/chosen.jquery.min.js"></script>
<script src="<?php echo base_url();?>components/backend/js/custom.js"></script>
<script src="<?php echo base_url();?>components/backend/js/dashboard.js"></script>

<script src="<?php echo base_url();?>components/backend/js/jquery.autogrow-textarea.js"></script>
<script src="<?php echo base_url();?>components/backend/js/bootstrap-fileupload.min.js"></script>
<script src="<?php echo base_url();?>components/backend/js/bootstrap-timepicker.min.js"></script>
<script src="<?php echo base_url();?>components/backend/js/jquery.maskedinput.min.js"></script>
<script src="<?php echo base_url();?>components/backend/js/jquery.tagsinput.min.js"></script>
<script src="<?php echo base_url();?>components/backend/js/jquery.mousewheel.js"></script>
<script src="<?php echo base_url();?>components/backend/js/dropzone.min.js"></script>
<script src="<?php echo base_url();?>components/backend/js/colorpicker.js"></script>
<script src="<?php echo base_url();?>components/backend/js/bootstrap-wizard.min.js"></script>
<script src="<?php echo base_url();?>components/backend/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>components/backend/js/wysihtml5-0.3.0.min.js"></script>
<script src="<?php echo base_url();?>components/backend/js/bootstrap-wysihtml5.js"></script>
<script src="<?php echo base_url();?>components/backend/js/masonry.pkgd.min.js"></script>
<script>
  jQuery(document).ready(function() {
    
    jQuery('#table1').dataTable();
    
    jQuery('#table2').dataTable({
      "sPaginationType": "full_numbers"
    });
    
    // Chosen Select
    jQuery("select").chosen({
      'min-width': '100px',
      'white-space': 'nowrap',
      disable_search_threshold: 10
    });
    
    // Delete row in a table
    jQuery('.delete-row').click(function(){
      var c = confirm("Continue delete?");
      if(c)
        jQuery(this).closest('tr').fadeOut(function(){
          jQuery(this).remove();
        });
        
        return false;
    });
    
    // Show aciton upon row hover
    jQuery('.table-hidaction tbody tr').hover(function(){
      jQuery(this).find('.table-action-hide a').animate({opacity: 1});
    },function(){
      jQuery(this).find('.table-action-hide a').animate({opacity: 0});
    });
  
  
  });
</script>


</body>


</html>
