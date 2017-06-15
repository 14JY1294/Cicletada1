<?php
class NoteData {
	public static $tablename = "nota";


	public function NoteData(){
		//$this->texto = "";
		$this->creado = "NOW()";
	}

	public function add(){
		$sql = "insert into nota (texto,creado,usuario_id) ";
		$sql .= "value (\"$this->texto\",$this->creado,$this->usuario_id)";
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
		$sql = "update ".self::$tablename." set texto=\"$this->texto\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new NoteData());
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new NoteData());

	}
	
	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where texto like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new NoteData());
	}


}

?>