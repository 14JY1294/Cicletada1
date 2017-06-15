<?php

if(count($_POST)>0){
	$user = new PacientData();
	$user->nombre = $_POST["nombre"];
	$user->apellido = $_POST["apellido"];
	$user->direccion = $_POST["direccion"];
	$user->email = $_POST["email"];
	$user->telefono = $_POST["telefono"];
	$user->add();

print "<script>window.location='index.php?view=pacients';</script>";


}


?>