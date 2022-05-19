<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$number= $_POST['number'];
$to = "janwolczynski2004@gmail.com";
$subject = "Mail ze strony";
$txt ="Imię i nazwisko: ". $name . "\r\n  Email: " . $email . "\r\n Numer telefonu: " . $number . "\r\n Wiadomość: " . $message;
$headers = "Od: noreply@Bio-NET.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>