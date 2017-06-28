<?php
$comuna = ComunaData::getAll();
$provincia= ProvinciaData::getAll();
$region= RegionData::getAll();
$organizador= OrganizadorData::getAll();
$sponsor= SponsorData::getAll();

?>

<div class="row">
<div class="col-md-10">
<br></br>
<h1>Nuevo Evento</h1>
<form class="form-horizontal" role="form" method="post" action="./?view=addevent">  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Titulo</label>
    <div class="col-lg-10">
      <input type="text" name="titulo" required class="form-control" id="inputEmail1" placeholder="Titulo">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Descripcion</label>
    <div class="col-lg-10">
    <textarea class="form-control" rows="3" name="descripcion" placeholder="Descripcion"></textarea>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Direccion</label>
    <div class="col-lg-10">
    <textarea class="form-control" name="direccion" placeholder="Direccion"></textarea>
    </div>
  </div>
<div class="form-group">
  <label for="inputEmail1" class="col-lg-2 control-label">Comuna</label>
    <div class="col-lg-4"> 
		<select name="cod_comuna" class="form-control">
		<option value="">-- SELECCIONE --</option>
		<?php foreach($comuna as $c):?>
		<option value="<?php echo $c->cod_comuna; ?>"><?php echo $c->nombre_comuna; ?></option>
		<?php endforeach; ?>
		</select>
	</div>
</div>
<div class="form-group">
  <label for="inputEmail1" class="col-lg-2 control-label">Provincia</label>
    <div class="col-lg-4"> 
		<select name="cod_provincia" class="form-control">
		<option value="">-- SELECCIONE --</option>
		<?php foreach($provincia as $p):?>
		<option value="<?php echo $p->cod_provincia; ?>"><?php echo $p->nom_provincia; ?></option>
		<?php endforeach; ?>
		</select>
	</div>
</div>
<div class="form-group">
  <label for="inputEmail1" class="col-lg-2 control-label">Region</label>
    <div class="col-lg-4"> 
		<select name="cod_region" class="form-control">
		<option value="">-- SELECCIONE --</option>
		<?php foreach($region as $r):?>
		<option value="<?php echo $r->cod_region; ?>"><?php echo $r->nombre_region; ?></option>
		<?php endforeach; ?>
		</select>
	</div>
</div>
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha Inicio</label>
    <div class="col-lg-5">
      <input type="date" name="fecha_ini" required class="form-control" id="inputEmail1" placeholder="Fecha">
    </div>   	 
</div>  
<div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha Fin</label>
    <div class="col-lg-5">
      <input type="date" name="fecha_fin" required class="form-control" id="inputEmail1" placeholder="Fecha">
    </div>   	 
</div> 
<div class="form-group">
  <label for="inputEmail1" class="col-lg-2 control-label">Organizador</label>
    <div class="col-lg-4"> 
		<select name="cod_organizador" class="form-control">
		<option value="">-- SELECCIONE --</option>
		<?php foreach($organizador as $o):?>
		<option value="<?php echo $o->cod_organizador; ?>"><?php echo $o->nombre_organizador; ?></option>
		<?php endforeach; ?>
		</select>
	</div>
</div>
<div class="form-group">
  <label for="inputEmail1" class="col-lg-2 control-label">Sponsor</label>
    <div class="col-lg-4"> 
		<select name="cod_organizador" class="form-control">
		<option value="">-- SELECCIONE --</option>
		<?php foreach($sponsor as $s):?>
		<option value="<?php echo $s->cod_sponsor; ?>"><?php echo $s->nombre_sponsor; ?></option>
		<?php endforeach; ?>
		</select>
	</div>
</div>
  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-default">Agregar Evento</button>
    </div>
  </div>
</form>

</div>
</div>