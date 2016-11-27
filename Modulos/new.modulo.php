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

$passA =  true;

if (!isset($_SESSION['usr'])) {
	modulo("error");
	$passA =  false;
}

if (!isset($_GET['c'])) {
	modulo("error");
	$passA =  false;
}

if (!isset($_GET['v'])) {
	modulo("error");
	$passA =  false;
}

if (!isset($_GET['t'])) {
	modulo("error");
	$passA =  false;
}


if($passA){
$correo = $_GET['c'];
$vcorreo = $_GET['v'];
$token = $_GET['t'];
$pass =  false;


if ($database->has("usuarios", [
	"AND" => [
		"correo" => $vcorreo,
		"token" => $token
	]
]))
{
	$pass = true;
	$resp = "Correo actualizado exitosamente!";
	$tipo = "success";
}
else
{
	$resp = "El token que haz ingresado no es correcto...";
	$pass = false;
	$tipo = "error";
}


if ($pass) {
	$yes = "yes";
	$database->update("usuarios",["correo" => $correo],["token" => $token]);
}


}





?>
<div id="<?php echo $tipo; ?>" class="row container"><?php echo $resp ?></div>