<?php
class ProvinciaData {
	public static $tablename = "provincia";


	public function ProvinciaData(){
		$this->cod_provincia = 0;
		$this->nom_provincia = "";
	}

	public function add(){
		$sql = "insert into provincia (cod_provincia,nom_provincia) ";
		$sql .= "value (\$this->cod_provincia\,\"$this->nom_provincia\")";
		return Executor::doit($sql);
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new ProvinciaData());

	}
	

}

?>