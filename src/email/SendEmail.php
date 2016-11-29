<?php
namespace Cursus\email;

class SendEmail{
  public static function sendEmail($to, $subject, $message, $from = ""){
    if(strlen($from) == 0){
      $from = getenv('SMTP_FROM');
    }

    // Create the Transport
    $transport = \Swift_SmtpTransport::newInstance(getenv('SMTP_HOST'), getenv('SMTP_PORT'))
      ->setUsername(getenv('SMTP_USER'))
      ->setPassword(getenv('SMTP_PASS'));

    /*
    You could alternatively use a different transport such as Sendmail or Mail:

    // Sendmail
    $transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -bs');

    // Mail
    $transport = Swift_MailTransport::newInstance();
    */

    // Create the Mailer using your created Transport
    $mailer = \Swift_Mailer::newInstance($transport);

    // Create a message
    $message = \Swift_Message::newInstance($subject)
      ->setFrom($from)
      ->setTo($to)
      ->setBody($message, 'text/html');

    // Send the message
    $result = $mailer->send($message);
  }
}
?>
