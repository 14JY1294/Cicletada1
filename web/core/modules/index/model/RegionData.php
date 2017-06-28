<?php
class RegionData {
	public static $tablename = "region";


	public function RegionData(){
		$this->cod_region = 0;
		$this->nombre_region = "";
	}

	public function add(){
		$sql = "insert into region (cod_region,nombre_region) ";
		$sql .= "value (\$this->cod_region\,\"$this->nombre_region\")";
		return Executor::doit($sql);
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new RegionData());

	}
	

}

?>