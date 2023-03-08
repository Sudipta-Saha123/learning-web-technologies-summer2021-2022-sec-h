<?php
    	include('conn.php');
     
    	$firstname=$_POST['firstname'];
    	$lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $number=$_POST['number'];
     
    	mysqli_query($conn,"insert into `user` (firstname,lastname,email,number) values ('$firstname','$lastname','$email','$number')");
    	header('location:index_data.php');
     
    ?>


