$(document).ready(function () {
    $('#reviewListLoader').show();
    $('#reviewPendingListTable').hide();
    const reviewTable = $('#reviewPendingListTable').DataTable({
        searching: true,   // still allow searching
        dom: 'lrtip',
        paging: false,
        autoWidth: false,   // disable automatic width calculation
        columns: [
            { width: "30%" },
            { width: "15%" },
            { width: "20%" },
            { width: "10%" },
            { width: "10%" },
            { width: "15%" }
        ],
        initComplete: function(settings, json) {
            // Hide loader when table is fully initialized
            $('#reviewListLoader').hide();
            $('#reviewPendingListTable').fadeIn();
        }
    });
    $('#reviewSearch').on('keyup', function () {
        reviewTable.search(this.value).draw();
    });

    $('#reviewFlaggedListLoader').show();
    $('#reviewFlaggedListTable').hide();
    const reviewFlaggedTable = $('#reviewFlaggedListTable').DataTable({
        searching: true,   // still allow searching
        dom: 'lrtip',
        autoWidth: false,
        paging: false,
        columns: [
            { width: "30%" },
            { width: "15%" },
            { width: "20%" },
            { width: "10%" },
            { width: "10%" },
            { width: "15%" }
        ],
        initComplete: function(settings, json) {
            // Hide loader when table is fully initialized
            $('#reviewFlaggedListLoader').hide();
            $('#reviewFlaggedListTable').fadeIn();
        }
    });
    $('#reviewFlagSearch').on('keyup', function () {
        reviewFlaggedTable.search(this.value).draw();
    });
});

