var tableRoles; // se agrega un evento  
document.addEventListener('DOMContentLoaded', function() {

    tableRoles = $('#tableRoles').DataTable({ /*ID de la tabla*/
        "aProcessing": true,
        "aServerside": true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax": {
            "url": " " + base_url + "Roles/getRoles",
            "dataSrc": ""
        },
        "columns": [
            { "data": "idrol" },
            { "data": "nombrerol" },
            { "data": "descripcion" },
            { "data": "status" }
        ],
        "responsieve": "true",
        "bDestroy": true,
        "iDisplayLength": 10,
        "order": [
            [0, "desc"]
        ]
    });

});


$('#tableRoles').DataTable();

function openModal() {
    $('#modalFromRol').modal('show');

}