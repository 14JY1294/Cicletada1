<?php
class RolData {
	public static $tablename = "rol";


	public function RolData(){
		$this->cod_rol = 0;
		$this->nom_rol = "";
	}

	public function add(){
		$sql = "insert into rol (cod_rol,nom_rol) ";
		$sql .= "values (\$this->cod_rol\,\"$this->nom_rol\")";
		return Executor::doit($sql);
	}
	public static function getById($id){
		$sql = "select * from ".self::$tablename." where cod_rol=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new RolData());
	}
	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new RolData());

	}
	

}

?>