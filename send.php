<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];



    $email_from = 'From: ".$visitor_email"';

    $email_subject = "Lenka design- klient";
    
    $email_body = "Jméno: $name. \n".
                    "Email: $visitor_email.\n".
                        "Zpráva: $message.\n".
                        "Telefon: $phone.\n";
    
    $to = "stadnikovalenka@gmail.com";

    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    $headers .= "Contact: $phone \r\n";

    mail($to,$email_subject,$email_body,$headers);
    header("Location: kontakt.html");

?>