<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
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
    <fieldset>
      <legend>Feedback</legend>
    <table>
      <tr>
        <td>Username: </td>
        <td><input type="text" name="username" value=""/></td>
      </tr>
    <tr>
      <td>Email: </td>
      <td><input type="email" name="email" value=""/></td>
      <tr>
    <td><label for="message">Enter your Name & Feedback here:</label></td>
    <td><Textarea name="textdata" row="10" col="30"></Textarea></td>
      </tr>
      <tr>
    <td></td>
    <td><input type="submit" value="Submit">
    <a href="index.php">Back</a>
    <a href="logout.php">Logout</a></td>
     </tr>
    </table>
    </fieldset>
    
  </form>

<?php
$username='';
$fname ='';

if(isset($_POST['username']) ||  isset($_POST['email'])  ||  isset($_POST['textdata'])         )
{
    $username = $_POST['username'];
    $textdata = $_POST['textdata'];
    $email = $_POST['email'];
}

if($username == null || $email == null  || $textdata == null){
	//echo "null username/textdata/email...";
}else{
		$user = $username."|".$email."|".$textdata."\r\n";
		$file = fopen('feedback.txt', 'a');
		fwrite($file, $user);
		if($fname == 'create'){
			header('location: home.php');
		}else{
			//header('location: feedback.php');	
      echo 'Thank you for your feedback';		
		}

}
?>

    
</body>
</html>
