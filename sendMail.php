<?php
$posted = $_POST;
    print_r($posted);
    if(isset($posted)){
        
        $to = "bonifacepereira@gmail.com";
        $subject = "HTML email";
        $message = "<br> <strong>Sender:</strong> ".$posted['firstname'].' '.$posted['lastname'];
        $message .= "<br> <strong>Email of sender</strong>: ".$posted['email'];
        $message .= "<br> <strong>Message</strong>: ".$posted['message'];
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <contactus@asrsoftwares.com>' . "\r\n";
        // $headers .= 'Cc: myboss@example.com' . "\r\n";

        $res = mail($to,$subject,$message,$headers);
        if($res){
            echo 'true';
        }else{
            echo 'false';
        }
    }

?>