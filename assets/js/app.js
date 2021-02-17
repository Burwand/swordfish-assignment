$(document).ready(function () {
    var table;
    redraw_datatable(table);

    $.get("./ajax/Lables.php", function (data, status) {
        data = JSON.parse(data);
        let clients = data.clients;
        let types = data.types;
        let priorities = data.priorities;

        for (let i = 0; i < clients.length; i++)
            $("#inputClient").append("<option value='" + clients[i]['value'] + "'>" + clients[i]['text'] + "</option>");
        for (let i = 0; i < types.length; i++)
            $("#inputType").append("<option value='" + types[i]['value'] + "'>" + types[i]['text'] + "</option>");
        for (let i = 0; i < priorities.length; i++)
            $("#inputPriority").append("<option value='" + priorities[i]['value'] + "'>" + priorities[i]['text'] + "</option>");

    });

    $("#save").click(function () {
        let form = $('#form');
        if (checkForm()) {
            $.ajax({
                type: "POST",
                url: './ajax/CreateIssue.php',
                data: form.serialize(), // serializes the form's elements.
                success: function (data) {
                    data = JSON.parse(data);
                    if (data.status == '201') {
                        $('#alert').removeClass("alert-danger").addClass("alert-success");
                    } else {
                        $('#alert').removeClass("alert-success").addClass("alert-danger");
                    }
                    $('#alert').html(data.message);
                    $('#alert').show();
                    $('#exampleModalCenter').modal('toggle');
                    resetState();
                    redraw_datatable(table);
                }
            });
        }
    });

    function redraw_datatable(tbl) {
        if (tbl !== undefined) {
            tbl.destroy();
        }

        table = $('#example').DataTable({
            "ajax": "./ajax/Issues.php",
            "columns": [
                {
                    "data": "title"
                },
                {
                    "data": "body"
                },
                {
                    "data": "client",
                    "defaultContent": "Not set"
                },
                {
                    "data": "priority",
                    "defaultContent": "Not set"
                },
                {
                    "data": "type",
                    "defaultContent": "Not set"
                },
                {
                    "data": "user"
                },
                {
                    "data": "state"
                },
            ]
        });
    }

    function checkForm() {
        let valid = true;
        $('#form input, #form select, #form textarea').each(
            function (index) {
                if ($(this).val().trim() === '' || $(this).val() === 'null') {
                    $(this).removeClass("is-valid").addClass("is-invalid");
                    valid = false;
                } else {
                    $(this).removeClass("is-invalid").addClass("is-valid");
                }
            }
        );
        return valid;
    }

    function resetState() {
        $('#form input, #form select, #form textarea').each(
            function (index) {
                $(this).val('');
            }
        );
    }
});
