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

$exists = false;

if (isset($_GET['usr'])) {
	$user = $_GET['usr'];
}
else
	$user = $_SESSION['usr'];

    if ($database->has("usuarios", [

      "usuario" => $user

]))
{
  $exists = true;
}

if($exists){
	$profile = $database->get("usuarios","*", [
		"usuario" => $user
	]);

	$cali = $profile["calificacion"];
?>

<div class="row container">
	
		<div class="col s12 m4">
				
				<span id="picWrapper" class="circle">
				</span>
					<img id="profilePic" height="135" width="135" class="circle" src="<?php echo $profile['foto']; ?>" onError="this.onerror=null;this.src='img/perfil.png';">
					<a href="?pg=picEdit" class="btn-floating waves-effect waves-light amber profileEdit" >
      					<i class="large material-icons">mode_edit</i>
    				</a>
    				<br>
    				<br>
					<a class="waves-effect waves-light btn " id="btncambiarClave" href="?pg=cc"><i class="material-icons left">lock</i>Cambiar Contraseña</a>
					<a class="waves-effect waves-light btn" href="?pg=ce"><i class="material-icons left">email</i>Cambiar Correo</a>
				

			
			
		</div>
	

	<div class="col s12 m8 ">
		<h2 class="white-text shadow borf" >Usuario: <span><?php echo $profile['usuario']; ?></span></h2>
		<h2 class="white-text shadow borf" >Correo: <span><?php echo $profile['correo']; ?></span></h2>
		<h2 class="white-text shadow borf" >Guias Creadas: <span>99</span></h2>
		<h2 class="white-text shadow borf" >Promedio de estudio: <span>80%</span></h2>
		<h2 class="white-text shadow borf" >Calidad de creador: <span><br>
                <div id="rating">
                  <div class="" style="width: 305px; height:50px;">
                    <div class="starrow"><div><i class="starhalf amber-text material-icons prefix"><?php echo $cali>0?'star':'star_border'; ?></i></div></div>
                    <div class="starrow"><div><i class="starhalf amber-text material-icons prefix"><?php echo $cali>1?'star':'star_border'; ?></i></div></div>
                    <div class="starrow"><div><i class="starhalf amber-text material-icons prefix"><?php echo $cali>2?'star':'star_border'; ?></i></div></div>
                    <div class="starrow"><div><i class="starhalf amber-text material-icons prefix"><?php echo $cali>3?'star':'star_border'; ?></i></div></div>
                    <div class="starrow"><div><i class="starhalf amber-text material-icons prefix"><?php echo $cali>4?'star':'star_border'; ?></i></div></div>
                  </div>                  
                </div>  
		</span></h2>
	</div>

</div>

<div class="row container">
	<div class="col s12 center">
		<h4 class="shadow teal-text">Si quieres calificar este usuario, asegurate de puntuar sus guias!</h4>
	</div>
</div>

<?php



}
else{
	echo "<h1 class='white-text row center shadow font60'>Este usuario no existe...</h1>";
}

 ?>

