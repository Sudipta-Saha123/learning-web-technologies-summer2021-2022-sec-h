<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <h1>Package Inforamtion</h1>

    <?php
    $filesize= '';
    $filename= "ViewPackage.txt";
    $file = fopen($filename, "r");
        if($file==false){
            echo " Errror is opening the file";
        }
    $filesize = filesize($filename);
    $filetext = fread($file, $filesize);
    
    echo  "View package>>>>>>>>>>><br>";
    echo $filetext, '<br>';
    //fclose($filename);
    ?>
     <a href="home.php">Back</a>
    
</body>
</html>