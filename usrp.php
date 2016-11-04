<?php 
session_start();
require_once ('medoo.php');
require_once('funciones.php');
require_once('config.php');


$usr = "";
$pwd = "";
$admin = "no es admin";

if (isset($_POST['usr'])) {
	$usr = $_POST['usr'];
}
if (isset($_POST['pwd'])) {
	$pwd = md5($_POST['pwd']);
}

$database = new medoo([
          'database_type' => 'mysql',
          'database_name' => $DB,
          'server' => $SVR,
          'username' => $USR,
          'password' => $PW,
          'charset' => 'utf8'
        ]);


$uid = $database->get("usuarios", "id", [
	"usuario" => $alias
]);


if ($database->has("usuarios", [
	"AND" => [
		"OR" => [
			"usuario" => $name
		]
		
		,
		"pass" => $pwd
	]
]))
{
	
	$_SESSION['usr'] = $alias;
	$_SESSION['uid'] = $uid;

	$arr = array ('response'=>'correcto','user'=> $name, 'comment'=>"blank");
	echo json_encode($arr);
}
else
{
	$arr = array ('response'=>'Error','comment'=> 'Usuario o Contraseña incorrecta.' );
	echo json_encode($arr);
}





?>