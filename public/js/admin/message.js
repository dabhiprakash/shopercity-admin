$(document).ready(function () {
    // $('#messageTable').DataTable({"searching": false});
    $('#messageLoader').show();
    $('#messageTable').hide();
    const messageTable = $('#messageTable').DataTable({
        searching: true,   // still allow searching
        dom: 'lrtip',
        autoWidth: false,
        columns: [
            { width: "20%" },
            { width: "20%" },
            { width: "20%" },
            { width: "15%" },
            { width: "10%" },
            { width: "15%" },
        ],
        initComplete: function(settings, json) {
            // Hide loader when table is fully initialized
            $('#messageLoader').hide();
            $('#messageTable').fadeIn();
        }
    });
    $('#search').on('keyup', function () {
        messageTable.search(this.value).draw();
    });
});

