<?php 

$user = " ";

if (isset($_POST["user"])) {
	$user = $_POST["user"];
}

$pass = " ";

if (isset($_POST["pass"])) {
	$pass = $_POST["pass"];
}


if($user === "aroque" && $pass === "mandingo21"){
	header("Location: index.php?pg=inicio");
}

?>