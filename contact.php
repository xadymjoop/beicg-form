<?php
// Get data from form 
$name = $_POST['name'];
$email_visitor= $_POST['email'];
$message= $_POST['message'];
 
$email_form = "recrutement.ca@proton.me";
$email_subject = "This is the subject line";

$email_body = "User Name: $name.\n".
                "User Email: $email_visitor.\n".
                    "User Message: $message.\n";



                
$to = "xadymjoop@gmail.com";

$headers = "Form: $email_form \r\n";

$headers = "Reply-To: $email_visitor \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: contact.html");

?>
