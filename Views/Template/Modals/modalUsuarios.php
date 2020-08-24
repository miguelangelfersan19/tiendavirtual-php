<!-- Modal -->
<div class="modal fade" id="modalFormUsuario" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-header headerRegister">
        <h5 class="modal-title" id="titleModal"> Nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
         
              <form id="formUsuario" name="formUsuario" class="form-horizontal">
                <imput type="hidden" id="idUsuario" name="idUsuario" value="">
                    <p class="text-primary"> Todos los campos son obligaorios!</p>

                <div class="form-row">
                  <div class="form-group col-md-6">
                  <label for="txtIdentificacion">Identificacion</label>
                  <input type="text" class="form-control" id="txtIdentificacion"  name ="txtIdentificacion" placeholder="Numero Identificacion" require="">
                </div>
                </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                  <label for="txtNombre">Nombres</label>
                  <input type="text" class="form-control" id="txtNombre"  name ="txtNombre" placeholder="Ingrese nombre" require="">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                  <label for="txtApellido">Apellidos</label>
                  <input type="text" class="form-control" id="txtApellido"  name ="txtApellido" placeholder="Ingrese apellido" require="">
                </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                  <label for="txtTelefono">Teléfono</label>
                  <input type="text" class="form-control" id="txtTelefono"  name ="txtTelefono" placeholder="Número de contacto" require="">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                  <label for="txtEmail">Email</label>
                  <input type="email" class="form-control" id="txtEmail"  name ="txtEmail" placeholder="correo@gmail.com" require="">
                </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                  <label for="listRolid">Tipo de usuario</label>
                  <select  class="form-control" id="lisRolid"  name ="lisRolid" require>
                  </select>
                </div>
                <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="lisStatus">Status</label>
                  <select class="form-control" id="lisStatus"  name ="lisStatus" require>
                      <option value ="1"> Activo</option>
                      <option value ="2">Inactivo</option>
                  </select>      
                </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                  <label for="txtPassword">Password</label>
                  <input type="password" class="form-control" id="txtPassword"  name ="txtPassword" require>
                </div>
                </div>
               
                <div class="tile-footer">
                    <button id="btnActionForm" class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle">
                    </i><span id="btnText">Guardar</span></button>&nbsp;&nbsp;&nbsp;
                    
                    <button class="btn btn-danger" type="button" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle">Cerrar</i></button>
                    
                </div>
              </form>
         
        </div>
    </div>
  </div>
</div>