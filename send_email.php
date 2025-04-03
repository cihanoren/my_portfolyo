<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form verilerini al
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // E-posta parametreleri
    $to = "cihanoren10@gmail.com";  // Kendi e-posta adresinizi buraya yazın
    $subject = "New Contact Message: $name";

    // PHPMailer nesnesi oluştur
    $mail = new PHPMailer(true);

    try {
        // Sunucu ayarları
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Örneğin Gmail SMTP server'ı
        $mail->SMTPAuth = true;
        $mail->Username = 'cihanoren10@gmail.com';  // E-posta adresinizi buraya yazın
        $mail->Password = 'kvap dbox hhoi bafr';  // E-posta şifrenizi buraya yazın
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Alıcı ve gönderici ayarları
        $mail->setFrom($email, $name);  // Gönderen adresi formdan alınan e-posta olacak
        $mail->addAddress($to);  // Alıcı adresi

        // E-posta içeriği
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = "
        <html lang='tr'>
        <head>
            <title>Yeni İletişim Mesajı</title>
            <link rel='stylesheet' href='send_email_page.css'>
        </head>
        <body>
            <h2>Mesaj Detayları:</h2>
            <p><strong>Adı:</strong> $name</p>
            <p><strong>E-posta:</strong> $email</p>
            <p><strong>Mesaj:</strong><br> $message </p>
        </body>
        </html>
        ";

        // E-posta gönder
        if ($mail->send()) {
            // Mesaj başarılıysa, contact.php'ye yönlendir
            header("Location: contact.php?success=true");
            exit();  // Yönlendirme sonrası işlem sonlandırılmalı
        } else {
            echo "Mesaj gönderilemedi. Lütfen tekrar deneyin.";
        }
    } catch (Exception $e) {
        echo "Mesaj gönderilemedi. PHPMailer hata: {$mail->ErrorInfo}";
    }
}
?>
