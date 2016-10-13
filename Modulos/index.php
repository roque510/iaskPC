<?php
session_start();

/*
$_SESSION['usr'] = 'Armando';
$_SESSION['anl'] = 'Armando';
session_unset();
session_destroy();*/





  ?>
  <!DOCTYPE html>
  <html>
    <head>
    <meta charset="UTF-8">
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>


      <link rel="stylesheet" type="text/css" href="css/sweetalert2.css">
      
      <link rel="stylesheet" type="text/css" href="css/style.css">
      

    </head>
    <?php
      if ((!isset($_GET["mod"])) and (!isset($_SESSION['usr']))){      

        echo '<body class="bd_clr" style ="background-color:whitesmoke;">';

      }else
      {
        echo '<body class="bd_clr" style ="background-color:whitesmoke;">';
      }
    ?>
    <div id="response"></div>

  <!-- Modal Structure -->
  <div id="modalDevolucion" class="modal small modal-fixed-footer">
    <div class="modal-content">
      <h4>Atencion!</h4>
      <p>Seleccione un motivo de solicitud</p>

      <form action="devofrm">
      <!--select name="respuestas" id="respuestas">
        <option  value="Nivel de endeudamiento">Nivel de endeudamiento</option>
        <option  value="Edad Insuficiente">Edad Insuficiente</option>
        <option  value="Información Falsa">Información Falsa</option>
        <option  value="Ingresos Insuficientes">Ingresos Insuficientes</option>
        <option  value="Referencias Negativas">Referencias Negativas</option>
        <option  value="Mala referencia externa">Mala referencia externa</option>
        <option  value="Lista Negra">Lista Negra</option>
        <option  value="Política de Teléfonos">Condicionado por prima</option>
        <option  value="Mala referencia interna">Mala referencia interna</option>

      </select-->
      <select name="respuestas" id="respuestas">
        <option value="Escaneo de Documentos">Escaneo de Documentos</option>
        <option value="Actualizar comprobantes de identidad">Actualizar comprobantes de identidad</option>
        <option value="actualizar comprobantes de  ingreso">Actualizar comprobantes de  ingreso</option>


      </select>
    </form>

    </div>
    
    <div class="modal-footer">
      <a href="#!"  class="modal-action modal-close waves-effect waves-green btn-flat ">Cerrar</a>
      <a id="dvfrmbtn" class="modal-action modal-close waves-effect waves-green btn-flat ">Devolver</a>
      
    </div>
      
  </div>

    <div id="modalrechazos" class="modal small modal-fixed-footer">
    <div class="modal-content">
      <h4>Atencion!</h4>
      <p>Seleccione un motivo de solicitud</p>

      <form action="rechfrm">
      <select name="respuestasr" id="respuestasr">
        <option  value="Nivel de endeudamiento">Nivel de endeudamiento</option>
        <option  value="Información Falsa">Información Falsa</option>
        <option  value="Referencias Negativas">Referencias Negativas</option>
        <option  value="Lista Negra">Lista Negra</option>
        <option  value="Política de Teléfonos">Condicionado por prima</option>

      </select>
      <!--select name="respuestas" id="respuestas">
        <option value="Escaneo de Documentos">Escaneo de Documentos</option>
        <option value="Actualizar comprobantes de identidad">Actualizar comprobantes de identidad</option>
        <option value="actualizar comprobantes de  ingreso">Actualizar comprobantes de  ingreso</option>


      </select-->
    </form>

    </div>
    
    <div class="modal-footer">
      <a href="#!"  class="modal-action modal-close waves-effect waves-green btn-flat ">Cerrar</a>
      <a id="rechfrmbtn" class="modal-action modal-close waves-effect waves-green btn-flat ">Rechazar</a>
      
    </div>
      
  </div>


    <div id="modal1" class="modal loadingModal z-depth-0 center">
    <div class="modal-content">
      <div class="wrapper">
    <svg class="hourglass" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 206" preserveAspectRatio="none">
        <path class="middle" d="M120 0H0v206h120V0zM77.1 133.2C87.5 140.9 92 145 92 152.6V178H28v-25.4c0-7.6 4.5-11.7 14.9-19.4 6-4.5 13-9.6 17.1-17 4.1 7.4 11.1 12.6 17.1 17zM60 89.7c-4.1-7.3-11.1-12.5-17.1-17C32.5 65.1 28 61 28 53.4V28h64v25.4c0 7.6-4.5 11.7-14.9 19.4-6 4.4-13 9.6-17.1 16.9z"/>
        <path class="outer" d="M93.7 95.3c10.5-7.7 26.3-19.4 26.3-41.9V0H0v53.4c0 22.5 15.8 34.2 26.3 41.9 3 2.2 7.9 5.8 9 7.7-1.1 1.9-6 5.5-9 7.7C15.8 118.4 0 130.1 0 152.6V206h120v-53.4c0-22.5-15.8-34.2-26.3-41.9-3-2.2-7.9-5.8-9-7.7 1.1-2 6-5.5 9-7.7zM70.6 103c0 18 35.4 21.8 35.4 49.6V192H14v-39.4c0-27.9 35.4-31.6 35.4-49.6S14 81.2 14 53.4V14h92v39.4C106 81.2 70.6 85 70.6 103z"/>
    </svg>
</div>

    
      </div>
  </div>
    
     <?php 


      require_once ('medoo.php');
      require_once('funciones.php');
      require_once('config.php');
      $page = "inicio";
      if (isset($_GET['pg'])) {
        $page = $_GET['pg'];
      }


      if(!isset($_SESSION['usr'])){
        modulo('login');
      }
      else {

        

      

      modulo('topheader'); 
      

      
      

      
        if (file_exists ("Modulos/".$page.".modulo.php")) {
          modulo($page);
        }
        else{
          modulo('error');
        }

        modulo('footer');
        

      

    }
  
      //modulo('login');
      //modulo('cliente2');
      //modulo('seguridad');
      // modulo('mant_seguridad');
      //modulo('listboxs.js');


    ?>






      <!--Import jQuery before materialize.js-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.1/Chart.js"></script>
      <script type="text/javascript" src="js/chart.js"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>


      <script type="text/javascript" src="js/magic.js"></script>
      <script type="text/javascript" src="js/jquery.validate.js"></script>
      <script type="text/javascript" src="js/messages_es.js"></script>
    <script src="js/sweetalert2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.1/Chart.bundle.js"></script>
    <script type="text/javascript" src="js/init.js"></script>

<script>
 

    </script>

    <script src="dist/sweetalert2.js"></script>
    <script src="js/dropzone.js"></script>
    </body>
  </html>

