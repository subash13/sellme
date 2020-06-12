
$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#pattribute').DataTable({
        "processing": true,
        "serverSide": true,
        "ajax":{
            "url": "pattribute/all-attribute",
            "dataType": "json",
            "type": "POST",
            "data":{ _token:  $('meta[name="csrf-token"]').attr('content')}
        },
        "columns": [
            { "data": "id" },
            { "data": "name" },
            { "data": "label" },
            { "data": "unit" },
            { "data": "multiple" },
            { "data": "created_at" },
            { "data": "options" }
        ]

    });

});
function archiveFunction() {
    event.preventDefault(); // prevent form submit
    var form = event.target.form; // storing the form
    swal({
        title: "Are you sure?",
        text: "But you will still be able to retrieve this file. if cancel",
        type: "warning",
        buttons: [true, "Do it!"],
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        closeOnConfirm: false,
        closeOnCancel: false
    }).then(function(isConfirm) {
        if (isConfirm) {
            form.submit();          // submitting the form when user press yes
        } else {
            swal("Cancelled", "Your file is safe :)", "error");
        }

    });

}