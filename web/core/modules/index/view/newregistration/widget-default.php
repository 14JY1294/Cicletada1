<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="contact-info">
				<h2>Registro de Participante</h2>
			</div>
			<div class="contact-form">
				<h4>Ingresa tus datos:</h4>
				<form class="form-horizontal" method="post" id="addregistration" action="index.php?view=addregistration" role="form">
				
					<input type="text" name="rut" id="rut" placeholder="Rut: 12345678" required="">-<input type="text" name="dv" id="dv" placeholder="9" required="" style="width:50px;"><p></p>
					<input type="text" name="nombre" id="nombre" placeholder="Nombre" required=""><input type="text" name="apellido_pat" id="apellido_pat" placeholder="Apellido Paterno" required=""><input type="text" name="apellido_mat" id="apellido_mat" placeholder="Apellido Materno" required=""><p></p>
					<input type="text" name="edad" id="edad" placeholder="Edad" required=""><input type="text" name="email" id="email" placeholder="Email" required=""><p></p>
					<input type="text" name="direccion" id="direccion" placeholder="Direccion" required="">
					<input type="text" name="cod_comuna" id="cod_comuna" placeholder="Comuna" required=""><input type="text" name="cod_provincia" id="cod_provincia" placeholder="Provincia" required=""><p></p>
					<input type="text" name="cod_region" id="cod_region" placeholder="Region" required=""><input type="text" name="cod_pais" id="cod_pais" placeholder="Pais" required=""><p></p>
					<input type="text" name="movil" id="movil" placeholder="Celular*" required=""><input type="text" name="fono" id="fono" placeholder="Fono"><p></p>
					<input type="text" name="cod_grupo_sangre" id="cod_grupo_sangre" placeholder="Grupo de sangre" required=""><p></p>
					<input type="text" name="foto" id="foto" placeholder="Foto" required=""><p></p>
					<button type="submit" class="btn1 btn-1 btn-1b" >Registrarse</button>
				</form>
			</div>	
		</div>
	</div>
	<!-- //contact -->