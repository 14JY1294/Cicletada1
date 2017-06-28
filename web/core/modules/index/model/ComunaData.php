<?php
class ComunaData {
	public static $tablename = "comuna";


	public function ComunaData(){
		$this->cod_comuna = 0;
		$this->nombre_comuna = "";
	}

	public function add(){
		$sql = "insert into comuna (cod_comuna,nombre_comuna) ";
		$sql .= "value (\$this->cod_comuna\,\"$this->nombre_comuna\")";
		return Executor::doit($sql);
	}
	public static function getById($id){
		$sql = "select * from ".self::$tablename." where cod_comuna=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ComunaData());
	}
	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new ComunaData());

	}
	

}

?>