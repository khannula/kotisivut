<?php
    // Alusta muuttujat
/*    $email_to =   'kari.t.hannula@gmail.com'; //the address to which the email will be sent
    $name     =   $_POST['name'];
    $email    =   $_POST['email'];
    $subject  =   $_POST['subject'];
    $message  =   $_POST['message'];

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    /*the $header variable is for the additional headers in the mail function,
     we are asigning 2 values, first one is FROM and the second one is REPLY-TO.
     That way when we want to reply the email gmail(or yahoo or hotmail...) will know
     who are we replying to. *
    $headers  = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if(mail($email_to, $subject, $message, $headers)){
        echo 'sent'; // we are sending this text to the ajax request telling it that the mail is sent..
    }else{
        echo 'failed';// ... or this one to tell it that it wasn't sent
    }
  */
/* viritys..
    $to      = 'kari.t.hannula@gmail.com';
    $subject = 'the subject';
    $message = 'hello';
    $headers = 'From: kartahan@gmail.com' . "\r\n" .
        'Reply-To: kartahan@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers); */

    $mail = new PHPMailer(true);

    //Send mail using gmail
    if($send_using_gmail){
        $mail->IsSMTP(); // telling the class to use SMTP
        $mail->SMTPAuth = true; // enable SMTP authentication
        $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
        $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
        $mail->Port = 587; // set the SMTP port for the GMAIL server
        $mail->Username = "kartahan@gmail.com"; // GMAIL username
        $mail->Password = "mickdooh3"; // GMAIL password
    }

    //Typical mail data
    $name     =   $_POST['name'];
        $email    =   $_POST['email'];
    $mail->AddAddress($email, $name);
    $mail->SetFrom($email_from, $name_from);
    $mail->Subject = "My Subject";
    $mail->Body = "Mail contents";

    try{
        $mail->Send();
        echo "Success!";
    } catch(Exception $e){
        //Something went bad
        echo "Fail :(";
    }
?>
