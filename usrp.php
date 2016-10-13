<?php 
session_start();
require_once ('medoo.php');
require_once('funciones.php');
require_once('config.php');


$alias = "";
$pass = "";
$admin = "no es admin";

if (isset($_POST['alias'])) {
	$alias = $_POST['alias'];
}
if (isset($_POST['pass'])) {
	$pass = md5($_POST['pass']);
}

$database = new medoo([
          'database_type' => 'mysql',
          'database_name' => $DB,
          'server' => $SVR,
          'username' => $USR,
          'password' => $PW,
          'charset' => 'utf8'
        ]);


$nivel = $database->get("usuarios", "Nivel", [
	"Usuario" => $alias
]);

$uid = $database->get("usuarios", "idUsuario", [
	"Usuario" => $alias
]);


if ($database->has("usuarios", [
	"AND" => [
		"OR" => [
			"Usuario" => $alias
		]
		
		,
		"Password" => $pass
	]
]))
{
	
	$_SESSION['nivel'] = $nivel;
	$_SESSION['usr'] = $alias;
	$_SESSION['uid'] = $uid;

	$arr = array ('response'=>'correcto','user'=> $alias, 'comment'=>$nivel);
	echo json_encode($arr);
}
else
{
	$arr = array ('response'=>'Error','comment'=> 'Usuario o Contraseña incorrecta.' );
	echo json_encode($arr);
}





?>