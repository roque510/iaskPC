<?php 
require("config.php");

$exists = false;

if (isset($_SESSION['usr'])) {
	$user = $_SESSION['usr'];
}
else
	$user = "";

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
?>
<div class="row container">
	<div class="col s12 m6">
		<img id="picEdit" src="<?php echo $profile['foto']; ?>" onError="this.onerror=null;this.src='img/perfil.png';">
	</div>

        <div class="input-field col s12 m6 white-text">
          <input placeholder="Pega la url de tu imagen aqui" id="first_name" type="text" class="validate">
          <label for="first_name" class="white-text shadow">URL</label>
<a class="waves-effect waves-light btn back" href="#"><i class="material-icons left">undo</i>Regresar</a>
<a class="waves-effect waves-light btn" ><i class="material-icons right">save</i>Guardar</a>

        </div>
</div>
<?php



}
else{
	echo "<h1 class='white-text row center shadow font60'>Este usuario no existe...</h1>";
}