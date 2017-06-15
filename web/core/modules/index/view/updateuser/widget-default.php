<?php

if(count($_POST)>0){
	$is_admin=0;
	if(isset($_POST["es_admin"])){$is_admin=1;}
	$is_active=0;
	if(isset($_POST["activado"])){$is_active=1;}
	$user = UserData::getById($_POST["user_id"]);
	$user->nombre = $_POST["nombre"];
	$user->apellido = $_POST["apellido"];
	$user->username = $_POST["username"];
	$user->email = $_POST["email"];
	$user->es_admin=$is_admin;
	$user->activado=$is_active;
	$user->update();

	if($_POST["password"]!=""){
		$user->password = sha1(md5($_POST["password"]));
		$user->update_passwd();
print "<script>alert('Se ha actualizado el password');</script>";

	}

print "<script>window.location='index.php?view=users';</script>";


}


?>