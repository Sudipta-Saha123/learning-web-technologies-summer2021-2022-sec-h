<html>
<head>
    <title>search Hotel</title>
</head>
<body>
    <?php
        $file = file('search_vehicle.txt');
        $data = array();

        $user_search ='';
        if(isset($_POST['search_txt'])){
            $user_search = $_POST['search'];
        }
        for($i=0; $i<count($file); $i++){
            if(trim($file[$i]) === trim($user_search)){
                $data[0] = $file [$i];
                $data[1] = $file [$i+1];
                break;
            }
        }
    ?>
    

    <form action="search_vehicle.php" method="POST">
        <input type="text" placeholder="Search vehicle & driver..." name="search" id="search">
        <input type="submit" name="search_txt" value="search"> <br>
        <a href="home.php">Back</a>
     </form>


     
    <?php
        if($data):
    ?>
    <?php
        session_start();
        $_SESSION['username'] = $data[1];

        echo "Driver phn number & Vehicle: ". $_SESSION['username'];
    ?>
    <?php endif; ?>
        
</body>
</html>