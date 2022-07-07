<html>
<head>
<title>Details text</title>
</head>
<body>

<?php require('menu.php');?>

<table border="1">
<tr>
<td>ID</td>
<td>Name</td>
<td>Address</td>
<td>Hotel</td>
</tr>
<?php 
define('DB','db.txt');

$loadDB = @file(DB, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$i = 0;
foreach($loadDB as $data){
	
	if($i==0){}else{
		//echo $data."<br/>";
		$expData = explode('|',$data);
		$Id = $expData[0];
		$Name = $expData[1];
		$address = $expData[2];
		$hotel = $expData[3];
?>
<tr>
<td><?=$Id;?></td>
<td><?=$Name;?></td>
<td><?=$address;?></td>
<td><?=$hotel;?></td>
</tr>

<?php		
	}
	$i++;
}
?>

</table>
</body>
</html>