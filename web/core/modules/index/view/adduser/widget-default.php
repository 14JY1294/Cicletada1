<?php

if(count($_POST)>0){
	$is_admin=0;
	if(isset($_POST["es_admin"])){$is_admin=1;}
	$user = new UserData();
	$user->nombre = $_POST["nombre"];
	$user->apellido = $_POST["apellido"];
	$user->username = $_POST["username"];
	$user->email = $_POST["email"];
	$user->es_admin=$is_admin;
	$user->password = sha1(md5($_POST["password"]));
	$user->add();

print "<script>window.location='index.php?view=users';</script>";


}


?>