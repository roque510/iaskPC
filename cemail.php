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
$token = "";
$yes = "no";
$pass = false;

if (isset($_POST['email'])) {
	$correo = $_POST['email'];
}

if (isset($_POST['nemail'])) {
	$ncorreo = $_POST['nemail'];
}

if (isset($_POST['token'])) {
	$token = $_POST['token'];
}

if ($database->has("usuarios", [
	"AND" => [
		"correo" => $correo,
		"token" => $token
	]
]))
{
	$pass = true;
}
else
{
	$pass = false;
}


$to = $ncorreo;
$subject = "Correo nuevo, IASK";
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
	Para poder activar este correo haz click en este link! <a href="http://localhost/IASK/?pg=new&c='.$ncorreo.'&t='.$token.'&v='.$correo.'" target="_blank" class="cyan-text">http://localhost/IASK/?pg=new&c='.$ncorreo.'&t='.$token.'&v='.$correo.'</a>
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
$headers .= "From: webmaster@iask.com" . "\r\n" .
"CC: roque510@hotmail.com";



if ($pass) {
	$yes = "yes";
	mail($to,$subject,$txt,$headers);
}

	$arr = array ('response'=>'correct','comment'=> $yes."correo nuevo es ".$ncorreo);
	echo json_encode($arr);






 ?>