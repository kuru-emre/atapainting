<?php

    $to = "atawalldesign@gmail.com";
    $from = $_REQUEST['email'];
    $subject = $_REQUEST['subject'];
    $name = $_REQUEST['name'];
    $headers = "From: $from";

    $fields = array();
    $fields["name"] = "name";
    $fields["email"] = "email";
    $fields["subject"] = "subject";
    $fields["message"] = "message";

    $body = "You have a new message!:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>
