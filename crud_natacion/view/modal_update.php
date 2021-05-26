<!-- Button trigger modal -->
<!--
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_update">
  Launch demo modal
</button>
-->

<!-- Modal -->
<div class="modal fade" id="modal_update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar Estudiante</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <!-- construccion del formulario de datos para actualizar estudiante -->
        <form id="formulario_actualiza_estudiante">

        <!-- se agrega el input para el ID ya que es necesrio en la precarga de informacion en la venta modal -->
          <div class="form-group">
            <input type="text" class="form-control" id="actualiza_id" name="actualiza_id" hidden="true">
          </div>

          <div class="form-group">
            <label for="actualiza_nombre">Nombre</label>
            <input type="text" class="form-control" id="actualiza_nombre" name="actualiza_nombre">
          </div>
          <div class="form-group">
            <label for="actualiza_paterno">Apellido Paterno</label>
            <input type="text" class="form-control" id="actualiza_paterno" name="actualiza_paterno">
          </div>
          <div class="form-group">
            <label for="actualiza_materno">Apellido Materno</label>
            <input type="text" class="form-control" id="actualiza_materno" name="actualiza_materno">
          </div>
          <div class="form-group">
            <label for="actualiza_movil">Tel. Movil</label>
            <input type="text" class="form-control" id="actualiza_movil" name="actualiza_movil">
          </div>
          <div class="form-group">
            <label for="actualiza_dias">Dias de clase</label>
            <input type="text" class="form-control" id="actualiza_dias" name="actualiza_dias">
          </div>
           <div class="form-group">
            <label for="actualiza_pago">Pago Mensual</label>
            <input type="text" class="form-control" id="actualiza_pago" name="actualiza_pago"></div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <!-- se copio el atributo de data-dismiss para que la ventana se cierre sola al dispararse el sawl -->
        <button 
          type="button" 
          class="btn btn-warning" 
          id="btn_actualiza_estudinate" 
          data-dismiss="modal"
          onclick="actualiza_estudiante()" 
        >
          Actualizar Estudiante
        </button>
      </div>
    </div>
  </div>
</div>