<?php 

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$email = $_REQUEST['email'];
$fname = $_REQUEST['fname'];

require('../model/userdb.php');

if($username == null || $password == null || $email == null){
	echo "null username/password/email...";
}else{
	       insertUser($username, $password, $email);
		


}

?>