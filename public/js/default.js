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


});

