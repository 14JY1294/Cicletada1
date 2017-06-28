<?php
class CategoriaData {
	public static $tablename = "categoria";


	public function CategoriaData(){
		$this->cod_categoria = 0;
		$this->nombre_categoria = "";
	}

	public function add(){
		$sql = "insert into categoria (cod_categoria,nombre_categoria) ";
		$sql .= "values (\$this->cod_categoria\,\"$this->nombre_categoria\")";
		return Executor::doit($sql);
	}
	public static function getById($id){
		$sql = "select * from ".self::$tablename." where cod_categoria=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new CategoriaData());
	}
	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new CategoriaData());

	}
	

}

?>