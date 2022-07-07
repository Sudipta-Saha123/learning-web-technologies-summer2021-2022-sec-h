<html>
<head>
    <title>search Hotel</title>
</head>
<body>
    <?php
        $file = file('search_Htl.txt');
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
    

    <form action="search_Htl.php" method="POST">
        <input type="text" placeholder="Search hotel..." name="search" id="search">
        <input type="submit" name="search_txt" value="search"> <br>
        <a href="home.php">Back</a>
     </form>


     
    <?php
        if($data):
    ?>
    <?php
        session_start();
        $_SESSION['username'] = $data[1];

        echo "Welcome at ". $_SESSION['username'];
    ?>
    <?php endif; ?>
        
</body>
</html>