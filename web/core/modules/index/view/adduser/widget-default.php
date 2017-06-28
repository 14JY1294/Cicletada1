<?php

if(count($_POST)>0){
	$admin=0;
	if(isset($_POST["es_admin"])){$admin=1;}
	$user = new UserData();
	$user->username = $_POST["username"];
	$user->email = $_POST["email"];
	$user->password = sha1(md5($_POST["password"]));
	$user->es_admin=$admin;
	$user->activado=1;
	$user->add();

print "<script>window.location='index.php?view=users';</script>";


}


?>