$(document).ready(function () {
    "use strict";
    //
    // Load sort object by item id
    //
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //  datepicker
    $('#input-date').datepicker({
        clearButton: true
    });
    $('#input-date-time').datepicker({
        clearButton: true,
        dateFormat: 'yyyy-mm-dd',
        timepicker: true
    });


});

