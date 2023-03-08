<?php
    	include('conn.php');
    	$id=$_GET['id'];
     
    	$firstname=$_POST['firstname'];
    	$lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $number=$_POST['number'];
     
    	mysqli_query($conn,"update `user` set firstname='$firstname', lastname='$lastname', email='$email', number='$number' where userid='$id'");
    	header('location:index_data.php');
    ?>