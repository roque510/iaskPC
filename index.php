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


      if(false/*!isset($_SESSION['usr'])*/){
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
    <script src="http://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
      <script type="text/javascript" src="js/init.js"></script>
      <script type="text/javascript" src="js/magic.js"></script>
      <script src="js/rating.min.js"></script>
      <script type="text/javascript">
          // target element
var el = document.querySelector('#el');

// current rating, or initial rating
var currentRating = 4;

// max rating, i.e. number of stars you want
var maxRating = 5;

// callback to run after setting the rating
var callback = function(rating) { alert(rating); };

// rating instance
var myRating = rating(el, currentRating, maxRating, callback);
      </script>
      </div>
    </body>
  </html>
