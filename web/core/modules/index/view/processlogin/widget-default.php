<?php


if(Session::getUID()=="") {
$user = $_POST['mail'];
$pass = sha1(md5($_POST['password']));
$base = new Database();
$con = $base->connect();
$sql = "select * from usuario where username= \"".$user."\" and password= \"".$pass."\" and activado=1 and cod_rol=1";
//print $sql;
$query = $con->query($sql);
$found = false;
$userid = null;
while($r = $query->fetch_array()){
	$found = true ;
	$userid = $r['id'];
}

if($found==true) {
	session_start();
//	print $userid;
	$_SESSION['user_id']=$userid ;
//	setcookie('userid',$userid);
//	print $_SESSION['userid'];
	print "Cargando ... $user";
	print "<script>window.location='index.php?view=home';</script>";
}else {
	print "<script>window.location='index.php?view=loginadmin';</script>";
}

}else{
	print "<script>window.location='index.php?view=home';</script>";
	
}
?>