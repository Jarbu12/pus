	<!--CHOSEN SELECT-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui-1.10.3.custom.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/chosen.css" />
    <script src="<?php echo base_url();?>assets/js/chosen.jquery.min.js"></script>
    <!--END-CHOSEN-->

	    <select name="dosen" class="chosen">
		<?php foreach($dosen as $d){?>
		<option value="<?php echo $d['dosen'];?>"><?php echo $d['dosen'];?></option>
		<?php }?>
		</select>

    <script type="text/javascript">
    jQuery(document).ready(function(){
    jQuery(".chosen").chosen();
    });
    </script>