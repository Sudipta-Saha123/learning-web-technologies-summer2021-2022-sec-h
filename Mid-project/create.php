<?php 
	if(!isset($_COOKIE['status'])){
		header('location: login.html');
	}
?>

<html>
<head>
	<title>Add user</title>
</head>
<body>
	<a href="home.php"> Back </a> | 
	<a href="logout.php"> logout </a>

	<form action="regcheck.php" method="post" enctype="">
		<fieldset>
			<table>
			<legend>Add</legend>
			<tr>
				<td>Username: </td>
				<td><input type="text" name="username" value=""/></td>
			</tr>
			<tr>
				<td>Password: </td>
				<td><input type="password" name="password" value=""/></td>
			</tr>
			<tr>
				<td>Email: </td>
				<td><input type="email" name="email" value=""/></td>
			</tr>
			<tr>
				<td><input type="hidden" name="fname" value="create"/></td>
			</tr>
				<td><input type="submit" name="submit" value="Create"/></td>
			</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>