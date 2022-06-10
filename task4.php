<?php
        $no1=11;
        $no2=15;
        $no3=6;
        if($no1>$no2 && $no1>$no3){
            echo "largest nukber: ". $no1;
        }
        else{
            if($no2>$no1 && $no2>$no3){
                echo "largst number: ". $no2;
            }
            else
            echo "largest number: " .$no3;
        }
?>