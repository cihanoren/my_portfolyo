<?php
// success parametresini kontrol et
$success = isset($_GET['success']) && $_GET['success'] == 'true';
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Sayfası</title>
    <link rel="stylesheet" href="contact_page.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Ana Sayfa</a></li>
            <li><a href="projects.php">Projeler</a></li>
            <li><a href="contact.php">İletişim</a></li>
        </ul>
    </nav>
</header>

<section id="contact">
    <div class="contact-container">
        <h1 class="section-title">Bize Ulaşın</h1>
        <p>Bizimle iletişime geçmekten çekinmeyin! Sorularınızı yanıtlamaktan, projeleriniz hakkında konuşmaktan
            ve yeni fikirler üretmekten mutluluk duyarız. Aklınızdaki projeyi faaliyete geçirmek veya mobil uygulama
            geliştirme ile ilgili bilgi almak isterseniz, doğru yerdesiniz! Ayrıca, birlikte çalışmak ve yaratıcı
            projelere imza atmak için de bizlere ulaşabilirsiniz. Aşağıdaki formu doldurarak bize mesajınızı
            iletebilirsiniz. En kısa sürede size dönüş yapacağız!</p>

        <form action="send_email.php" method="POST" class="contact-form" id="contactForm">
            <div class="input-group">
                <input type="text" name="name" placeholder="Adınız" required>
            </div>
            <div class="input-group">
                <input type="email" name="email" placeholder="E-posta Adresiniz" required>
            </div>
            <div class="input-group">
                <textarea name="message" placeholder="Mesajınız" required></textarea>
            </div>
            <button type="submit" class="send-btn">Mesajı Gönder</button>
        </form>

        <!-- Başarı mesajı -->
        <div id="successMessage" class="message-success" style="display: none;">
            <div class="tick-icon">✓️</div>
            <p>Mesajınız başarıyla gönderildi!</p>
        </div>

    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const successMessage = document.querySelector(".message-success");
        if (successMessage) {
            const tickIcon = document.querySelector(".tick-icon");
            const messageText = document.querySelector(".message-success p");

            // Animasyonları başlat
            successMessage.style.animation = "fadeIn 2s forwards";
            tickIcon.style.animation = "tickIn 2s forwards 0.5s";
            messageText.style.animation = "textIn 2s forwards 1s";
        }
    });
</script>

<script>
    document.querySelector(".contact-form").addEventListener("submit", function(e) {
        e.preventDefault();  // Formun normal gönderimini engeller

        const form = document.getElementById('contactForm');
        const successMessage = document.getElementById('successMessage');

        // Formu gizle
        form.style.display = "none";

        // Başarı mesajını göster ve animasyonu başlat
        successMessage.style.display = "flex";
        successMessage.classList.add("show-message");

        // 5 saniye sonra başarı mesajını gizle ve formu tekrar göster
        setTimeout(function() {
            successMessage.classList.remove("show-message");  // Animasyonu bitir
            successMessage.classList.add("hide-message");  // Gizleme animasyonunu başlat

            // 2 saniye sonra formu tekrar göster
            setTimeout(function() {
                successMessage.style.display = "none";
                form.style.display = "block";
                successMessage.classList.remove("hide-message");  // Animasyonu temizle
            }, 2000); // Animasyon süresi (fadeOut)
        }, 5000); // 5000ms = 5 saniye
    });
</script>



</body>
</html>
