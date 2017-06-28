
	<div class="contact">
		<div class="container">
			<div class="contact-info">
				<h2>Nueva Inscripción</h2>
			</div>
			<div class="contact-form">
				<h4>Inscripción exitosa!!!</h4>
					<?php
					$v1=$_GET['var1'];
					$incripcion=InscriptionData::getById($v1);
					$persona=RegistrationData::getById($incripcion->rut);
					$evento=EventData::getById($incripcion->cod_evento);
					$categoria=CategoriaData::getById($incripcion->cod_categoria);
					$distancia=DistanciaData::getById($incripcion->cod_distancia);
					print "RESUMEN.- <p></p>";
					print "Nro. Inscripción	:" . $incripcion->num_inscrip . "<p></p>";
					print "RUT				:" . $persona->rut . "<p></p>";
					print "Nombre			:" . $persona->nombre . "<p></p>";
					print "Apellidos 		:" . $persona->apellido_pat . " "  . $persona->apellido_mat . "<p></p>";
					print "Evento			:" . $evento->titulo . "<p></p>";
					print "Categoría		:" . $categoria->nombre_categoria . "<p></p>";
					print "Distancia		:" . $distancia->nom_distancia . "<p></p>";
				    
					//set it to writable location, a place for temp generated PNG files
					$PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;

					//html PNG location prefix
					$PNG_WEB_DIR = 'core/modules/index/view/inscription-success/temp/';

					include "qrlib.php";    

					//ofcourse we need rights to create temp dir
					if (!file_exists($PNG_TEMP_DIR))
						mkdir($PNG_TEMP_DIR);

					$filename = $PNG_TEMP_DIR.'test.png';

					$matrixPointSize = 10;
					$errorCorrectionLevel = 'L';

					$filename = $PNG_TEMP_DIR.'test'.md5('|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
					QRcode::png('/'. $incripcion->num_inscrip . "/" . $persona->rut . "/" . $persona->nombre . "/" . $persona->apellido_pat . "/" . $persona->apellido_mat . "/" . $evento->titulo,  $filename, $errorCorrectionLevel, $matrixPointSize, 2); 

					echo '<img src="'.$PNG_WEB_DIR.basename($filename).'" /><hr/>'; 
				
					?>
					<button class="btn1 btn-1 btn-1b" onclick="window.location.href='index.php?view=home'">Volver</button>	
				
			</div>	
		</div>
	</div>
	<!-- //contact -->