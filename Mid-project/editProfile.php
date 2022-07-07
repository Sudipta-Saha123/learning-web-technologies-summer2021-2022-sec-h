<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
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
    
