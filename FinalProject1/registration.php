<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Registration</title>
  </head>
  <body>

  <style>
        
        input 
            {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            }
          
          
        input[type=submit] 
          {
            background-color: #04AA6D;
            color: white;
          }
        
        .regatt 
          {
            background-color: #f1f1f1;
            padding: 20px;
          }
          
        #message 
           {
            display:none;
            background: #f1f1f1;
            color: #000;
            position: relative;
            padding: 20px;
            margin-top: 10px;
          }
          
        #message p 
          {
            padding: 10px 35px;
            font-size: 18px;
          }
          
          
        .valid 
          {
            color: green;
          }
          
        .valid:before 
          {
            position: relative;
            left: -35px;
            content: "&#10004;";
          }
          
          .invalid 
          {
            color: red;
          }
          
          .invalid:before 
          {
            position: relative;
            left: -35px;
            content: "&#10006;";
          }
        </style>


  <div class="regatt">
  <form class="" action="" method="post" autocomplete="off">
  <h2 style="color:green; text-align:center;">Signup Form</h2>
  <h4 style="color:green; text-align:center;">It's Quick & Easy</h4>

  <fieldset>
    <legend>Registration</legend>
      <label for="name">Name : </label>
      <input type="text" name="name" id = "name" required value=""> <br>
      <label for="username">Username : </label>
      <input type="text" name="username" id = "username" required value=""> <br>
      <label for="email">Email : </label>
      <input type="email" name="email" id = "email" required value=""> <br>
      <label for="password">Password : </label>
      <input type="password" name="password" id = "password" required value="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"> <br>
      <label for="confirmpassword">Confirm Password : </label>
      <input type="password" name="confirmpassword" id = "confirmpassword" required value=""> <br>
      <input type="submit" name="submit" value="Signup">
</fieldset>
   <p>Already a member? <a href="login.php">Login here</a></P>
</form>

<div id="message">
            <h3>Password must contain the following:</h3>
            <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
            <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
            <p id="number" class="invalid">A <b>number</b></p>
            <p id="length" class="invalid">Minimum <b>8 characters</b></p>
        </div>
</div>
  </body>
</html>
