<div class="row">
	<div class="col-md-12">
<div class="btn-group pull-right">
<!--<div class="btn-group pull-right">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-download"></i> Descargar <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="report/clients-word.php">Word 2007 (.docx)</a></li>
  </ul>
</div>
-->
</div>
<div class="btn-group pull-right">
<a href="./index.php?view=reservations" class="btn btn-default"><i class='fa fa-calendar'></i> Eventos</a>
</div>
		<h1>Eventos Anteriores</h1>
<br>
		<?php

		$users = EventData::getOld();
		if(count($users)>0){
			// si hay usuarios
			?>
        	<table class="table table-bordered table-hover">
			<thead>
		    <th>Titulo</th>
			<th>Categoria</th>
			<th>Fecha</th>
			<th></th>
			</thead>
			<?php
			foreach($users as $user){
				$category = null;
				if($user->categoria_id!=null){
				$category = $user->getCategory();
				}
				?>
				<tr>
				<td><?php echo $user->titulo; ?></td>
				<td><?php if($category!=null){ echo $category->nombre; }?></td>
				<td><?php echo $user->fecha." ".$user->hora; ?></td>
				<td style="width:130px;">
				<a href="index.php?view=editreservation&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Editar</a>
				<a href="index.php?action=delreservation&id=<?php echo $user->id;?>" class="btn btn-danger btn-xs">Eliminar</a>
				</td>
				</tr>
				<?php

			}

		}else{
			echo "<p class='alert alert-danger'>No hay pacientes</p>";
		}


		?>


	</div>
</div>