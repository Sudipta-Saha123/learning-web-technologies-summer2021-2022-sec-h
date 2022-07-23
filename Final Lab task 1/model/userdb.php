<?php

$con = mysqli_connect('localhost', 'root', '', 'user info');
function login_cheack($username,$password){
   

 
    $con = mysqli_connect('localhost', 'root', '', 'user');
    $sql = "select * from user where username= '{$username}' and password = '{$password}'";

    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if($count > 0)
        return true;
    
    else return false;
}
function insertUser($username, $password, $email)
{
    $con = mysqli_connect('localhost', 'root', '', 'user');
    $sql = "insert into user (username, password, email) values ('{$username}', '{$password}', '{$email}' ) ";


    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    if($count > 0)
        return true;
    
    else return false;

}
?>