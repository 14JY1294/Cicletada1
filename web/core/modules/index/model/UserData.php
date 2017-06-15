<?php
class UserData {
	public static $tablename = "usuario";

	public function UserData(){
		$this->nombre = "";
		$this->apellido = "";
		$this->username = "";
		$this->password = "";
		$this->activado = "0";
		$this->creado = "NOW()";
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (nombre,apellido,username,password,activado,es_admin,creado) ";
		$sql .= "value (\"$this->nombre\",\"$this->apellido\",\"$this->username\",\"$this->password\",$this->activado,$this->es_admin,$this->creado)";
		Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}


	public function update(){
		$sql = "update ".self::$tablename." set nombre=\"$this->nombre\",apellido=\"$this->apellido\",username=\"$this->username\",password=\"$this->password\",activado=$this->activado,es_admin=$this->es_admin where id=$this->id";
		Executor::doit($sql);
	}

    public function update_passwd(){
		$sql = "update ".self::$tablename." set password=\"$this->password\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new UserData());
	}



	public static function getAll(){
		$sql = "select * from ".self::$tablename." order by creado desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new UserData());
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where nombre like '%$q%' or apellido like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new UserData());
	}


}

?>