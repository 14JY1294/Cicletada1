<?php
class SponsorData {
	public static $tablename = "sponsor";


	public function SponsorData(){
		$this->cod_sponsor = 0;
		$this->nombre_sponsor= "";
		$this->cod_pais = 0;
	}

	public function add(){
		$sql = "insert into sponsor (cod_sponsor,nombre_sponsor,cod_pais) ";
		$sql .= "value (\$this->cod_sponsor\,\"$this->nombre_sponsor\",\$this->cod_pais\)";
		return Executor::doit($sql);
	}
	public static function getById($id){
		$sql = "select * from ".self::$tablename." where cod_sponsor=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new SponsorData());
	}
	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new SponsorData());

	}
	

}

?>