<!DOCTYPE html>
<html>
<head>
	<title>Hotel search</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href=>
  <style>
   h1{
        font-size:40px ;
    }
    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}
li {
  float: right;
}
li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
 
  background-color: #008000;
}




</style>
</head>
<body>

<h1  style="text-align: center; color: black;"><a href="Home.php" style="text-decoration: none;"> Travel Website</a></h1>

<ul>
 <li><a class="active" href="index.php"><b>Home</b></a></li>
  <li><a class="active" href="Search_Htl.php"><b>Search Hotel</b></a></li>
  <li><a class="active" href="Search_vehicle.php"><b>Search Vehicle</b></a></li>
  <li><a class="active" href="upload.html"><b>File upload</b></a></li>  
  <li><a href="index_data.php"><b>User List</b></a></li>
  <li><a href="uploadprofile.php"><b>Upload Profile Picture</b></a></li>
  <li><a class="active" href="editProfile.php"><b>Edit Profile</b></a></li>  
  <li><a class="active" href="feedback.php"><b>Feedback</b></a></li>  
  <li><a href="logout.php"><b>Logout</b></a></li><br>
    </ul>
<br>








<form method="post">
<label>Search: </label>
<input type="text" name="search" placeholder="Search vehicle...">
<input type="submit" name="submit" value="Search" > <br>
<a href="index.php">Back</a>
	
</form>

</body>
</html>

<?php

$con = new PDO("mysql:host=localhost;dbname=search",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `search_vehicle` WHERE Name = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table>
			<tr>
				<th>Name</th>
				<th>Details</th>
                <th>Phone Number</th>
			</tr>
			<tr>
				<td><?php echo $row->Name; ?></td>
				<td><?php echo $row->Details;?></td>
                <td><?php echo $row->Phone_Number;?></td>
			</tr>

		</table>
<?php 
	}
		
		
		else{
			echo "Name Does not exist";
		}


}

?>