
        <script type="text/javascript" src="<?php echo base_url();?>assets/dt/js/jquery.js"></script>
	    <script type="text/javascript" src="<?php echo base_url();?>assets/dt/js/jquery-1.11.3.min.js"></script>
	    <script type="text/javascript" src="<?php echo base_url();?>assets/dt/js/jquery.dataTables.js"></script>
	    <script type="text/javascript" src="<?php echo base_url();?>assets/dt/js/jquery.dataTables.min.js"></script>
	
	

    <link href="<?php echo base_url();?>assets/dt/css/jquery.dataTables.css" rel="stylesheet" type="text/css" /><!--<link type="text/css" rel="stylesheet" href="datatables/media/css/jquery.dataTables.min.css"/>--><!--<link type="text/css" rel="stylesheet" href="datatables/media/css/jquery.dataTables_themeroller.css"/>-->
    <script type="text/javascript">
 $(document).ready(function() {
    var t = $('#sample-table-2').DataTable( {
       
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        "order": [[ 1, 'asc' ]]
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
} );
	</script>