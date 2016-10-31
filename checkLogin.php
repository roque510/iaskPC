<?php 
session_start();


$user = " ";

if (isset($_POST["user"])) {
	$user = $_POST["user"];
}

$pass = " ";

if (isset($_POST["pass"])) {
	$pass = $_POST["pass"];
}


if($user === "aroque" && $pass === "mandingo21"){
	$_SESSION['usr'] = "aroque";
	header("Location: index.php");
	
}

	


?>