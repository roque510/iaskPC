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

$idGuia = $database->insert("guia", [
	"Nombre" => $_POST["titulo"],
	"Desc" => $_POST["desc"],
	"creador" => $_POST["usr"],
	"Npreguntas" => count($_POST["guia"]) - 1
]);

	//El arreglo tiene [0]#Pregunta [1]Pregunta	[2]Respuesta [3]TipoDePregunta [4]RespuestaMala1 [5]RespuestaMala2
	
	foreach($_POST["guia"] as $k => $val) {
		 if ($k < 1) continue;
			$database->insert("pregres", [
					"Pregunta" => $val[1],
					"Respuesta" => $val[2],
					"tipo" => $val[3],
					"RespMala1" => $val[4],
					"RespMala2" => $val[5],
					"Idguia" => $idGuia
					]);	
    		//echo "Pregunta #".$val[0].": ".$val[1];
			//echo "<br>";
			//echo "La respuesta es: ".$val[2];
			//echo "<br>";
			//echo "El tipo de pregunta es: ".$val[3];
			//echo "<br>";
			//echo "Respuesta Mala 1: ".$val[4];
			//echo "<br>";
			//echo "Respuesta Mala 1: ".$val[5];
	}

	$arr = array ('response'=>'correcto','titulo'=> $_POST["titulo"],'user'=> $_POST['usr'] ,'comment'=>"blank");
	echo json_encode($arr);


?>