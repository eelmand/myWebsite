$(document).ready(function() {
	$('#hours_table').DataTable({
		"order": [[ 1, "desc" ]],
		select: true
	});
	
	var table = $('#hours_table').DataTable();

	$('#hours_table tbody').on( 'click', 'tr', function () {
			if ( $(this).hasClass('selected') ) {
				$(this).removeClass('selected');
			}
			else {
				table.$('tr.selected').removeClass('selected');
				$(this).addClass('selected');
			}
		});

	$('#button').click( function () {
		var selectedRow = table.row('.selected').data();
		$.ajax({
			type: 'POST',
			url: '../php/delete_row.php',
			data: { id : selectedRow[0] },
			success: function(response) {
				table.row('.selected').remove().draw( false );
			}
		});
	});
});