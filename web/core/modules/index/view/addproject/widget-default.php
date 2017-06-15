<?php

if(count($_POST)>0){
	$user = new ProjectData();
	$user->nombre = $_POST["nombre"];
	$user->add();

print "<script>window.location='index.php?view=projects';</script>";


}


?>