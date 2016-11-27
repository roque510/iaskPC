<?php 
require("config.php");

$cn = "";
$usr = "";
$pwd = "";


if (isset($_POST['usr'])) {
	$usr = $_POST['usr'];
}

if (isset($_POST['cn'])) {
	$cn = md5($_POST['cn']);
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
	
	$database->update("usuarios",["pass" => $cn],["usuario" => $usr]);

	$arr = array ('response'=>'correcto','comment'=> "Contrasena cambiada exitosamente!" );
	echo json_encode($arr);
}
else
{
	$arr = array ('response'=>'error','comment'=> "la contrasena proporsionada no es la correcta...");
	echo json_encode($arr);
}



?>