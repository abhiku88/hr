<?php

$to="testsg@yopmail.com,testsg1@yopmail.com";
$subject="test subject";
$msg="test msg";
    
if(!mail($to,$subject,$msg)){
        echo "<script type='text/javascript'> alert('email not sent');</script>";
}else{
        echo "<script type='text/javascript'>alert('email send');</script>";
    };

?>