<?php

/**
 * @ Autor: Fernando Rz
 **/

class Sendmailfx
{
    public static function enviar($options = array())
    {
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = SMPP_HOST;
        $mail->SMTPAuth = true;
        $mail->Username = SMPP_USER;
        $mail->Password = SMPP_PASS;
        $mail->SMTPSecure = 'tls';
        $mail->Port = SMPP_PORT;

        $mail->Subject = $options['subject'];
        $mail->isHTML(true);
        $mail->From = SMPP_FROM;
        $mail->FromName = $options['fromname'];
        $mail->addAddress($options['to']);
        $mail->AddCC($options['cc']);

        $mail->Body = $options['body'];

        if (!$mail->send()) {
            //echo 'Mailer Error: ' . $mail->ErrorInfo;
            return false;
        } else {
            return true;
        }
    }
}


