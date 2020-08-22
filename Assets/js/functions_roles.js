var tableRoles; // se agrega un evento  
document.addEventListener('DOMContentLoaded', function() {

    tableRoles = $('#tableRoles').DataTable({ /*ID de la tabla*/
        "aProcessing": true,
        "aServerside": true,
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
        },
        "ajax": {
            "url": " " + base_url + "/Roles/getRoles", // agrege el /
            "dataSrc": ""
        },
        "columns": [
            { "data": "idrol" },
            { "data": "nombrerol" },
            { "data": "descripcion" },
            { "data": "status" },
            { "data": "options" }
        ],
        "responsieve": "true",
        "bDestroy": true,
        "iDisplayLength": 10,
        "order": [
            [0, "desc"]
        ]
    });

    //Nuevo Rol
    var formRol = document.querySelector("#formRol");
    formRol.onsubmit = function(e) {
        e.preventDefault(); //previene q se recarge la pagina 

        var strNombre = document.querySelector('#txtNombre').value;
        var strDescripcion = document.querySelector('#txtDescripcion').value;
        var intStatus = document.querySelector('#listStatus').value;
        if (strNombre == '' || strDescripcion == '' || intStatus == '') {
            swal("Atencion", "Todos los campos del formulario son obligatorios ", "error");
            return false;
        }
        //detecta el navegador 
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = base_url + '/Roles/setRol';
        var formData = new FormData(formRol);
        request.open("POST", ajaxUrl, true);
        request.send(formData); // envia los datos
        request.onreadystatechange = function() {
            if (request.readyState == 4 && request.status == 200) {

                var objData = JSON.parse(request.responseText);

                if (objData.status) {

                    $('#modalFormRol').modal("hide");
                    formRol.reset();
                    swal("Roles de usuario", objData.msg, "success");
                    tableRoles.api().ajax.reload(function() { // tableRoles.api().ajax.reload(function() {
                        //fntEditRol();
                        //fntDelRol();
                        //fntPermisos();
                    });
                } else {
                    swal("Error", objData.msg, "error");
                }
            }
        }
    }


});


$('#tableRoles').DataTable();



function openModal() {
    document.querySelector('#idRol').value = ""; //limpia las cajas de texto del formulario de nuevo
    document.querySelector('.modal-header').classList.replace("headerUpdate", "headerRegister");
    document.querySelector(' #btnActionForm').classList.replace("btn-info", "btn-primary");
    document.querySelector(' #btnText').innerHTML = "Guardar";
    document.querySelector(' #titleModal').innerHTML = "Nuevo Rol";
    document.querySelector(' #formRol').reset(); //reseta el formulario
    $('#modalFormRol').modal('show');
}

//carga  load cuando cargue todo el documento
window.addEventListener('load', function() {
    fntEditRol();
}, false);


//se asigna a cada uno de los botones de editar el formulario 
function fntEditRol() {
    var btnEditRol = document.querySelectorAll(".btnEditRol");
    btnEditRol.forEach(function(btnEditRol) {
        btnEditRol.addEventListener('click', function() {

            document.querySelector('#titleModal').innerHTML = "Actualizar Rol";
            document.querySelector('.modal-header').classList.replace("headerRegister", "headerUpdate");
            document.querySelector(' #btnActionForm').classList.replace("btn-primary", "btn-info");
            document.querySelector('#btnText').innerHTML = "Actualizar";

            var idrol = this.getAttribute("rl");
            var request = (windows.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl = base_url + '/Roles/getRol' + idrol;
            request.open("GET", ajaxUrl, true);
            request.send(); //envia la peticion

            request.onreadystatechange = function() {
                if (request.readyState == 4 && request.status == 200) {
                    var objData = JSON.parse(request.responseText);
                    if (objData.status) {

                        document.querySelector("#idRol").value = objData.data.idrol;
                        document.querySelector("#txtNombre").value = objData.data.nombrerol;
                        document.querySelector("#txtDescripcion").value = objData.data.descripcion;

                        if (objData.data.status == 1) {
                            var optionSelect = '<option value="1" selected class="notBlock">Activo</option>';
                        } else {
                            var optionSelect = '<option value="2" selected class="notBlock">Inactivo</option>';
                        }

                        var htmlSelect = `${optionSelect}
                        <option value="1"> Activo </option>
                        <option value="2"> Inactivo </option>
                        `;

                        document.querySelector("#listStatus").innerHTML = htmlSelect;
                        $('#modalFormRol').modal('show');
                    } else {
                        swal("Error", objData.msg, "error");
                    }
                }
            }

        });
    });

}