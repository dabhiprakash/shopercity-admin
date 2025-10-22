$(document).ready(function () {
	$('#userListLoader').show();
    $('#userListTable').hide();

    const table = $('#userListTable').DataTable({
        searching: true,   // still allow searching
        dom: 'lrtip',
        processing: true, // internal DataTables processing loader (optional)
        autoWidth: false,
        columns: [
            { width: "25%" },
            { width: "25%" },
            { width: "20%" },
            { width: "20%" },
            { width: "10%" }
        ],
        initComplete: function(settings, json) {
            // Hide loader when table is fully initialized
            $('#userListLoader').hide();
            $('#userListTable').fadeIn();
        }
    });
    $('#search').on('keyup', function () {
        table.search(this.value).draw();
    });
});
