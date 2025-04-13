<?php
// Enable error reporting for debugging (disable display_errors in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Use FILTER_SANITIZE_FULL_SPECIAL_CHARS instead of the deprecated FILTER_SANITIZE_STRING
    $name    = filter_var(trim($_POST['name']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email   = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $subject = filter_var(trim($_POST['subject']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $mail = new PHPMailer(true);

    try {
        // SMTP configuration for Gmail
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';                // Gmail SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'muddassernadeem@gmail.com';     // Your Gmail address
        $mail->Password   = 'bjhuyuytyfqwmcyk';          // Your Gmail App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Sender & recipient settings
        $mail->setFrom('muddassernadeem@gmail.com', 'Website Contact Form');
        $mail->addAddress('muddassernadeem@gmail.com');     // Where you want to receive the email
        $mail->addReplyTo($email, $name);                      // User's email as reply-to

        // Email content settings
        $mail->isHTML(false); // Plain text format
        $mail->Subject = "New Message from Contact Form: $subject";
        $mail->Body    = "You have received a new message from your website's contact form.\n\n" .
                         "Name: $name\n" .
                         "Email: $email\n" .
                         "Subject: $subject\n\n" .
                         "Message:\n$message";

        $mail->send();
        echo "Message sent successfully.";
    } catch (Exception $e) {
        echo "Sorry, your message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "Invalid request.";
}
?>
