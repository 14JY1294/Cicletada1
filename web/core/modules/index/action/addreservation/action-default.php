<?php

$r = new EventData();
$r->titulo = $_POST["titulo"];
$r->descripcion = $_POST["descripcion"];
$categoria_id = "NULL";
if($_POST["categoria_id"]!=""){ $categoria_id = $_POST["categoria_id"]; }
$r->categoria_id = $categoria_id;
$project_id = "NULL";
if($_POST["projecto_id"]!=""){ $projecto_id = $_POST["projecto_id"]; }
$r->projecto_id = 1;
$r->fecha = $_POST["fecha"];
$r->hora = $_POST["hora"];
$r->usuario_id = $_SESSION["user_id"];
$r->add();

Core::redir("./index.php?view=reservations");
?>