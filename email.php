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
$correo = "";

if (isset($_POST['email'])) {
	$correo = $_POST['email'];
}


$token = $database -> get("usuarios","token",["correo" => $correo]);


$to = $correo;
$subject = "Actualiza tu correo en IASK";
$txt = '
<html>
<head>
<title>IASK EMAIL</title>


</head>
<body style="color:black;">

<div class="row center">
	<h1 class="center" style="text-align:center; font-size:90px;">IASK</h1>
</div>
<p class="row container" style="font-size:30px;">
	Este correo es para confirmar que haz solicitado un cambio de correo. si es asi copia este TOKEN: <span class="cyan-text" style="color:DeepSkyBlue;">'.$token.'</span> en el formulario de cambio de correos de IASK
</p>

<footer class="row container" style="background-color:black; color:white; font-size:30px; height:120px; padding:20px 20px 20px 20px;">
	<div class="col s4 right-align">Creado por: <b style="color:orange; ">Aroque</b></div>
	<div class="col s8 ">Contacto: <a style="color:teal;" href="mailto:roque09215@gmail.com" target="_blank class="teal-text text-lighthen-4 ">roque510@hotmai.com</a><span class="white-text"> - </span>
	<a href="mailto:roque09215@gmail.com" target="_blank" class="teal-text text-lighthen-4 " style="color:teal;">roque09215@gmail.com</a></div>
	<br>
	
</footer>


</body>
</html>
'
;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: webmaster@example.com" . "\r\n" .
"CC: roque510@hotmail.com";

mail($to,$subject,$txt,$headers);



	$arr = array ('response'=>'correct','comment'=> "Correo enviado!".$token);
	echo json_encode($arr);


?>

