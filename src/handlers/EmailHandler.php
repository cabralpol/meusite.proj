<?php

namespace src\handlers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



class EmailHandler
{
    private static $host = "smtp.hostinger.com";
    private static $usename = "contato@tubaraorosa.com";
    private static $password = "Cne@mdc180967";

    public static function contato($array)
    {
        $mail = new PHPMailer(true);
        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
            $mail->CharSet = 'utf-8';
            $mail->isSMTP(); //Send using SMTP
            $mail->Host = self::$host; //Set the SMTP server to send through
            $mail->SMTPAuth = true; //Enable SMTP authentication
            $mail->Username = self::$usename; //SMTP username
            $mail->Password = self::$password; //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
            $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('contato@tubaraorosa.com', 'Atendimento'); //Origin
            $mail->addAddress('contato@tubaraorosa.com', 'Tubarão Rosa'); //Add a recipient
            $mail->addAddress('cabralpol@hotmail.com'); //Name is optional
            $mail->addReplyTo($array['email'], $array['name']); //reply to
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');            

            //Content
            $mail->isHTML(true); //Set email format to HTML
            $mail->Subject = 'Olá, Gostaria de saber mais sobre seu negócio';
            $mail->Body    = "<div>{$array['message']}<br /><br />
            Enviado por:
                <strong> {$array['name']}</strong><br />
                Email: {$array['email']}<br />
                Telefone: {$array['phone']}<br /><br />
                <hr>
                <table>
                    <tbody>
                        <tr>
                            <td style='font-family:verdana; font-size:11px; text-align:center'>
                                <a href='{$array['base']}' target='_blank'>
                                    <img src='{$array['base']}/assets/img/logo.png' alt='Tubarão cor de rosa, logo da empresa.' style='border:0; width:130px' />
                                </a>
                            </td>
                            <td style='font-family:verdana; font-size:12px; padding-left:10px'>
                                <strong>Tubarão Rosa Web Designer</strong><br />
                                <strong>Site:</strong>
                                <a href='{$array['base']}' target='_blank'>
                                    {$array['base']}
                                </a><br />
                                <strong>Twitter/Instagram:</strong> REDES SOCIAIS<br />
                                <strong>WhatApp:</strong> +55 (21) 3767-0094<br />
                                <strong>Fone:</strong> +55 (21) 9647-55044
                            </td>
                        </tr>
                    </tbody>
                </table>
                <hr>
            </div>";
            $mail->AltBody = "
            Mensagem: {$array['message']}\n
            ***************************\n\n
            Enviado por: {$array['name']}\n            
            Email: {$array['email']}\n
            Telefone: {$array['phone']}\n\n
            ***************************\n\n
            Att: Tubarão Rosa Web Designer\n
            Url: {$array['base']}\n
            WhatApp: +55 (21) 3767-0094\n
            Fone: +55 (21) 9647-55044\n
            Twitter/Instagram: REDES SOCIAIS\n";

            if ($mail->send()) {
                //Clear all addresses and attachments for the next iteration
                $mail->clearAddresses();
                $mail->clearAttachments();

                return 1;
            }
            return 0;
        } catch (Exception $e) {
            return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }

    public static function resposta($array)
    {
        $mail = new PHPMailer(true);
        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
            $mail->CharSet = 'utf-8';
            $mail->isSMTP(); //Send using SMTP
            $mail->Host = self::$host; //Set the SMTP server to send through
            $mail->SMTPAuth = true; //Enable SMTP authentication
            $mail->Username = self::$usename; //SMTP username
            $mail->Password = self::$password; //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
            $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('contato@tubaraorosa.com', 'Atendimento'); //Origin
            $mail->addAddress($array['email'], $array['name']); //Add a recipient                 

            //Content
            $mail->isHTML(true); //Set email format to HTML
            $mail->Subject = "Olá {$array['name']}, recebemos seu e-mail.";
            $mail->Body    = "<strong>Mensagem automática, não responda.</strong><br /><br />
            Obrigado por entrar em cotato conosco, logo retornaremos.<br /><br />
                <hr>
                <table>
                    <tbody>
                        <tr>
                            <td style='font-family:verdana; font-size:11px; text-align:center'>
                                <a href='{$array['base']}' target='_blank'>
                                    <img src='{$array['base']}/assets/img/logo.png' alt='Tubarão cor de rosa, logo da empresa.' style='border:0; width:130px' />
                                </a>
                            </td>
                            <td style='font-family:verdana; font-size:12px; padding-left:10px'>
                                <strong>Tubarão Rosa Web Designer</strong><br />
                                <strong>Site:</strong>
                                <a href='{$array['base']}' target='_blank'>
                                    {$array['base']}
                                </a><br />
                                <strong>Twitter/Instagram:</strong> REDES SOCIAIS<br />
                                <strong>WhatApp:</strong> +55 (21) 3767-0094<br />
                                <strong>Fone:</strong> +55 (21) 9647-55044
                            </td>
                        </tr>
                    </tbody>
                </table>
                <hr>
            </div>";
            $mail->AltBody = "
            Mensager: Mensagem automática, não responda.\n\n
            Obrigado por entrar em cotato conosco, logo retornaremos.\n
            ***************************\n\n
            Att: Tubarão Rosa Web Designer\n
            Url: {$array['base']}\n
            WhatApp: +55 (21) 3767-0094\n
            Fone: +55 (21) 9647-55044\n
            Twitter/Instagram: REDES SOCIAIS\n";

            if ($mail->send()) {
                //Clear all addresses and attachments for the next iteration
                $mail->clearAddresses();
                $mail->clearAttachments();

                return 1;
            }
            return 0;
        } catch (Exception $e) {
            return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
