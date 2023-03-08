<!DOCTYPE html>
    <html>
    <head>
    <title>data insert</title>
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

    	<div>
        <table>
            <legend> <h3>Data Form:</h3></legend> 
    		<form method="POST" action="add.php">
        <tr>
			<td>Firstname: </td>
			<td><input type="text" name="firstname" value=""/></td>
		</tr>
		<tr>
			<td>Lastname: </td>
			<td><input type="text" name="lastname" value=""/></td>
		</tr>
        <tr>
			<td>Email: </td>
			<td><input type="email" name="email" value=""/></td>
		</tr>
        <tr>
			<td>Phone Number: </td>
			<td><input type="number" name="number" value=""/></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="add" value="Submit"/>
		</tr>
    		</form>
        </table>
    	</div>
    	<br>
    	<div>
    		<table border="1">
    			<thead>
    				<th>Firstname</th>
    				<th>Lastname</th>
                    <th>Email</th>
                    <th>Phone Number</th>
    				<th></th>
    			</thead>
    			<tbody>
    				<?php
    					include('conn.php');
    					$query=mysqli_query($conn,"select * from `user`");
    					while($row=mysqli_fetch_array($query)){
    						?>
    						<tr>
    							<td><?php echo $row['firstname']; ?></td>
    							<td><?php echo $row['lastname']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['number']; ?></td>
    							<td>
    								<a href="edit.php?id=<?php echo $row['userid']; ?>">Edit</a>
    								<a href="delete.php?id=<?php echo $row['userid']; ?>">Delete</a>
    							</td>
    						</tr>
    						<?php
    					}
    				?>
    			</tbody>
    		</table>
    	</div>
    </body>
    </html>