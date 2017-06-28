<?php
class UserData {
	public static $tablename = "usuario";

	public function UserData(){
		$this->username = "";
		$this->password = "";
		$this->email = "";		
		$this->activado = 0;
		$this->id = 0;
		$this->es_admin = 0;
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (username,password,email,activado,es_admin) ";
		$sql .= "values (\"$this->username\",\"$this->password\",\"$this->email\",$this->activado,$this->es_admin)";
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
		$sql = "update ".self::$tablename." set username=\"$this->username\",password=\"$this->password\",activado=$this->activado,es_admin=$this->es_admin where id=$this->id";
		Executor::doit($sql);
	}

    public function update_passwd(){
		$sql = "update ".self::$tablename." set password=\"$this->password\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where username=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new UserData());
	}

	public static function getAll(){
		$sql = "select * from ".self::$tablename;
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