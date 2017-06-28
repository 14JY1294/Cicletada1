<?php
class EventData {
	public static $tablename = "evento";


	public function EventData(){
		$this->cod_evento = 0;
		$this->titulo = "";
		$this->descripcion = "";
		$this->direccion = "";
		$this->cod_comuna = 0;
		$this->cod_comuna = 0;
		$this->cod_provincia = 0;
		$this->cod_region = 0;
		$this->fecha_ini = "";
		$this->fecha_fin = "";
		$this->cod_organizador = 0;
		$this->cod_sponsor = 0;
	}
public function getComuna(){ return ComunaData::getById($this->cod_comuna); }

	public function add(){
		$sql = "insert into comuna (cod_evento,titulo,descripcion,direccion,cod_comuna,cod_provincia,cod_region,fecha_ini,fecha_fin,cod_organizador,cod_sponsor) ";
		$sql .= "values (\$this->cod_evento\,\"$this->titulo\",\"$this->descripcion\",\"$this->direccion\",\$this->cod_comuna\,\$this->cod_provincia\)";
		return Executor::doit($sql);
	}
		public static function delById($id){
		$sql = "delete from ".self::$tablename." where cod_evento=$id";
		Executor::doit($sql);
	}	
	public function del(){
		$sql = "delete from ".self::$tablename." where cod_evento=$this->cod_evento";
		Executor::doit($sql);
	}
	public static function getById($id){
		$sql = "select * from ".self::$tablename." where cod_evento=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new EventData());
	}
	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new EventData());

	}
	

}

?>