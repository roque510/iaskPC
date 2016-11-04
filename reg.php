<?php 
header("Content-Type: application/json", true);
session_start();
require_once ('medoo.php');
require_once('funciones.php');
require_once('config.php');


$usr = $_POST['usr'];
$pwd = md5($_POST['pwd']);
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$token = uniqid();
$check = false;


$database = new medoo([
          'database_type' => 'mysql',
          'database_name' => $DB,
          'server' => $SVR,
          'username' => $USR,
          'password' => $PW,
          'charset' => 'utf8'
        ]);

if ($database->has("usuarios", [		
			"usuario" => $usr
]))
{
	$arr = array ('response'=>'error','user'=> $name, 'comment'=>"Este usuario ya existe... Prueba con otro nombre.");

}
else
{
	if ($database->has("usuarios", [		
				"correo" => $email
	]))
	{
		$arr = array ('response'=>'error','user'=> $name, 'comment'=>"Este correo ya existe... verifica tu cuenta! revisa el correo en spam");

	}
	else
		$check = true;

}

if ($check) {
		$last_user_id = $database->insert("usuarios", [
	"usuario" => $usr,
	"nombre" => $name,
	"apellido" => $lastname,
	"correo" => $email,
	"pass" => $pwd,
	"token" => $token
	]);

	$arr = array ('response'=>'correcto','user'=> $name, 'comment'=>"blank");
}



$to = $email;
$subject = "CONFIRMACION IASK";
$txt = "Bienvenido a IASK, el proposito de este correo es el verificar tu cuenta! haz click aqui para terminar el regstro de tu cuenta con nosotros! http://www.iask.com/index.php?token=". $token;
$headers = "From: aroque@intrasc.net" . "\r\n" .
"CC: roque510@hotmail.com";

//mail($to,$subject,$txt,$headers);


	
	echo json_encode($arr);

?>