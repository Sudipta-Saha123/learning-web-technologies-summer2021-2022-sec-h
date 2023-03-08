
<!DOCTYPE html>
<html>
<head>
	<title>Pakages</title>

	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   </script>  
   <style>

 body {

  
font-family: Agency FB;
}




</style>



</head>

<body>


 <?php echo "<h1>  Details</h1>"; ?>
<table align="center">

<?php 

   $Server="localhost";
     $username="root";
     $psrd="";
     $dbname = "Travel and Tourism";
     $connection= mysqli_connect($Server,$username,$psrd,$dbname); 

     $query="select * from Pakage";
    

      $result=mysqli_query($connection,$query);
      $break=0;

      if(mysqli_num_rows($result)>0)
      {

      while ($row=mysqli_fetch_array($result)) {
      	   if($break==2){
        echo "<tr>";
        $break=0;
      }
   
   
    echo'<td>';
     echo"<img src='".$row['Image']."' width='300px' height='320px'>";
    echo'</td>';
    echo'<td>';

    echo "<h4>";
    echo " ".$row['PakageName'];
    echo "</h4>";
    	echo "<h4>";
     echo "Description: ".$row['Description'];
      echo "</h4>";
     echo "<h4>";
    echo "Price: ".$row['Price'];
    echo "</h4>";

        echo "<h4>";
    echo "Catagory: ".$row['CatagoryName'];
    echo "</h4>";
           echo "<h4>";
    echo "Quantity: ".$row['Quantity'];
    echo "</h4>";
           echo "<h4>";
    echo "Start Date: ".$row['StartDate'];
    echo "</h4>";
           echo "<h4>";
    echo "End Date: ".$row['EndDate'];
    echo "</h4>";
     
?>
   <a href="#"> <b>Running</b></span> </a>
<?php 
   
$break++;      
echo "<hr>";
echo "<hr>";
echo'</td>';

    }
  }
  else
   {
 echo "<script>window.alert('Data Not Found');</script>";
   }



?>

</body>
</html>



