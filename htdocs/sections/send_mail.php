<?php

$option = $_GET['sel'][0];

if($option == 'senoidal') echo 100;
else echo 99;

/*use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);
try 
{
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'disruptiva.ae@gmail.com';                    
    $mail->Password   = 'uequ lwyq hzde sdkh';                               
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                    

    $mail->setFrom('disruptiva.ae@gmail.com');
    $mail->addAddress('alejopavon2021@gmail.com');    

    $mail->isHTML(true);                                 
    $mail->Subject = 'Sono uno';
    $mail->Body    = 'Prubea';

    $mail->send();
} 
catch (Exception $e) 
{
    echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
}
    
*/
?>