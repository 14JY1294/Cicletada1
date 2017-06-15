<?php

if(count($_POST)>0){
	$user = EventData::getById($_POST["id"]);
	$user->titulo = $_POST["titulo"];

	$categoria_id = "NULL";
	if($_POST["categoria_id"]!=""){ $categoria_id = $_POST["categoria_id"]; }
	$user->categoria_id = $categoria_id;

	$projecto_id = "NULL";
	if($_POST["projecto_id"]!=""){ $projecto_id = $_POST["projecto_id"]; }
	$user->projecto_id = $projecto_id;

	$user->fecha = $_POST["fecha"];
	$user->hora = $_POST["hora"];
	$user->descripcion = $_POST["descripcion"];
	$user->update();


	print "<script>window.location='index.php?view=reservations';</script>";


}


?>