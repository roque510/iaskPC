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

if ($database->has("usuarios", [
	"AND" => [
		"OR" => [
			"usuario" => $usr
		]
		
		,
		"pass" => $pwd
	]
]))
{
	
	$_SESSION['usr'] = $usr;
	$_SESSION['init'] = "usr";
	session_write_close(); 
	$database->update("usuarios",["token" => uniqid()],["usuario" => $usr]);
	$arr = array ('response'=>'correcto','user'=> $usr, 'comment'=>"blank");
	echo json_encode($arr);
}
else
{
	$arr = array ('response'=>'Error','comment'=> 'Usuario o Contraseña incorrecta.' );
	echo json_encode($arr);
}





?>