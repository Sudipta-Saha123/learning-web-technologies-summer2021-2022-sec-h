<?php
error_reporting(0);
?>

<?php 
	session_start();

	if(isset($_SESSION['status']))
	{
?>

<html>
<head>
	<title>Test</title>
</head>
<body>
	<h1>Welcome <?php echo $_GET['username'];?> </h1>
	<a href="create.php"> Create New Account</a> <br> 
	<a href="userlist.php"> User List </a> <br> 
	<a href="editProfile.php">Edit Profile</a> <br>
	<a href="uploadprofile.php">Upload Profile picture</a> <br>
	<a href="search_Htl.php">Search Hotel</a> <br>
	<a href="search_vehicle.php">Search vehicle</a> <br>
	<a href="menu.php">Menu</a> <br>
	<a href="ViewPackage.php">View Package</a> <br>
	<a href="feedback.php">Feedback</a> <br>
	<a href="logout.php"> logout </a>
	
</body>
</html>

<?php 
	}else{
		echo "invalid request!";
	} 
?>