<?php 
	include('header.php');
	include_once 'header.php';

	require('header.php');
	require_once('header.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>user List</title>
</head>
<body>
		<h2>user list</h2>
		<a href="home.php"> Back </a> | 
		<a href="logout.php"> logout </a>
		<br>

		<table border="1">
			<tr>
				<td>Username</td>
				<td>Password</td>
				<td>Email</td>
				<td>Action</td>
			</tr>
			<tr>
				<td>Sudipta</td>
				<td>123</td>
				<td>sudiptasaha611@gmail.com</td>
				<td>
					<a href="edit.php"> Edit </a> | 	
					<a href="delete.php"> Delete </a> 
				</td>
			</tr>
			<tr>
				<td>dipta</td>
				<td>1234</td>
				<td>a@gmail.com</td>
				<td>
					<a href="edit.php"> Edit </a> | 	
					<a href="delete.php"> Delete </a> 
				</td>
			</tr>
		</table>
</body>
</html>