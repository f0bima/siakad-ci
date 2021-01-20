/*DataTable Init*/

"use strict"; 

$(document).ready(function() {
	"use strict";
	
	$('#datable_1').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
    $('#datable_2').DataTable({ "lengthChange": false});
} );