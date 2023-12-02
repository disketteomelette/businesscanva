  <div class="container-fluid mt-3">
    <table class="table table-bordered">
      <tr>
        <td rowspan="2" valign="top">
          <p class="quadrant-title" style="white-space: nowrap;">ASOCIACIONES CLAVE <button class="btn btn-light btn-sm" onclick="info('<?php include 'asociacionesclave.dat.info'; ?>');">?</button><button class="btn btn-dark btn-sm" onclick="agregadato('asociacionesclave.dat')">+</button></p>
          <div class="button-group">
            <?php $data = process("asociacionesclave.dat"); print($data); ?>
          </div>
        </td>
        <td valign="top">
          <p class="quadrant-title" style="white-space: nowrap;">ACTIVIDADES CLAVE <button class="btn btn-light btn-sm" onclick="info('<?php include 'actividadesclave.dat.info'; ?>');">?</button><button class="btn btn-dark btn-sm" onclick="agregadato('actividadesclave.dat')">+</button></p>
          <div class="button-group">
            <?php $data = process("actividadesclave.dat"); print($data); ?>
          </div>
        </td>
        <td colspan="2" rowspan="2" valign="top">
          <p class="quadrant-title" style="white-space: nowrap;">PROPUESTA DE VALOR <button class="btn btn-light btn-sm" onclick="info('<?php include 'propuestadevalor.dat.info'; ?>');">?</button><button class="btn btn-dark btn-sm" onclick="agregadato('propuestadevalor.dat')">+</button></p>
          <div class="button-group">
            <?php $data = process("propuestadevalor.dat"); print($data); ?>
          </div>
        </td>
        <td valign="top">
          <p class="quadrant-title" style="white-space: nowrap;">RELACIONES CON CLIENTES <button class="btn btn-light btn-sm" onclick="info('<?php include 'relacionesconclientes.dat.info'; ?>');">?</button><button class="btn btn-dark btn-sm" onclick="agregadato('relacionesconclientes.dat')">+</button></p>
          <div class="button-group">
            <?php $data = process("relacionesconclientes.dat"); print($data); ?>
          </div>
        </td>
        <td rowspan="2" valign="top">
          <p class="quadrant-title" style="white-space: nowrap;">SEGMENTO DE MERCADO <button class="btn btn-light btn-sm" onclick="info('<?php include 'segmentodemercado.dat.info'; ?>');">?</button><button class="btn btn-dark btn-sm" onclick="agregadato('segmentodemercado.dat')">+</button></p>
          <div class="button-group">
            <?php $data = process("segmentodemercado.dat"); print($data); ?>
          </div>
        </td>
      </tr>
      <tr>
        <td valign="top">
          <p class="quadrant-title" style="white-space: nowrap;">RECURSOS CLAVE <button class="btn btn-light btn-sm" onclick="info('<?php include 'recursosclave.dat.info'; ?>');">?</button><button class="btn btn-dark btn-sm" onclick="agregadato('recursosclave.dat')">+</button></p>
          <div class="button-group">
            <?php $data = process("recursosclave.dat"); print($data); ?>
          </div>
        </td>
        <td valign="top">
          <p class="quadrant-title" style="white-space: nowrap;">CANALES <button class="btn btn-light btn-sm" onclick="info('<?php include 'canales.dat.info'; ?>');">?</button><button class="btn btn-dark btn-sm" onclick="agregadato('canales.dat')">+</button></p>
          <div class="button-group">
            <?php $data = process("canales.dat"); print($data); ?>
          </div>
        </td>
      </tr>
      <tr>
        <td colspan="3" valign="top">
          <p class="quadrant-title" style="white-space: nowrap;">ESTRUCTURA DE COSTES <button class="btn btn-light btn-sm" onclick="info('<?php include 'estructuradecostes.dat.info'; ?>');">?</button><button class="btn btn-dark btn-sm" onclick="agregadato('estructuradecostes.dat')">+</button></p>
          <div class="button-group">
            <?php $data = process("estructuradecostes.dat"); print($data); ?>
          </div>
        </td>
        <td colspan="3" valign="top">
          <p class="quadrant-title" style="white-space: nowrap;">FUENTES DE INGRESOS <button class="btn btn-light btn-sm" onclick="info('<?php include 'fuentedeingresos.dat.info'; ?>');">?</button><button class="btn btn-dark btn-sm" onclick="agregadato('fuentesdeingresos.dat')">+</button></p>
          <div class="button-group">
            <?php $data = process("fuentesdeingresos.dat"); print($data); ?>
          </div>
        </td>
      </tr>
    </table>
  </div>