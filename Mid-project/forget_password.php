<html>
<head>
<title>Change Password</title>
</head>
<?php
 $currentPassErr = $newPassErr = $currentnewPassErr ="";
 $newPass = $currentnewPass = $errmessage= "";
 $currentPass= '123';
 if(isset($_POST["submit"])){  
 if(empty($_POST["currentPass"])){  
   $currentPassErr = "Current Password is Required!";  
      } 
      else if($_POST['currentPass'] == $currentPass){
       echo "Current Password is matched";
      }
      else{
      $currentPassErr = "Current password is not matched!";
      }
     if($_POST["currentPass"] == $_POST["newPass"]) {
     $newPassErr = "New Password should not be the same as current Password!";
      }
     if(empty($_POST["newPass"])){
      $newPassErr ="New Password is Required!";
        }
     else{
      $newPass= $_POST['newPass'];
      if(!preg_match('/^[0-9A-Za-z!@#$%]*$/',$newPass)){
      $newPassErr ="Password must contain Alphabets,Numbers,Special Charecter!";
       }
     }
  if(empty($_POST["currentnewPass"])) {
            $currentnewPassErr = "Retype New password!";
        } 
   else if($_POST["newPass"] !== $_POST["currentnewPass"]){
            $cnewPassErr = "Confirm password is not matched!";
    }
   else{
       $message = "<h4>Password Changed Successfuly</h4>";
    }
 }
?>
<body>
<form method="post" action="">
<fieldset>
<legend><h3>CHANGE PASSWORD</h3></legend>
<table>
<tr>
<td><label for="currentPass">Current Password:</label></td>
<td><input type="text" id="currentPass" name="currentPass" placeholder="123" value="">
<span>* <?php echo $currentPassErr; ?></span></td>
</tr>
<tr>
<td><label for="newPass">New Password:</label></td>
<td><input type="text" id="newPass" name="newPass" >
<span>* <?php echo $newPassErr; ?></span></td>
</tr>
<tr>
<td><label for="cnewPass"> Retype New Password:</label></td>
<td><input type="text" id="currentnewPass" name="currentnewPass" >
<span>* <?php echo $currentnewPassErr; ?></span></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Submit">
<a href="login.php"> login </a></td>
</tr>
<tr>
<td colspan="2">
<?php  
if(isset($errmessage)){
echo "<br>".$errmessage;
} 
?>
</td>
</tr>
</table>
</fieldset>
</form>      
</body>
</html>