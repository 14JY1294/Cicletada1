<?php
class DistanciaData {
	public static $tablename = "distancia";


	public function DistanciaData(){
		$this->cod_distancia = 0;
		$this->nom_distancia = "";
	}

	public function add(){
		$sql = "insert into distancia (cod_distancia,nom_distancia) ";
		$sql .= "values (\$this->cod_distancia\,\"$this->nom_distancia\")";
		return Executor::doit($sql);
	}
	public static function getById($id){
		$sql = "select * from ".self::$tablename." where cod_distancia=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new DistanciaData());
	}
	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new DistanciaData());

	}
	

}

?>