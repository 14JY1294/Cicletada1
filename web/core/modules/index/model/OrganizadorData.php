<?php
class OrganizadorData {
	public static $tablename = "organizador";


	public function OrganizadorData(){
		$this->cod_organizador = 0;
		$this->nombre_organizador= "";
		$this->cod_pais = 0;
	}

	public function add(){
		$sql = "insert into organizador (cod_organizador,nombre_organizador,cod_pais) ";
		$sql .= "value (\$this->cod_organizador\,\"$this->nombre_organizador\",\$this->cod_pais\)";
		return Executor::doit($sql);
	}
	public static function getById($id){
		$sql = "select * from ".self::$tablename." where cod_organizador=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new OrganizadorData());
	}
	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new OrganizadorData());

	}
	

}

?>