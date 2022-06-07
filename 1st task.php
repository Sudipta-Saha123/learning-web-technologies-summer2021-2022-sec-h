<?php
function rectangle_area($length = 3, $width = 5)
{
    $area = $length * $width;
    echo "Area Of Rectangle with length " . $length . " & width " . $width . " is " . $area ."<br>" ;

    $perimeter= 2 * ($length + $width);
    echo "perimeter Of Rectangle with length " . $length . " & width " . $width . " is " . $perimeter. "<br>";
}
rectangle_area(); 

?>