<?php $user = NoteData::getById($_GET["id"]);?>
<div class="row">
	<div class="col-md-12">
	<h1>Editar Nota</h1>
	<br>
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=updatenote" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Texto</label>
    <div class="col-lg-10">
       <textarea class="form-control" rows="5" name="texto" value="<?php echo $user->texto;?>" placeholder="Descripcion"></textarea>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="user_id" value="<?php echo $user->id;?>">
      <button type="submit" class="btn btn-primary">Actualizar Nota</button>
    </div>
  </div>
</form>
	</div>
</div>