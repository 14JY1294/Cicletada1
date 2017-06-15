<?php
//include "conexion.php";
if(count($_POST)>0){
		$r = new RegistrationData();
		$r->rut = $_POST["rut"];
		$r->dv = $_POST["dv"];
		$r->nombre = $_POST["nombre"];		
		$r->apellido_pat = $_POST["apellido_pat"];
		$r->apellido_mat = $_POST["apellido_mat"];
		$r->direccion = $_POST["direccion"];
		$r->cod_comuna = $_POST["cod_comuna"];
		$r->cod_provincia = $_POST["cod_provincia"];
		$r->cod_region = $_POST["cod_region"];
		$r->fono = $_POST["fono"];
		$r->movil = $_POST["movil"];
		$r->cod_pais = $_POST["cod_pais"];
		$r->foto= $_POST["foto"];
		$r->cod_grupo_sangre = $_POST["cod_grupo_sangre"];
		$r->edad = $_POST["edad"];
		$r->email = $_POST["email"];		
		$r->add();
		//print "<script>window.location='index.php?view=home';</script>";
}

?>