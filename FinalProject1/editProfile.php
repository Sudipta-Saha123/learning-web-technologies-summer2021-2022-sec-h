<!DOCTYPE html>
<head>
    <title></title>
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

    <?php 
        //include 'uploadprofile.php';
    ?>
    <fieldset>
        <legend>Edit profile</legend>
    <form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']) ?>" method="post">
    <table>
        <tr>
            <td>Name: </td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><input type="email" name="email"></td>
        </tr>
        <tr>
            <td>Password: </td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td>Phone Number: </td>
            <td>
                <input type="number" name="number">
            </td>
        </tr>
        <tr>
            <td></td>
        <td><input type="submit" name="submit" value="submit"></td>
        </tr>
    </table>
    </fieldset>
    </form>

    <?php
    $name = $email = $password = $number ="";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name = validate($_POST["name"]);
        $email = validate ($_POST["email"]);
        $comment = validate ($_POST["password"]);
        $gender = validate ($_POST["number"]);

        echo "Name: ".$name. "<br>";
        echo "Email: ".$email. "<br>";
        echo "Password: ".$password. "<br>";
        echo "Number: ".$number;
    }
    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data); //unnessary slashes delete
        $data = htmlspecialchars($data);
        return $data;
    }
   
    ?>
    
    
</body>
</html>
    
