<?php 
require("config.php");


$database = new medoo([
          'database_type' => 'mysql',
          'database_name' => $DB,
          'server' => $SVR,
          'username' => $USR,
          'password' => $PW,
          'charset' => 'utf8'
        ]);

$buscar = false;

?>
<div class="blank container">
  <div class="row infowrap ">
    <div class="col s12">
        <div class="info">
          <h1 class="white-text">Guias <span>|</span><a class="crear" href="?pg=create">Crear Guia</a></h1>
        </div>    
    </div>
  </div>


  <ul class="collapsible borderless z-depth-0 transparent" data-collapsible="accordion">

  <?php 
    if ($database->has("guia", [

      "creador" => $_SESSION['usr'],

]))
{
  $buscar = true;
}

if (!$buscar) {
  echo '<li class="grey white-text">No hay guias aun... :C</li>';
}else
{

  ?>
  
    <li class="">
       <div class="collapsible-header transparent white-text shadow row">  

          <div class="col s12 m4">
            <i class="material-icons">filter_drama</i>
            <?php echo $buscar?>

          </div>
          <div class="col s12 m8 row container right white-text shadow">
           

            <div class="col m4  pdefault shadow" style="text-align: right;">Estatus: <span style="margin-left:10px;" class=""> Activo  </span></div>

            <div class="col m4  pdefault shadow" style="text-align: right;">Porcentaje: <span style="margin-left:10px;" class=""> 0%    </span> </div>
             <div class="col m4  left">             
              <i class="material-icons stroke delete right">delete</i>
              <i class="material-icons stroke edit right">mode_edit</i>
             </div>

          </div>
       </div>      

      <div class="collapsible-body colab white-text"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>

        <li class="">
       <div class="collapsible-header transparent white-text shadow row">  

          <div class="col s12 m4">
            <i class="material-icons">share</i>
            Second

          </div>
          <div class="col s12 m8 row container right white-text shadow">
           

            <div class="col m4  pdefault shadow" style="text-align: right;">Estatus: <span style="margin-left:10px;" class=""> Activo  </span></div>

            <div class="col m4  pdefault shadow" style="text-align: right;">Porcentaje: <span style="margin-left:10px;" class=""> 0%    </span> </div>
             <div class="col m4  left">             
              <i class="material-icons stroke delete right">delete</i>
              <i class="material-icons stroke edit right">mode_edit</i>
             </div>

          </div>
       </div>      

      <div class="collapsible-body colab white-text"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>

        <li class="">
       <div class="collapsible-header transparent white-text shadow row">  

          <div class="col s12 m4">
            <i class="material-icons">lock</i>
            third

          </div>
          <div class="col s12 m8 row container right white-text shadow">
           

            <div class="col m4  pdefault shadow" style="text-align: right;">Estatus: <span style="margin-left:10px;" class=""> Activo  </span></div>

            <div class="col m4  pdefault shadow" style="text-align: right;">Porcentaje: <span style="margin-left:10px;" class=""> 0%    </span> </div>
             <div class="col m4  left">             
              <i class="material-icons stroke delete right">delete</i>
              <i class="material-icons stroke edit right">mode_edit</i>
             </div>

          </div>
       </div>      

      <div class="collapsible-body colab white-text"><p>Lorem ipsum dolor sit amet.</p></div>
    </li>

    <?php  } ?>
   
  </ul>

</div>
   