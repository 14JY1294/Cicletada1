<?php
//include "conexion.php";
if(count($_POST)>0){
	
		$imagen_decodificada = base64_decode(filter_input(INPUT_POST, 'imagen'));
		//$dpi = filter_input(INPUT_POST, 'dpi', FILTER_SANITIZE_SPECIAL_CHARS);
		$nom_archivo = filter_input(INPUT_POST, 'rut', FILTER_SANITIZE_SPECIAL_CHARS);
		$archivo = $nom_archivo.".png";
		$resultado = file_put_contents("imagenes/" . $archivo, $imagen_decodificada);			
		
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
		$r->foto = $archivo;
		$r->cod_grupo_sangre = $_POST["cod_grupo_sangre"];
		$r->edad = $_POST["edad"];
		$r->email = $_POST["email"];		
		$r->add();
		print "<script>window.location='index.php?view=registration-success';</script>";
}

?>