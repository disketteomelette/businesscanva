$(document).ready(function() {
  $('#increaseBtn').click(function() {
    var currentFontSize = parseInt($('html').css('font-size'));
    $('html').css('font-size', (currentFontSize + 1) + 'px');
  });

  $('#decreaseBtn').click(function() {
    var currentFontSize = parseInt($('html').css('font-size'));
    $('html').css('font-size', (currentFontSize - 1) + 'px');
  });
});



  var dato1, dato2;

    function proceval(datos) { 
      var modal = document.getElementById("myModal");
      var modalData = document.getElementById("modalData"); 
      var partes = datos.split("/");
      var dato1 = partes[0];
      var dato2 = partes[1];
      document.getElementById("dato1Hidden").value = dato1;
      document.getElementById("dato2Hidden").value = dato2;
      document.getElementById("textInput1").value = dato2;
      modalData.innerHTML = "Elemento seleccionado: " + dato2;
      $(modal).modal('show');
    }



    function deletethis() {
      var dato1 = document.getElementById("dato1Hidden").value;
      var dato2 = document.getElementById("dato2Hidden").value;
      var result = confirm("¿Desea eliminar el elemento '" + dato2 + "'?");
      if (result) { 
        window.location.href = 'eliminar.php?en=' + dato1 + '&cual=' + dato2;  
      } else {
        alert("Eliminación de elemento cancelada.");
      }

    }



    function agregadato(archivo) { 
      var modal2 = document.getElementById("myModal2");
      var modalData2 = document.getElementById("modalData2");  
      document.getElementById("dato3Hidden").value = archivo; 
      modalData2.innerHTML = "Archivo: " + archivo;
      $(modal2).modal('show');
    }

    function agregarElemento() {
      var dato3Hidden = document.getElementById('dato3Hidden').value;
      var textInput2 = document.getElementById('textInput2').value;
      var dropdownList2 = document.getElementById('dropdownList2');
      var selectedColor = dropdownList2.options[dropdownList2.selectedIndex].value;
      window.location.href = 'agregar.php?en=' + dato3Hidden + '&cual=' + textInput2 + "&color=" + selectedColor;
    }


    function info(informacion) { 
      var modal3 = document.getElementById("myModal3");
      var modalData3 = document.getElementById("modalData3");    
      modalData3.innerHTML = informacion;
      $(modal3).modal('show');
    }