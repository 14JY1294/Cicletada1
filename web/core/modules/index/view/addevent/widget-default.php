<?php
//include "conexion.php";
if(count($_POST)>0){
			
		$e = new EventData();
		$e->rut = $_POST["rut"];
				
		$e->add();
		print "<script>window.location='index.php?view=registration-success';</script>";
}

?>