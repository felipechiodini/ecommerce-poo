<?php
use PHPMailer\PHPMailer\PHPMailer;

class Email {

    public static function sendMail($email, $name) {
        $phpmailer = new PHPMailer();
        $phpmailer->isSMTP();
        $phpmailer->Host = "smtp.mailtrap.io";
        $phpmailer->SMTPAuth = true;
        $phpmailer->Port = 2525;
        $phpmailer->Username = "8df9c39cd21ff9";
        $phpmailer->Password = "69cd3c467ea885";

        $phpmailer->setFrom("from@example.com", "Minha Loja");
        $phpmailer->addAddress($email, $name);

        $phpmailer->isHTML(true);
        $phpmailer->Subject = "Assunto";
        $phpmailer->Body = "This is the HTML message body <b>in bold!</b>";
        $phpmailer->AltBody = "This is the body in plain text for non-HTML phpmailer clients";

        $phpmailer->send();
    }

}
?>