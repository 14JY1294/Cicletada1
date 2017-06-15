<?php 
$reservation = EventData::getById($_GET["id"]);
$pacients = ProjectData::getAll();
$medics = CategoryData::getAll();
?>
<div class="row">
	<div class="col-md-8">
	<h1>Editar Evento</h1>
	<br>
<form class="form-horizontal" role="form" method="post" action="./?action=updatereservation">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha/Hora</label>
    <div class="col-lg-5">
      <input type="date" name="fecha" value="<?php echo $reservation->fecha; ?>" required class="form-control" id="inputEmail1" placeholder="Fecha">
    </div>
    <div class="col-lg-5">
      <input type="time" name="hora" value="<?php echo $reservation->hora; ?>" class="form-control" id="inputEmail1" placeholder="Hora">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Titulo</label>
    <div class="col-lg-10">
      <input type="text" name="titulo" value="<?php echo $reservation->titulo; ?>" required class="form-control" id="inputEmail1" placeholder="Titulo">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Descripcion</label>
    <div class="col-lg-10">
    <textarea class="form-control" rows="5" name="descripcion" placeholder="Descripcion"><?php echo $reservation->descripcion;?></textarea>
    </div>
  </div>

  <div class="form-group">
   
    <div class="col-lg-3">

    </div>
    <label for="inputEmail1" class="col-lg-3 control-label">Categoria</label>
    <div class="col-lg-3">
<select name="categoria_id" class="form-control">
<option value="">-- SELECCIONE --</option>
  <?php foreach($medics as $p):?>
    <option value="<?php echo $p->id; ?>" <?php if($p->id==$reservation->categoria_id){ echo "selected"; }?>><?php echo $p->nombre; ?></option>
  <?php endforeach; ?>
</select>
    </div>

  </div>
  <div class="form-group">
  </div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="id" value="<?php echo $reservation->id; ?>">
      <button type="submit" class="btn btn-default">Actualizar Evento</button>
    </div>
  </div>
</form>

	</div>
</div>