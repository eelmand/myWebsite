$(document).ready(function() {
	$('#admin_overview').DataTable({
		"order": [[ 1, "desc" ]],
		select: true
	});
	
	var table = $('#admin_overview').DataTable();

	$('#admin_overview tbody').on( 'click', 'tr', function () {
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
		console.log(selectedRow[0]);
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