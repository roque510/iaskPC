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

  $datas = $database->select("guia","*", [
    "creador" => $_SESSION['usr']
  ]);
   

  foreach($datas as $data)
  {
  ?>
  
    <li class="">
       <div class="collapsible-header transparent white-text shadow row">  

          <div class="col s12 m4">
            <i class="material-icons">filter_drama</i>
            <?php echo $data['Nombre']?>

          </div>
          <div class="col s12 m8 row container right white-text shadow">
           

            <div class="col m4  pdefault shadow" style="text-align: right;">Estatus: <span style="margin-left:10px;" class=""> Activo  </span></div>

            <div class="col m4  pdefault shadow" style="text-align: right;">Porcentaje: <span style="margin-left:10px;" class=""> <?php echo $data['Calificacion']; ?>    </span> </div>
             <div class="col m4  left">

              <i idGuia="<?php echo $data['Idguia'];?>" Nombre="<?php echo $data['Nombre'];?>" class="material-icons stroke delete deleteG right">delete</i>
              
              <a class="white-text" href="?pg=viewGuide&id=<?php echo $data['Idguia']; ?>"><i  class="material-icons  view right">remove_red_eye</i></a>


             </div>

          </div>
       </div>      

      <div class="collapsible-body colab white-text"><p><?php echo $data['Desc']; ?></p></div>
    </li>

       

    <?php  }//fin del foreach
    }//fin else ?>
   
  </ul>

</div>
   