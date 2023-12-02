  <!-- Modal 2 -->
<div id="myModal2" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Añadir elemento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="modalData2" style="display: none;"></p> 
        <a>Elemento: </a>
        <input type="text" id="textInput2" class="form-control" placeholder="Nombre del elemento"> 
        <br><a>Color: </a>
	  <select id="dropdownList2" class="form-control">
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
        <button type="button" class="btn btn-warning" onclick="agregarElemento()">Añadir elemento</button> 
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>