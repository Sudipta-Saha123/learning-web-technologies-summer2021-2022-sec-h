<!DOCTYPE html>
<head>
    <title>Document</title>
</head>
<body>
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