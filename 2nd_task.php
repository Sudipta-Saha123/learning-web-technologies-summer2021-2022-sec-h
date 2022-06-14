<?php
session_start();
$mail=$Request['mail'];
if($mail!=null){
    if(filter_var($mail, FILTER_VALIDATE_EMAIL))
    {
        echo "Success"
    }
    else{
        echo "invalid request"
    }
}
else{
    echo " invalid request"
}

?>