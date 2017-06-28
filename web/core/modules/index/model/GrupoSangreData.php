<?php
class GrupoSangreData {
	public static $tablename = "gruposangre";


	public function GrupoSangreData(){
		$this->cod_gruposangre = 0;
		$this->nombre_gruposangre = "";
	}

	public function add(){
		$sql = "insert into gruposangre (cod_gruposangre,nombre_gruposangre) ";
		$sql .= "value (\$this->cod_gruposangre\,\"$this->nombre_gruposangre\")";
		return Executor::doit($sql);
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new GrupoSangreData());

	}
	

}

?>