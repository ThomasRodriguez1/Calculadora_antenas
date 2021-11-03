<!DOCTYPE html>
<html>

<header>
    <link rel="stylesheet" href="../css/calculadora.css">
    <title></title>
    <div class="flexBox">
        <img class="Logos" src=https://www.cicata.ipn.mx/assets/files/main/img/template/pleca-gob.png
            alt="Imagen_gobierno">
        <img class="Cicata">
        <img class="imagenupiita" src="https://www.upiita.ipn.mx/images/upiita-logo.png"
            alt="Loguito ipn">
    </div>
    <div class="titulos">
        <h1>Calculadora de líneas de transmisión</h1>
    </div>
</header>

<body>
    <div class="Formulario">
      
      
        <fieldset>
                <legend class="titulos" >Eleccion de linea de transmision</legend>
                <div class="Seleccion_lineas">
                  <div class="tipo_de_linea">
                    <label>Tipo de Linea</label>
        
                      <select class="formulario_select" id="tipo" name="Linea">
                        <optgroup>
                          <option disabled selected >Seleccione una opcion</option>
                          <option onmouseup="Tipo_Linea();" value="1">Microcinta</option>
                          <option onmouseup="Tipo_Linea();" value="2">Cable coaxial</option>
                          <option onmouseup="Tipo_Linea();" value="3">Línea bifilar o de alambres paralelos</option>
                        </optgroup>
                      </select>
        
                  </div>
                    
                  <div>
                      <img class="img_linea" src=http://www.emtalk.com/images/calculator/ms_model.jpg alt="Imagen_micrcointa" id="img_microcinta">
                      <img class="img_linea" src="https://www.pasternack.com/Images/reference-tools/images/coax2_pic.png" alt="Imagen_coaxial" id="img_coaxial">
                      <img class="img_linea" src="../img/bifilar.jpg" alt="Imagen_fibrilar" id="img_fibrilar">
                  </div>
                </div>
                

        </fieldset>
        
        <fieldset class="fieldset_datos" id="datos_obligatorios">
          
          <legend class="titulos" >Datos necesarios para la linea de transmision</legend>

          
          <div class="Seleccion_lineas" >
                  <div>
                    <label class="formulario_label" for="dielectrico" >Seleccione material del dielectrico</label>
                    <select class="formulario_dielectricos" id="dielectrico" name="Linea" onchange="quitar_input()">
                      <optgroup id="dielectric_opt">
                        <option disabled selected value="0">Seleccione una opcion</option>
                        <option  value="1">Baquelita</option>
                        <option  value="2">Duroid</option>
                        <option  value="3">Fibra de Vidrio (D Glass) </option>
                        <option  value="4">Fibra de Vidrio (E glass)</option>
                        <option  value="5">FR4</option>
                        <option  value="6">Hule</option>
                        <option  value="7">Mica</option>
                        <option  value="8">Mylar</option>
                        <option  value="9">Nylon</option>
                        <option  value="10">Plexiglass</option>
                        <option  value="11">Poliestireno</option>
                        <option  value="12">Polietileno</option>
                        <option  value="13">Polipropileno</option>
                        <option  value="14">Porcelana</option>
                        <option  value="15">PVC</option>
                        <option  value="16">Teflon</option>
                      </optgroup>
                    </select>
                  </div>
                  
                  <div>
                    <label class="formulario_label_dielectrico" for="dielectrico_in">O ingrese permitividad relativa </label>
                    <input class="formulario_dielectricos_in" type="text"  id="dielectrico_in"  >
                  </div>
            </div>
          

          <div class="microcinta" id="microcinta">

            <div class="Seleccion_lineas">
              <div >
                <div>
                  <label class="formulario_label" for="Espesor_dielectrico">Espesor/alto del dielectrico(h)</label>
                  <input class="formulario_medidas" type="text" placeholder="" id="Espesor_dielectrico" >
                </div>
                <!-- <div>
                  <label class="formulario_label" for="Espesor_linea">Espesor/alto de la linea(t)</label>
                  <input class="formulario_medidas" type="text" id="Espesor_linea" >
                </div> -->
              </div>
              <div>
                <label class="formulario_label_medidas" for="medida_espesor_dielectrico">Indique tamaño</label>
                <select class="formulario_select_medidas" id="medida_espesor_dielectrico_y_linea" name="medida_espesor_dielectrico">
                  <optgroup>
                    <option  value="1">cm</option>
                    <option  value="2">mm</option>
                  </optgroup>
                </select>
              </div>
            </div>

            <div class="Seleccion_lineas">
              <div>
                <label class="formulario_label" for="frecuencia_linea">Frecuencia de la linea</label>
                  <input class="formulario_medidas" type="text" id="frecuencia_linea" >
              </div>
              <div>
                <label class="formulario_label_medidas" for="Hertz">Indique medida</label>
                <select class="formulario_select_medidas_frecuencia" id="Hertz" name="Hertz_medida">
                  <optgroup>
                    <option  value="1">mHz</option>
                    <option  value="2" selected >Hz</option>
                    <option  value="3">kHz</option>
                    <option  value="4">MHz</option>
                    <option  value="5">GHz</option>
                  </optgroup>
                </select>
              </div>
            </div>

        
        
          </div>
    
          <div class="coaxial" id="coaxial">
          <!-- Por ahora nada xd -->
          </div>
  
          <div class="bifilar" id="bifilar">
            <div class="Seleccion_lineas">
              <div>
                <div>
                  <label class="formulario_label" for="Diametro_conductor">Diametro del conductor(d)</label>
                  <input class="formulario_medidas" type="text" id="Diametro_conductor">
                </div>
              </div>
              
              <div>
                <label class="formulario_label_medidas" for="medida_diametros">Indique tamaño</label>
              <select class="formulario_select_medidas" id="medida_diametros"> 
                <optgroup>
                  <option  value="1">cm</option>
                  <option  value="2">mm</option>
                </optgroup>
              </select>
              </div>
              
            </div>
            
          </div>
        </fieldset>
        
      <fieldset class="fieldset_datos" id="impedancias">
        <legend class="titulos" >Impedancia</legend>

        <div class="microcinta" id="microcinta2">
              <div>
                    <div>
                          <label class="formulario_label" for="Impedancia_caracteristica_microcinta">Impedancia Caracteristica en Ω</label>
                          <input class="formulario_input" type="text" placeholder="" id="Impedancia_caracteristica_microcinta" >
                    </div>
                    <div>
                          <label class="formulario_label" for="Longitud_electrica">Longitud electrica en grados</label>
                          <input class="formulario_input" type="text" placeholder="" id="Longitud_electrica" >
                    </div>
              </div>
              <div class="enviar_info">
                  <Button id="btn_dimensiones_microcinta" >Calcular dimensiones de la linea </Button>
              </div>
        </div>
  
        <div class="coaxial" id="coaxial2">
              <div>
                <div>
                      <label class="formulario_label" for="Impedancia_caracteristica_coaxial">Impedancia Caracteristica en Ω</label>
                      <input class="formulario_input" type="text" placeholder="" id="Impedancia_caracteristica_coaxial" >
                </div>
                <div>
                  <label class="formulario_label" for="Frecuencia_corte_coaxial">Frecuencia de corte en GHz</label>
                  <input class="formulario_input" type="text" placeholder="" id="Frecuencia_corte_coaxial" >
                </div>
              </div>
              <div class="enviar_info">
                  <Button id="btn_dimensiones_coaxial" >Calcular dimensiones del cable coaxial </Button>
              </div>
        </div>

        <div class="bifilar" id="bifilar2">         

          <div>
            <div>
                  <label class="formulario_label" for="Impedancia_caracteristica_bifilar">Impedancia Caracteristica en Ω</label>
                  <input class="formulario_input" type="text" placeholder="" id="Impedancia_caracteristica_bifilar" >
            </div>
            <!-- <div>
              <label class="formulario_label" for="Frecuencia_corte_coaxial">Frecuencia de corte en GHz</label>
              <input class="formulario_input" type="text" placeholder="" id="Frecuencia_corte_coaxial" >
            </div> -->
          </div>
          <div class="enviar_info">
              <Button id="btn_dimensiones_bifilar" >Calcular dimensiones de la linea </Button>
          </div>
      
        </div>
      </fieldset>
        
      <fieldset class="fieldset_datos" id="dimensiones">
        <legend class="titulos" >Dimensiones de la linea</legend>

        <div class="microcinta" id="microcinta3">

          <div class="Seleccion_lineas">
            <div >
              <div>
                <label class="formulario_label" for="ancho_linea_microcinta">Ancho de la linea(W)</label>
                <input class="formulario_medidas" type="text" id="ancho_linea_microcinta" >
              </div>
              <div>
                <label class="formulario_label" for="Largo_linea_microcinta">Largo de la linea(L)</label>
              <input class="formulario_medidas" type="text" id="Largo_linea_microcinta">
              </div>
              
            </div>
            <div>
              <label class="formulario_label_medidas" for="medida_ancho_largo_linea">Indique tamaño</label>
              <select class="formulario_select_medidas" id="medida_ancho_largo_linea" name="medida_ancho_linea">
                <optgroup>
                  <option  value="1">cm</option>
                  <option  value="2">mm</option>
                </optgroup>
              </select>
            </div>
          </div>
         

          <div class="enviar_info">
            <Button id="btn_impedancia_microcinta" >Calcular impedancia caracteristica de la linea</Button>
          </div>

        </div>
  
        <div class="coaxial" id="coaxial3">

         <div class="Seleccion_lineas">
            <div >
              <div>
                <label class="formulario_label" for="Diametro_interior">Diametro interior(Di)</label>
                <input class="formulario_medidas" type="text" id="Diametro_interior" >
              </div>
              <div>
                <label class="formulario_label" for="Diametro_exterior">Diametro exterior(Do)</label>
              <input class="formulario_medidas" type="text" id="Diametro_exterior">
              </div>
              
            </div>
            <div>
              <label class="formulario_label_medidas" for="medida_diametro">Indique tamaño</label>
              <select class="formulario_select_medidas" id="medida_diametro"> 
                <optgroup>
                  <option  value="1">cm</option>
                  <option  value="2">mm</option>
                </optgroup>
              </select>
            </div>
          </div>

          <div class="enviar_info">
            <Button id="btn_impedancia_coaxial" >Calcular impedancia caracteristica del cable coaxial</Button>
          </div>

        </div>

        <div class="bifilar" id="bifilar3">
          <div class="Seleccion_lineas">
            <div >
              <div>
                <label class="formulario_label" for="Distancia_conductores">Distancia centro a centro entre conductores(D)</label>
                <input class="formulario_medidas" type="text" id="Distancia_conductores" >
              </div>

            </div>
            <div>
              <label class="formulario_label_medidas" for="medida_diametro_conductores">Indique tamaño</label>
              <select class="formulario_select_medidas" id="medida_diametro_conductores"> 
                <optgroup>
                  <option  value="1">cm</option>
                  <option  value="2">mm</option>
                </optgroup>
              </select>
            </div>
          </div>

          <div class="enviar_info">
            <Button id="btn_impedancia_bifilar" >Calcular impedancia caracteristica del cable coaxial</Button>
          </div>
        
        </div>

      </fieldset>

      
    
  
  
    </div>
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/Permitividad.js"></script>
    <script src="../js/Validar.js"></script>
    <script src="../js/Cambio_Login.js"></script>
    <script src="../js/Microcinta.js"></script>
    <script src="../js/Coaxial.js"></script>
    <script src="../js/Bifilar.js"></script>
    
    
    
  </body>

</html>