<?php 

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if($username == null || $password == null){
	echo "null username/password...";
}else{

	require('../model/userdb.php');
	$login=login_cheack($username,$password);
	if($login==true){
		setcookie('status', 'true', time()+3600, '/');		
		header('location: ../view/home.php?username='.$username);

	}else{
		echo "Wrong user name or password";
	}
}
   

?>