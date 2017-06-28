<?php
//include "conexion.php";
if(count($_POST)>0)
{		
		$id=$_POST["rut"];	

		$claves = explode("-",$id);
	
		$persona = RegistrationData::getById($claves[0]);		
		
		if(count($persona)>0)
		{				
			$r = new InscriptionData();
			$r->num_inscrip = $_POST["num_inscrip"];
			$r->rut = $_POST["rut"];
			$r->cod_evento = $_POST["cod_evento"];
			$r->cod_categoria = $_POST["cod_categoria"];
			$r->cod_distancia = $_POST["cod_distancia"];
			$r->id_usuario = 1;		
			$r->add();
			$numins=$_POST["num_inscrip"];
			print "<script>window.location='index.php?view=inscription-success&var1=$numins&var2=$claves[0]';</script>";
		}
		else
		{
		print "<script>window.location='index.php?view=inscription-abort&var2=$claves[0]';</script>";
	
		}	
}
?>