<?php 
require('function.php');
if(isset($_POST['name'])){
	define('DB','db.txt');
	$loadDB = @file(DB, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	$total = count($loadDB);
	$id = "0".$total;
	$name = $_POST['name'];
	$address = $_POST['address'];
	$hotel = $_POST['hotel'];
	saveTxt(DB,"$id|$name|$address|$hotel|".PHP_EOL,'a');
	header('location:index.php');
	exit;
	
}
?>

<html>
<head>
<title>Add</title>
</head>
<body>
<?php require('menu.php');?>

		<form action="#" method="POST">
			<span> Name </span><br/>
			<input name="name" type="text"><br/>
			<span> Address </span><br/>
			<input name="address" type="text"><br/>
			<span> Hotel </span><br/>
			<input name="hotel" type="text"><br/>
			<br/>
			<input type="submit" value="Add Data">
		</form>	

</body>
</html>