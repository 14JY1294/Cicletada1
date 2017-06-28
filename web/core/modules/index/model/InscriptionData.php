<?php
class InscriptionData {
	public static $tablename = "inscripcion";


	public function InscriptionData(){
		$this->num_inscrip = 0;
		$this->rut = "";
		$this->cod_evento = 0;
		$this->cod_categoria = 0;
		$this->cod_distancia= 0;
		$this->id_usuario = 0;				
	}


	public function add(){
		$sql = "insert into inscripcion (num_inscrip,rut,cod_evento,cod_categoria,cod_distancia,id_usuario) ";
		$sql .= "values ($this->num_inscrip,\"$this->rut\",$this->cod_evento,$this->cod_categoria,$this->cod_distancia,$this->id_usuario)";		 
		return Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where num_inscrip=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new InscriptionData());
	}

	public static function getLast(){
		$sql = "select max(num_inscrip)+1 as num_inscrip from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::one($query[0],new InscriptionData());
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new InscriptionData());
	}




}

?>