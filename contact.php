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
    <!-- Font Awesome Kütüphanesi için -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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

        <!-- Sosyal Medya Bağlantıları -->
        <div class="social-media">
            <p>Bizi sosyal medyada takip edin:</p>
            <ul>
                <li><a href="https://www.facebook.com/yourprofile" target="_blank" class="social-icon">
                        <i class="fab fa-facebook-f"></i></a></li>
                <li><a href="https://x.com/cihan_orn?s=21&t=RQj_iBjHjM9vj_gNGoDq8g" target="_blank" class="social-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                        </svg></a></li>
                <li><a href="https://www.instagram.com/cihan.orenn/" target="_blank" class="social-icon">
                        <i class="fab fa-instagram"></i></a></li>
                <li><a href="https://www.linkedin.com/in/cihan-ören-b44373257" target="_blank" class="social-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                        </svg></a></li>
                <li><a href="https://www.github.com/cihanoren" target="_blank" class="social-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
                        </svg></a></li>
            </ul>
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
