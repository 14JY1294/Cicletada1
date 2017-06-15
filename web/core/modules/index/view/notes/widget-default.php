<div class="row">
	<div class="col-md-12">
<div class="btn-group pull-right">
	<a href="index.php?view=newnote" class="btn btn-default"><i class='fa fa-file-text-o'></i> Nueva Nota</a>
</div>
		<h1>Notas</h1>
<br>
		<?php

		$users = NoteData::getAll();
		if(count($users)>0){
			// si hay usuarios
			?>

			<table class="table table-bordered table-hover">
			<thead>
			<th>Texto</th>
			<th>Fecha Creacion</th>						
			<th></th>
			</thead>
			<?php
			foreach($users as $user){
				?>
				<tr>
				<td><?php echo $user->texto; ?></td>
				<td><?php echo $user->creado; ?></td>
				
				<td style="width:130px;">
				<a href="index.php?view=editnote&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Editar</a> 
				<a href="index.php?view=delnote&id=<?php echo $user->id;?>" class="btn btn-danger btn-xs">Eliminar</a></td>
				</tr>
				<?php

			}



		}else{
			echo "<p class='alert alert-danger'>No hay Notas</p>";
		}


		?>


	</div>
</div>