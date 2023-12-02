  <!-- Modal -->
<div id="myModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Elemento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="modalData"></p> 
        <a>Elemento: </a>
        <input type="text" id="textInput1" class="form-control" placeholder="Cuadro de texto 1"> 
        <br><a>Color: </a>
	  <select id="dropdownList" class="form-control">
	    <option value="btn-primary">Azul</option>
	    <option value="btn-secondary">Gris</option>
	    <option value="btn-success">Verde</option>
	    <option value="btn-danger">Rojo</option>
	    <option value="btn-warning">Amarillo</option>
	    <option value="btn-info">Azul claro</option>
	    <option value="btn-light">Blanco</option>
	    <option value="btn-dark">Gris oscuro</option>
	    <option value="btn-link">Enlace</option>
	  </select>
        <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" onclick="deletethis()">Modificar</button>
        <button type="button" class="btn btn-danger" onclick="deletethis()">Eliminar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>