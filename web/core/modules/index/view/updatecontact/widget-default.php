<?php

if(count($_POST)>0){
	$user = ContactData::getById($_POST["id"]);

	$user->nombre = $_POST["nombre"];
	$user->apellido = $_POST["apellido"];
	$user->direccion = $_POST["direccion"];
	$user->email = $_POST["email"];
	$user->telefono = $_POST["telefono"];
	$user->update();


print "<script>window.location='index.php?view=contacts';</script>";


}


?>