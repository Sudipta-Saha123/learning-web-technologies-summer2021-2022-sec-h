<?php
    	include('conn.php');
    	$id=$_GET['id'];
    	$query=mysqli_query($conn,"select * from `user` where userid='$id'");
    	$row=mysqli_fetch_array($query);
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <title>Edit database</title>
    </head>
    <body>
    <div>

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

        <table>
            <legend> <h3>Data Form:</h3></legend> 
    		<form method="POST" action="update.php?id=<?php echo $id; ?>">
        <tr>
			<td>Firstname: </td>
			<td><input type="text" name="firstname" value="<?php echo $row['firstname']; ?>"/></td>
		</tr>
		<tr>
			<td>Lastname: </td>
			<td><input type="text" name="lastname" value="<?php echo $row['lastname']; ?><?php echo $row['lastname']; ?>"/></td>
		</tr>
        <tr>
			<td>Email: </td>
			<td><input type="email" name="email" value="<?php echo $row['email']; ?>"/></td>
		</tr>
        <tr>
			<td>Phone Number: </td>
			<td><input type="number" name="number" value="<?php echo $row['number']; ?>"/></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Edit"/>
		</tr>
        <a href="index_data.php">Back</a>
    		</form>
        </table>
    	</div>
    </body>
    </html>


    