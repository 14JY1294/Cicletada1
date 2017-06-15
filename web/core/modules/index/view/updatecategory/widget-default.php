<?php

if(count($_POST)>0){
	$user = CategoryData::getById($_POST["user_id"]);
	$user->nombre = $_POST["nombre"];
	$user->update();
print "<script>window.location='index.php?view=categories';</script>";


}


?>