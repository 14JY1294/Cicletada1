<?php
class ContactData {
	public static $tablename = "contacto";
	public function ContactData(){
		$this->titulo = "";
		$this->email = "";
		$this->imagen = "";
		$this->password = "";
		$this->activado = "0";
		$this->creado = "NOW()";
	}


	public function add(){
		$sql = "insert into ".self::$tablename." (nombre,apellido,direccion,telefono,email,creado) ";
		$sql .= "value (\"$this->nombre\",\"$this->apellido\",\"$this->direccion\",\"$this->telefono\",\"$this->email\",$this->creado)";
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


	public function update_active(){
		$sql = "update ".self::$tablename." set creado=NOW() where id=$this->id";
		Executor::doit($sql);
	}


	public function update(){
		$sql = "update ".self::$tablename." set nombre=\"$this->nombre\",apellido=\"$this->apellido\",direccion=\"$this->direccion\",telefono=\"$this->telefono\",email=\"$this->email\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new ContactData());
	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename." order by creado desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ContactData());
	}

	public static function getAllActive(){
		$sql = "select * from contacto where creado>=date_sub(NOW(),interval 3 second)";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ContactData());
	}

	public static function getAllUnActive(){
		$sql = "select * from contacto where creado<=date_sub(NOW(),interval 3 second)";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ContactData());
	}


	public function getUnreads(){ return MessageData::getUnreadsByClientId($this->id); }


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where titulo like '%$q%' or email like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new ContactData());
	}


}

?>