      <div class="row">
        <div class="col-md-6">

          <div class="input-group">
            <input type="search" id="buscar" class="form-control rounded" placeholder="Busqueda" aria-label="Buscar" aria-describedby="search-addon" onchange="funcionControl()" />&nbsp&nbsp
            <button type="button" class="btn btn-outline-primary" onchange="funcionControl()">Buscar</button>
          </div>
        </div>


        <div class="col" id="mostrar" style="display:none;">
          <div class="input-group mb-3">
            <select class="custom-select" id="desplegar" onchange="myFunction()">
            </select>
            <div class="input-group-append">
              <label class="input-group-text" for="desplegar">Options</label>
            </div>
          </div>
        </div>

      </div>


      <br>
      <form action="<?php echo base_url("Gestion_C/recibirFormulario"); ?>" method="post" id="formulario" onsubmit="return comprobacionesFormulario()">

        <div class="form-group">

          <div class="row">

            <div class="col">
              <label for="">Cotxe:</label>
              <input type="text" class="form-control" id="cotxe" name="cotxe" placeholder="">
              <span class="message-error">
            </div>


            <div class="col">
              <label for="">Matricula:</label>
              <input type="text" class="form-control" id="matri" name="matri" placeholder="Introduce la Matricula">
              <span class="message-error">
            </div>

          </div>



          <br>
          <div class="row">

            <div class="col">
              <label for="">Sección:</label>
              <input type="text" class="form-control" id="seccion" name="seccion" placeholder="">
              <span class="message-error">
            </div>

            <div class="col">
              <label for="">Data:</label>
              <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Introduce la Fecha" onchange="mirarFEcha()">
              <span class="message-error">
            </div>

          </div>


          <br>
          <div class="row">

            <div class="col">
              <label for="">Km cag:</label>
              <input type="text" class="form-control" id="kmcag" name="kmcag" placeholder="">
              <span class="message-error">
            </div>

            <div class="col">
              <label for="">km particular:</label>
              <input type="text" class="form-control" id="kmpart" name="kmpart" placeholder="">
              <span class="message-error">
            </div>

          </div>


          <br>
          <div class="row">

            <div class="col">
              <label for="">Km propios acumulados:</label>
              <input type="text" class="form-control" id="propi" name="propi" placeholder="Introduce la Fecha">
              <span class="message-error">
            </div>

            <div class="col">
              <label for="">¿Particular o empresa?</label>
              <br>
              <input type="radio" id="particular" name="opcion" value="particular">
              <label for="particular">Particular</label><br>
              <input type="radio" id="empresa" name="opcion" value="empresa">
              <label for="empresa">Empresa</label><br>

              <span class="message-error">
            </div>

          </div>


        </div>



        <br>
        <div class="form-group">

          <div class="row">

            <div class="col">
              <label for="">Nombre:</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="introduce tu nombre">
              <span class="message-error">
            </div>

            <div class="col">
              <label for="">DNI:</label>
              <input type="text" class="form-control" id="DNI" name="DNI" placeholder="Introduce tu DNI">
              <span class="message-error">
            </div>

          </div>

          <br>
          <div class="row">

            <div class="col">
              <label for="">Población:</label>
              <input type="text" class="form-control" id="poblacion" name="poblacion" placeholder="Introdcue tu población">
              <span class="message-error">
            </div>

            <div class="col">
              <label for="">Email:</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Introduce un email">
              <span class="message-error">
            </div>

          </div>

        </div>
        <button type="submit" class="btn btn-primary" value="Submit">Enviar</button>
      </form>



      <br>
      <br>

      <!-- parte de cargar la imagen -->
      <form action="../Gestion_C/cargar_archivo/" method="post" enctype="multipart/form-data">
        <div class="row">

          <div class="col-md-6">
            <input class="form-control form-control-sm" type="file" name="upload">
          </div>

          <div class="col">

          </div>

        </div>

        <br>
        <button type="submit" class="btn btn-primary" value="Submit">Enviar</button>

      </form>





      <script>
        function comprobacionesFormulario() {
          console.log('entro a las comprovaciones');

          var cocheC = document.getElementById("cotxe").value;
          cocheC = cocheC.toUpperCase();
          var matriculaC = document.getElementById("matri").value;
          matriculaC = matriculaC.toUpperCase();
          var seccionC = document.getElementById("seccion").value;
          seccionC = seccionC.toUpperCase();
          var fechaC = document.getElementById("fecha").value;
          var kmcagC = document.getElementById("kmcag").value;
          var kmpartC = document.getElementById("kmpart").value;
          var propiC = document.getElementById("propi").value;
          var particularC = document.getElementById("particular");
          var empresaC = document.getElementById("empresa");



          var nombreC = document.getElementById("nombre").value;
          seccionC = seccionC.toUpperCase();
          var dniC = document.getElementById("DNI").value;
          seccionC = seccionC.toUpperCase();
          var poblacionC = document.getElementById("poblacion").value;
          seccionC = seccionC.toUpperCase();
          var emailC = document.getElementById("email").value;


          if (/([a-zA-Z]{1})+([0-9]{3})/.test(cocheC) == false) {
            alert("el coche debe tener 4 carácteres, el primero debe ser una letra y los otros tres deben ser numericos");
            return false;
          }

          if (/([0-9]{4})+([a-zA-Z]{3})/.test(matriculaC) == false) {
            alert("la matricula debe comenzar por 4 carácteres númericos y terminar con tres letras");
            return false;
          }

          if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(emailC) == false) {
            alert("El email ingresado no es valido");
            return false;
          }

          if (/([0-9]{4})/.test(seccionC) == false) {
            alert("la sección debe tener 4 carácteres númericos");
            return false;
          }

          if (/([a-zA-Z]{3,50})/.test(nombreC) == false) {
            alert("el nombre debe tener al menos tres carácteres");
            return false;
          }
          if (/([0-9]{8})+([a-zA-Z]{1})/.test(dniC) == false) {
            alert("El DNI debe empezar por 8 carácteres númericos y terminar en una letra");
            return false;
          }

          if (particularC.checked) {
            particularC.value = "P";
            console.log(particularC.value);
          } else {
            particularC.value = "";
            console.log(particularC.value);
          }


        }


        function funciondePrueva(buscar) {


          $.ajax({
            type: 'POST',
            dataType: "text json",
            url: "../Gestion_C/consulta_datos/",
            data: {
              buscar: buscar
            },
            success: function(msg) {
              console.log(msg);

              var aux = msg.length;
              console.log(aux);
              var sel = "";
              var opt = "";

              for (var i = 0; i < msg.length; i++) {
                sel = document.getElementById('desplegar');
                opt = document.createElement('option');

                opt.appendChild(document.createTextNode(msg[i].CAR + ' ' + msg[i].NOM + ' ' + msg[i].SECCION));
                opt.value = msg[i].CAR;
                sel.appendChild(opt);

                if (msg) {
                  $('#desplegar').empty();
                  var contadorAux = 0;
                  $('#desplegar').append("<option value='0'  ></option>");
                  while (contadorAux != msg.length) {
                    $('#desplegar').append("<option  value='" + msg[contadorAux].CAR + "'>" + msg[contadorAux].NOM + ' - ' + msg[contadorAux].CAR + ' - ' + msg[contadorAux].SECCION + "</option>");
                    contadorAux++;
                  }

                }

                // espacioBlanco();


              }


            },
            fail: function(jqXHR, textStatus, errorThrown) {
              $(".loader").hide();
              console.log('Could not get posts, server response: ' + textStatus + ': ' + errorThrown);
            }
          });

        }



        function funcionReferencia(buscarReferencia) {

          $.ajax({
            type: 'POST',
            dataType: "text json",
            url: "../Gestion_C/consulta_referencia/",
            data: {
              buscarReferencia: buscarReferencia
            },
            success: function(msg) {
              console.log(msg);
              if (msg) {
                document.getElementById("matri").value = msg[0].MATRICULA;
                document.getElementById("cotxe").value = msg[0].CAR;
                document.getElementById("seccion").value = msg[0].SECCION;
                document.getElementById("fecha").value = msg[0].FechaRef;
                document.getElementById("kmcag").value = msg[0].KMCAG;
                document.getElementById("kmpart").value = msg[0].KMPART;
                document.getElementById("propi").value = msg[0].KMPROPIACUM;
                document.getElementById("nombre").value = msg[0].NOM;
                document.getElementById("DNI").value = msg[0].DNI;
                document.getElementById("poblacion").value = msg[0].POBLACIO;
                document.getElementById("email").value = msg[0].EMAIL;


              } else {
                borrarformulario();
              }

              Ocultarmostrar();
            },


            fail: function(jqXHR, textStatus, errorThrown) {
              $(".loader").hide();
              console.log('Could not get posts, server response: ' + textStatus + ': ' + errorThrown);
            }
          });

        }


        // function espacioBlanco(){
        // var valorDesplegar = document.getElementById("desplegar").value[0];
        //  if(valorDesplegar==0){

        //   var selectobject = document.getElementById("desplegar"); //REVISAR EL LUNES
        //     if (selectobject.options[0].value == '0'){
        //         selectobject.remove(0);
        //         console.log('se hizo');
        //     }

        //  console.log('la opcion 1 tiene el valor:'+ valorDesplegar);
        //  }
        // }



        function Ocultarmostrar() {
          document.getElementById("mostrar").style.display = "none";
        }

        function borrarformulario() {
          $("#formulario")[0].reset();

        }

        function myFunction() {
          var x = document.getElementById("desplegar").value;
          funcionReferencia(x);
        }

        function mirarFEcha() {
          var fechaf = document.getElementById("fecha").value;
          console.log(fechaf);

        }


        function mostrar() {
          document.getElementById("mostrar").style.display = "";

        }


        function funcionControl() {
          var buscar = document.getElementById("buscar").value;
          buscar = buscar.toUpperCase();



          if (/([a-zA-Z]{1})+([0-9]{3})/.test(buscar) == false && buscar.length > 2) {
            mostrar();
            funciondePrueva(buscar);

          } else {
            funcionReferencia(buscar);
          }

        }
      </script>