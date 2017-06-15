<?php
class RegistrationData {
	public static $tablename = "persona";


	public function RegistrationData(){
		$this->rut = "";
		$this->dv = "";
		$this->nombre = "";
		$this->apellido_pat = "";
		$this->apellido_mat = "";
		$this->direccion = "";
		$this->cod_comuna = "NULL";
		$this->cod_provincia = "NULL";
		$this->cod_region = "NULL";
		$this->fono = "";
		$this->movil = "";
		$this->cod_pais = "NULL";
		$this->foto= "";
		$this->cod_grupo_sangre = "NULL";
		$this->edad = "";
		$this->email = "";					
	}



	public function add(){
		$sql = "insert into persona (rut,dv,nombre,apellido_pat,apellido_mat,direccion,cod_comuna,cod_provincia,cod_region,fono,movil,cod_pais,foto,cod_grupo_sangre,edad,email) ";
		 $sql .= "values (\"$this->rut\",\"$this->dv\",\"$this->nombre\",\"$this->apellido_pat\",\"$this->apellido_mat\",\"$this->direccion\",$this->cod_comuna,$this->cod_provincia,$this->cod_region,\"$this->fono\",\"$this->movil\",$this->cod_pais,\"$this->foto\",$this->cod_grupo_sangre,$this->edad,\"$this->email\")";		 
		return Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where rut=$rut";
		$query = Executor::doit($sql);
		return Model::one($query[0],new RegistrationData());
	}

	public static function getByMail($mail){
		$sql = "select * from ".self::$tablename." where mail=\"$mail\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new EventData());
	}

	public static function getEvery(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new RegistrationData());
	}




}

?>