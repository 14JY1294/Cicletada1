<?php
$comuna = ComunaData::getAll();
$provincia = ProvinciaData::getAll();
$region = RegionData::getAll();
$pais = PaisData::getAll();
$gruposangre = GrupoSangreData::getAll();
?>

<script>
		function checkRut(rut) {
			// Despejar Puntos
			var valor = rut.value.replace('.','');
			// Despejar Guión
			valor = valor.replace('-','');
			
			// Aislar Cuerpo y Dígito Verificador
			cuerpo = valor.slice(0,-1);
			dv = valor.slice(-1).toUpperCase();
			
			// Formatear RUN
			rut.value = cuerpo + '-'+ dv
			
			// Si no cumple con el mínimo ej. (n.nnn.nnn)
			if(cuerpo.length < 7) { rut.setCustomValidity("RUT Incompleto"); return false;}
			
			// Calcular Dígito Verificador
			suma = 0;
			multiplo = 2;
			
			// Para cada dígito del Cuerpo
			for(i=1;i<=cuerpo.length;i++) {
			
				// Obtener su Producto con el Múltiplo Correspondiente
				index = multiplo * valor.charAt(cuerpo.length - i);
				
				// Sumar al Contador General
				suma = suma + index;
				
				// Consolidar Múltiplo dentro del rango [2,7]
				if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }
		  
			}
			
			// Calcular Dígito Verificador en base al Módulo 11
			dvEsperado = 11 - (suma % 11);
			
			// Casos Especiales (0 y K)
			dv = (dv == 'K')?10:dv;
			dv = (dv == 0)?11:dv;
			
			// Validar que el Cuerpo coincide con su Dígito Verificador
			if(dvEsperado != dv) { rut.setCustomValidity("RUT Inválido"); return false; }
			
			// Si todo sale bien, eliminar errores (decretar que es válido)
			rut.setCustomValidity('');
		}		
</script>

<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="contact-info">
				<h2>Registro de Participante</h2>
			</div>
			<div class="contact-form">
				<h4>Ingresa tus datos:</h4>
				<form class="form-horizontal" method="post" id="addregistration" action="index.php?view=addregistration" role="form">
				
					<input type="text" name="rut" id="rut" placeholder="Rut: 12345678-K" required oninput="checkRut(this)">
				
					<input type="hidden" name="dv" id="dv">
					
					<p></p>
					<input type="text" name="nombre" id="nombre" placeholder="Nombre" required=""><input type="text" name="apellido_pat" id="apellido_pat" placeholder="Apellido Paterno" required=""><input type="text" name="apellido_mat" id="apellido_mat" placeholder="Apellido Materno" required=""><p></p>
					<input type="text" name="edad" id="edad" placeholder="Edad" required=""><input type="text" name="email" id="email" placeholder="Email" required=""><input type="text" name="direccion" id="direccion" placeholder="Direccion" required=""><p></p>
				
					<select class="form-control" name="cod_comuna" id="cod_comuna">
						<option value="">-- Comuna --</option>
						<?php foreach($comuna as $c):?>
						<option value="<?php echo $c->cod_comuna; ?>"><?php echo $c->nombre_comuna; ?></option>
						<?php endforeach; ?>
					</select>
					<p></p>
					<select class="form-control" name="cod_provincia" id="cod_provincia">
						<option value="">-- Provincia --</option>
						<?php foreach($provincia as $p):?>
						<option value="<?php echo $p->cod_provincia; ?>"><?php echo $p->nom_provincia; ?></option>
						<?php endforeach; ?>
					</select>
					<p></p>
					<select class="form-control" name="cod_region" id="cod_region">
						<option value="">-- Region --</option>
						<?php foreach($region as $reg):?>
						<option value="<?php echo $reg->cod_region; ?>"><?php echo $reg->nombre_region; ?></option>
						<?php endforeach; ?>
					</select>
					<p></p>
					<select class="form-control" name="cod_pais" id="cod_pais">
						<option value="">-- Pais --</option>
						<?php foreach($pais as $pa):?>
						<option value="<?php echo $pa->cod_pais; ?>"><?php echo $pa->nombre_pais; ?></option>
						<?php endforeach; ?>
					</select>
					<p></p>
					<select class="form-control" name="cod_grupo_sangre" id="cod_grupo_sangre">
						<option value="">-- Grupo de Sangre--</option>
						<?php foreach($gruposangre as $g):?>
						<option value="<?php echo $g->cod_grupo_sangre; ?>"><?php echo $g->nombre_gruposangre; ?></option>
						<?php endforeach; ?>
					</select>
					<p></p>
			
					
					<input type="text" name="movil" id="movil" placeholder="Celular*" required="">
					<input type="text" name="fono" id="fono" placeholder="Fono"><p></p>
					
					<!--
						<input accept="image/*"  type="file" capture/>
					-->
					
					
					
					<div class="row">
						<div class="9u">
							<section>
								<header>
									<h3>Foto</h3>								
								</header>
							       <div id="camara"></div>
									<script>
										Webcam.set({
											width: 320,
											height: 240,
											image_format: 'png'
										});
										Webcam.attach('#camara');
									</script>
									<br></br>
									<!-- 
									<form id="formulario" method="post" action="almacenar_disco.php">
									-->
										<input type="hidden" id="imagen" name="imagen" value=""/>
										<!-- 
										<label for="nombre">Nombre</label>
										<input type="text" id="nom_file" name="nom_file"/>										  
										<label for="dpi">DPI</label>
										<input type="text" id="dpi" name="dpi"/>
										-->          
										<input type="button" value="Capturar" onClick="capturar()">
										<!--
										<input type="submit" value="Enviar"/>
										--> 
									<!--	
									</form>
									-->
									<h3>Imagen capturada</h3>

									<div id="resultado"></div>	

									<script>
										function capturar() {

											Webcam.snap(function (data_uri) {

												document.getElementById('resultado').innerHTML = '<img src="' + data_uri + '"/>';
												var raw_image_data = data_uri.replace(/^data\:image\/\w+\;base64\,/, '');
												document.getElementById('imagen').value = raw_image_data;
											});

										}
									</script>															
							</section>
						</div>
					</div>
					<!--					
					<input accept="image/*" type="file" name="foto" id="foto" placeholder="Foto" required="" capture/><p></p>
					-->
					<br></br>
					<button type="submit" class="btn1 btn-1 btn-1b" >Registrarse</button>
				</form>
			</div>	
		</div>
	</div>
	<!-- //contact -->