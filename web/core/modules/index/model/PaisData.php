<?php
class PaisData {
	public static $tablename = "pais";


	public function PaisData(){
		$this->cod_pais = 0;
		$this->nombre_pais = "";
	}

	public function add(){
		$sql = "insert into pais (cod_pais,nombre_pais) ";
		$sql .= "value (\$this->cod_pais\,\"$this->nombre_pais\")";
		return Executor::doit($sql);
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new PaisData());

	}
	

}

?>