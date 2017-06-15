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
<a href="./index.php?view=oldreservations" class="btn btn-default"><i class='fa fa-calendar'></i> Eventos Anteriores</a>
</div>
		<h1>Eventos</h1>
<br>
<form class="form-horizontal" role="form">
<input type="hidden" name="view" value="reservations">
        <?php
//$pacients = ProjectData::getAll();
$medics = CategoryData::getAll();
        ?>

  <div class="form-group">
    <div class="col-lg-2">
		<div class="input-group">
		  <span class="input-group-addon"><i class="fa fa-search"></i></span>
		  <input type="text" name="q" value="<?php if(isset($_GET["q"]) && $_GET["q"]!=""){ echo $_GET["q"]; } ?>" class="form-control" placeholder="Palabra clave">
		</div>
    </div>
    <div class="col-lg-2">
		<div class="input-group">
		 
		</div>
    </div>
    <div class="col-lg-2">
		<div class="input-group">
		  <span class="input-group-addon"><i class="fa fa-th-list"></i></span>
<select name="categoria_id" class="form-control">
<option value="">CATEGORIA</option>
  <?php foreach($medics as $p):?>
    <option value="<?php echo $p->id; ?>" <?php if(isset($_GET["categoria_id"]) && $_GET["categoria_id"]!=""){ echo "selected"; } ?>><?php echo $p->nombre; ?></option>
  <?php endforeach; ?>
</select>
		</div>
    </div>
    <div class="col-lg-4">
		<div class="input-group">
		  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
		  <input type="date" name="fecha" value="<?php if(isset($_GET["fecha"]) && $_GET["fecha"]!=""){ echo $_GET["fecha"]; } ?>" class="form-control" placeholder="Palabra clave">
		</div>
    </div>

    <div class="col-lg-2">
    <button class="btn btn-primary btn-block">Buscar</button>
    </div>

  </div>
</form>

		<?php
$users= array();
if((isset($_GET["q"]) && isset($_GET["projecto_id"]) && isset($_GET["categoria_id"]) && isset($_GET["fecha"])) && ($_GET["q"]!="" || $_GET["projecto_id"]!="" || $_GET["categoria_id"]!="" || $_GET["fecha"]!="") ) {
$sql = "select * from evento where ";
if($_GET["q"]!=""){
	$sql .= " titulo like '%$_GET[q]%' and descripcion like '%$_GET[q] %' ";
}

if($_GET["projecto_id"]!=""){
if($_GET["q"]!=""){
	$sql .= " and ";
}
	$sql .= " projecto_id = ".$_GET["projecto_id"];
}

if($_GET["categoria_id"]!=""){
if($_GET["q"]!=""||$_GET["projecto_id"]!=""){
	$sql .= " and ";
}

	$sql .= " categoria_id = ".$_GET["categoria_id"];
}



if($_GET["fecha"]!=""){
if($_GET["q"]!=""||$_GET["projecto_id"]!="" ||$_GET["categoria_id"]!="" ){
	$sql .= " and ";
}

	$sql .= " fecha = \"".$_GET["fecha"]."\"";
}

		$users = EventData::getBySQL($sql);

}else{
		$users = EventData::getAll();

}
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
				$project = null;
				if($user->projecto_id!=null){
				$project  = $user->getProject();
				}
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
			echo "<p class='alert alert-danger'>No hay Eventos</p>";
		}


		?>


	</div>
</div>