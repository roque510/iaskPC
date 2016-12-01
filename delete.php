<?php 
require_once("config.php");

$database = new medoo([
          'database_type' => 'mysql',
          'database_name' => $DB,
          'server' => $SVR,
          'username' => $USR,
          'password' => $PW,
          'charset' => 'utf8'
        ]);

$database->delete("guia", [
	"Idguia" => $_POST["idguia"]
]);
$database->delete("pregres", [
	"Idguia" => $_POST["idguia"]
]);




	$arr = array ('response'=>'correcto','comment'=>"blank");
	echo json_encode($arr);


?>