  <?php session_start(); ?>
  <!DOCTYPE html>
  <html>
    <head>
        <meta charset="utf-8" />
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"/>
      <link type="text/css" rel="stylesheet" href="css/style.css"/>
      <link rel="stylesheet" href="css/rating.min.css">
      <link type="text/css" rel="stylesheet" href="css/font-awesome.css"/>
      <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.0.1/sweetalert2.min.css"/>
      
      

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    <div class="bodyWrap">
      <!--Import jQuery before materialize.js-->


    
<?php 


      require_once ('medoo.php');
      require_once('funciones.php');
      require_once('config.php');
      $page = "inicio";
      if (isset($_GET['pg'])) {
        $page = $_GET['pg'];
      }


      if(!isset($_SESSION['usr'])){
        if($page === "form")
          modulo('form');
        else
          modulo('login');
      }
      else {
        if($page === "login")
        modulo('login');
        else{     

            modulo('header');
            if (file_exists ("Modulos/".$page.".modulo.php")) {
              modulo($page);
            }
            else{
              modulo('error');
            }
        }


      

    }

?>



    <div id="modal1" class="modal z-depth-0 ">
      <div class="modal-content">
        <div class="sk-cube-grid">
          <div class="sk-cube sk-cube1 white"></div>
          <div class="sk-cube sk-cube2 white"></div>
          <div class="sk-cube sk-cube3 white"></div>
          <div class="sk-cube sk-cube4 white"></div>
          <div class="sk-cube sk-cube5 white"></div>
          <div class="sk-cube sk-cube6 white"></div>
          <div class="sk-cube sk-cube7 white"></div>
          <div class="sk-cube sk-cube8 white"></div>
          <div class="sk-cube sk-cube9 white"></div>
        </div>
        
      </div>
    </div>


    <script src="http://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
      <script type="text/javascript" src="js/init.js"></script>
      <script type="text/javascript" src="js/magic.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.0.1/sweetalert2.min.js"></script>
      
      </div>





    </body>
  </html>
