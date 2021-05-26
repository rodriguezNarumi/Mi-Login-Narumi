<!-- Button trigger modal -->
<!--
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_insert">
  Launch demo modal
</button>
-->

<!-- Modal -->
<div class="modal fade" id="modal_insert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Estudiante</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <!-- construccion del formulario de datos para agregar un nuevo estudiante -->
        <form id="formulario_crear_estudiante">
          <div class="form-group">
            <label for="crear_nombre">Nombre</label>
            <input type="text" class="form-control" id="crear_nombre" name="crear_nombre">
          </div>
          <div class="form-group">
            <label for="crear_paterno">Apellido Paterno</label>
            <input type="text" class="form-control" id="crear_paterno" name="crear_paterno">
          </div>
          <div class="form-group">
            <label for="crear_materno">Apellido Materno</label>
            <input type="text" class="form-control" id="crear_materno" name="crear_materno">
          </div>
          <div class="form-group">
            <label for="crear_movil">Tel. Movil</label>
            <input type="text" class="form-control" id="crear_movil" name="crear_movil">
          </div>
          <div class="form-group">
            <label for="crear_dias">Dias de clase</label>
            <input type="text" class="form-control" id="crear_dias" name="crear_dias">
          </div>
          <div class="form-group">
            <label for="crear_pago">Pagos Mensuales</label>
            <input type="text" class="form-control" id="crear_pago" name="crear_pago">
          </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btn_crear_estudiante" onclick="crear_estudiante()">Crear Estudiante</button>
      </div>
    </div>
  </div>
</div>