$(document).ready(function () {
    $('#catalogLoader').show();
    $('#catalogTable').hide();
    const catalogTable = $('#catalogTable').DataTable({
        searching: true,   // still allow searching
        dom: 'lrtip',
        autoWidth: false,
        columns: [
            { width: "15%" },
            { width: "16%" },
            { width: "17%" },
            { width: "16%" },
            { width: "17%" },
            { width: "17%" },
        ],
        initComplete: function(settings, json) {
            // Hide loader when table is fully initialized
            $('#catalogLoader').hide();
            $('#catalogTable').fadeIn();
        }
    });
    $('#catalogSearch').on('keyup', function () {
        catalogTable.search(this.value).draw();
    });
});

