<?php
if($_POST["submit"]) {
    $recipient="sauravkeshari_aryal@hotmail.com";
    $subject="[Important:] Message from Portfolio.";
    $sender=$_POST["contactName"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["contactMessage"];

    $mailBody="Name: $contactName\nEmail: $contactEmail\n\n$contactMessage";

    mail($recipient, $subject, $mailBody, "From: $contactName <$contactEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}
?>