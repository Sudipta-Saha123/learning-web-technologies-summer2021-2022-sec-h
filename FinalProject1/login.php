
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Login</title>
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
        
        .loginatt 
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


<div class="loginatt">
<form class="" action="loginCheck.php" method="post" autocomplete="off">
  <h1 style="color:green; text-align:center;">Welcome to Travel Website</h1>

  <fieldset>
    <legend>Login</legend>
      <label for="usernameemail">Username: </label>
      <input type="text" name="usernameemail" id = "usernameemail" required value=""> <br>
      <label for="password">Password : </label>
      <input type="password" name="password" id = "password" required value="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"> <br>
      <input type="submit" name="submit" value="Login">
</fieldset>
    <p>Not a member? <a href="registration.php">Registration now</a> <a href="forget_password.php">Forget password</a></p>
</form>
<div id="message">
            <h3>Password must contain the following:</h3>
            <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
            <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
            <p id="number" class="invalid">A <b>number</b></p>
            <p id="length" class="invalid">Minimum <b>8 characters</b></p>
        </div>
</div>


<script>
             
var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");


myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}


myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}


myInput.onkeyup = function() {
 
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }


  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }


  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>
  </body>
</html>
