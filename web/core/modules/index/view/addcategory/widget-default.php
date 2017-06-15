<?php

if(count($_POST)>0){
	$user = new CategoryData();
	$user->nombre = $_POST["nombre"];
	$user->add();

print "<script>window.location='index.php?view=categories';</script>";


}


?>