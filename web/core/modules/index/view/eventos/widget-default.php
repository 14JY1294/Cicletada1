<div class="row">
	<div class="col-md-12">
	<br></br>
	<a href="index.php?view=newevent" class="btn btn-default pull-right"><i class='glyphicon glyphicon-user'></i> Nuevo Evento</a>
	<h1>Eventos</h1>
	<p></p>
<?php
		$evento = EventData::getAll();

		if(count($evento)>0)
		{
			// si hay eventos
			?>
			<table class="table table-bordered table-hover">
			<thead>
			<th>Titulo</th>
			<th>Descripcion</th>
			<th>Comuna</th>		
			<th>Fecha</th>
			<th></th>
			</thead>
			<?php
			foreach($evento as $e){
				$comuna = null;
				if($e->cod_comuna!=null){
				$comuna = $e->getComuna();
				}
				?>
				<tr>
				<td><?php echo $e->titulo; ?></td>	
				<td><?php echo $e->descripcion; ?></td>	
				<td><?php if($comuna!=null){ echo $comuna->nombre_comuna; }?></td>
				<td><?php echo $e->fecha_ini; ?></td>
				<td style="width:130px;">
				<a href="index.php?view=editevento&cod_evento=<?php echo $e->cod_evento;?>" class="btn btn-warning btn-xs">Editar</a>
				<a href="index.php?action=delevento&cod_evento=<?php echo $e->cod_evento;?>" class="btn btn-danger btn-xs">Eliminar</a>
				</td>
				</tr>
				<?php

			}



		}else
		{
			echo "<p class='alert alert-danger'>No hay Eventos</p>";
		}


		?>


	</div>
</div>