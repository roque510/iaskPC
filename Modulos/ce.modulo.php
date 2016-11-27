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

$email = $database -> get("usuarios","correo",["usuario" => $_SESSION['usr']]);


?>

<div class="row container">

        <div class="col s12 m12">
      		<a id="btnToken" email="<?php echo $email; ?>" class="waves-effect waves-light btn right" href="#"><i class="material-icons left">toys</i>Obtener Token</a>
      	</div>
</div>

<div class="row container">
	    <div class="input-field col s12 borf h1">

          <input id="nuevoCorreo" type="text" class="font60 validate white-text shadow center">
          <label for="nuevoCorreo"><span class="h3 white-text shadow">Nuevo Correo</span></label>
        </div>
</div>

<div class="row container">
	    <div class="input-field col s12 m4 borf h1">
          <input id="token" placeholder="E.G. 37Q763hb" type="text" class="font60 validate white-text shadow center">
          <label for="token"><span class="h3 white-text shadow">Token de Cambio</span></label>
        </div>
      	<div class="col s6 m4">
      		<a class="waves-effect waves-light btn right back" href="#"><i class="material-icons left">undo</i>Regresar</a>
      	</div>
      	<div class="col s6 m4">
      		<!--a id="cemail" class="waves-effect waves-light btn"><i class="material-icons left">save</i>Salvar</a -->
          <a id="emailS" class="waves-effect waves-light btn"><i class="material-icons left">save</i>Salvar</a>
      	</div>
</div>

<?php 
//mail("roque510@hotmail.com", "subject", "message");
 ?>

