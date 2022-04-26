<?php
    $title = "Main";
    $message = "Message";
    $to = "nurtazayeldar@gmail.com";
    $from = "eldar.nurtaza.02.03@gmail.com";
    $subject = "Theme";
    
    $subject = "?utf-8?B?".base64_encode($subject)."?=";
    $headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";
    mail($tp, $subject, $message, $headers);
?>