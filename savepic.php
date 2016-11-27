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

$foto ="nada";
$usr = "aroque";

if (isset($_POST['usr'])) {
	$usr = $_POST['usr'];
}

if (isset($_POST['foto'])) {
	$foto = $_POST['foto'];
}

$database->update("usuarios",["foto" => $foto], ["usuario" => $usr]);

$arr = array ('response'=>'correcto','comment'=> $usr."and ".$foto );
	echo json_encode($arr);
 ?>