<?php
    if (isset($_POST('subscribe'))) {
        $name = $_POST('name');
        $email = $_POST('email');

        $to = "mudassirameen104@gmai.com";
        $subject = "Newsletter Subscription";
        $message = $name . "subscribe your Newsletter. \nEmail: " $email;
        $header = "From: " . $name . ".";

        if (mail($to, $subject, $message, $header)) {
            echo "Subscribe success fully.\n $name we will contact you shortly";
        } else {
            echo "Someting went wrong!!!";
        }
        
    }

?>