<!DOCTYPE html>
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

    <fieldset>
        <legend>Profile picture</legend>
    <form action="" method="POST" enctype="multipart/form-data">
        <table>
        <tr>
        <td><img src="index.png" alt=""></td>
        </tr>
        <tr>
        <td><input type="file" name="image">
        <input type="submit" value="upload"></td>
        </tr>
        </table>
    </form>  
    </fieldset>

    <?php
        if(isset($_FILES['image'])){
            $filename= $_FILES['image']['name'];
            $filetmp= $_FILES['image']['tmp_name'];
            move_uploaded_file($filetmp, "images/".$filename);
           
        }
    ?>
    
</body>
</html>