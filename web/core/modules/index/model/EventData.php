<?php
class EventData {
	public static $tablename = "evento";


	public function EventData(){
		$this->nombre = "";
		$this->apellido = "";
		$this->email = "";
		$this->categoria_id = "NULL";
		$this->password = "";
		$this->creado = "NOW()";
	}

	public function getProject(){ return ProjectData::getById($this->projecto_id); }
	public function getCategory(){ return CategoryData::getById($this->categoria_id); }

	public function add(){
		$sql = "insert into evento (titulo,descripcion,projecto_id,fecha,hora,categoria_id,usuario_id,creado) ";
		 $sql .= "value (\"$this->titulo\",\"$this->descripcion\",$this->projecto_id,\"$this->fecha\",\"$this->hora\",$this->categoria_id,$this->usuario_id,$this->creado)";		 
		return Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}


	public function update(){
		$sql = "update ".self::$tablename." set titulo=\"$this->titulo\",projecto_id=$this->projecto_id,categoria_id=$this->categoria_id,fecha=\"$this->fecha\",hora=\"$this->hora\",descripcion=\"$this->descripcion\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new EventData());
	}

	public static function getByMail($mail){
		$sql = "select * from ".self::$tablename." where mail=\"$mail\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new EventData());
	}

	public static function getEvery(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new EventData());
	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename." where date(fecha)>=date(NOW()) order by fecha";
		$query = Executor::doit($sql);
		return Model::many($query[0],new EventData());
	}

	public static function getAllByProjectId($id){
		$sql = "select * from ".self::$tablename." where projecto_id=$id order by fecha";
		$query = Executor::doit($sql);
		return Model::many($query[0],new EventData());
	}

	public static function getAllByMedicId($id){
		$sql = "select * from ".self::$tablename." where medic_id=$id order by fecha";
		$query = Executor::doit($sql);
		return Model::many($query[0],new EventData());
	}

	public static function getBySQL($sql){
		$query = Executor::doit($sql);
		return Model::many($query[0],new EventData());
	}

	public static function getOld(){
		$sql = "select * from ".self::$tablename." where date(fecha)<date(NOW()) order by fecha";
		$query = Executor::doit($sql);
		return Model::many($query[0],new EventData());
	}
	
	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where titulo like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new EventData());
	}


}

?>