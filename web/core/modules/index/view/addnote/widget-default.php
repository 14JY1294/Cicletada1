<?php

if(count($_POST)>0){
	$user = new NoteData();
	$user->texto = $_POST["texto"];
	$user->usuario_id = $_SESSION["user_id"];
	$user->creado = "NOW()";
	$user->add();

print "<script>window.location='index.php?view=notes';</script>";


}


?>