

<head>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
<link href="<?php echo base_url();?>assets/dt/css/jquery.dataTables.css" rel="stylesheet" type="text/css" /><!--<link type="text/css" rel="stylesheet" href="datatables/media/css/jquery.dataTables.min.css"/>--><!--<link type="text/css" rel="stylesheet" href="datatables/media/css/jquery.dataTables_themeroller.css"/>-->
   
</head>
<script type="text/javascript">
        $(document).ready(function() {
	var oTable = $('#big_table').dataTable( {
		"bProcessing": true,
		"bServerSide": true,
		"sAjaxSource": '<?php echo base_url(); ?>index.php/mahasiswa/datatable',
                "bJQueryUI": true,
                "sPaginationType": "full_numbers",
                "iTotalDisplayStart ":20,
                "oLanguage": {
            "sProcessing": "<img src='<?php echo base_url(); ?>assets/images/ajax-loader_dark.gif'>"
        },  
        "fnInitComplete": function() {
                //oTable.fnAdjustColumnSizing();
         },
                'fnServerData': function(sSource, aoData, fnCallback)
            {
              $.ajax
              ({
                'dataType': 'json',
                'type'    : 'POST',
                'url'     : sSource,
                'data'    : aoData,
                'success' : fnCallback
              });
            }
	} );
} );
</script>