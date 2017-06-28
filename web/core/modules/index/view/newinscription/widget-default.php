<?php
$inscripcion= InscriptionData::getLast();
$num=$inscripcion->num_inscrip;
$pais = PaisData::getAll();
$evento = EventData::getAll();
$categoria = CategoriaData::getAll();
$distancia = DistanciaData::getAll();

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
				<h2>Nueva Inscripción</h2>
			</div>
			<div class="contact-form">
				<h4>Nro. Inscripción:  <?php echo " " . $num  . "<p></p>"; ?></h4>
				<form class="form-horizontal" method="post" id="addinscription" name="addinscription" action="index.php?view=addinscription" role="form">
					
					<input type="hidden" name="num_inscrip" id="num_inscrip" value="<?php echo $num; ?>">	
					
					<input type="text" name="rut" id="rut" placeholder="Rut: 12345678-K" required oninput="checkRut(this)">
					<!-- 
					-<input type="text" name="dv" id="dv" placeholder="9" required="" style="width:50px;">
					-->
					<p></p>
						
					<select class="form-control" name="cod_evento" id="cod_evento" required>
						<option value="">-- Evento --</option>
						<?php foreach($evento as $e):?>
						<option value="<?php echo $e->cod_evento; ?>"><?php echo $e->titulo; ?></option>
						<?php endforeach; ?>
					</select>
					<p></p>
					<select class="form-control" name="cod_categoria" id="cod_categoria" required>
						<option value="">-- Categoria --</option>
						<?php foreach($categoria as $cat):?>
						<option value="<?php echo $cat->cod_categoria; ?>"><?php echo $cat->nombre_categoria; ?></option>
						<?php endforeach; ?>
					</select>
					<p></p>
					<select class="form-control" name="cod_distancia" id="cod_distancia" required>
						<option value="">-- Distancia --</option>
						<?php foreach($distancia as $dis):?>
						<option value="<?php echo $dis->cod_distancia; ?>"><?php echo $dis->nom_distancia; ?></option>
						<?php endforeach; ?>
					</select>
					<p></p>
					
					<button type="submit" class="btn1 btn-1 btn-1b" value="inscribir" name="inscribir">Inscribirse</button>
				</form>
			</div>	
		</div>
	</div>
<?php 
	
?>

	<!-- //contact -->