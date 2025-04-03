<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projelerim</title>
    <link rel="stylesheet" href="projects_page.css">
</head>
<body>

<header id="main-header">
    <nav>
        <ul>
            <li><a href="index.php">Ana Sayfa</a></li>
            <li><a href="projects.php">Projeler</a></li>
            <li><a href="contact.php">İletişim</a></li>
        </ul>
    </nav>
</header>

<section id="projects">
    <h2 class="section-title">Projeler</h2>
    <div class="projects-container">

        <!-- Tale Maker Projesi -->
        <?php
        include 'tale_maker.php';
        ?>

        <!-- Bitki Bilgi Sistemi Projesi -->
        <?php
        include 'bitki_bilgi.php';
        ?>

        <?php
        include 'teknofest.php';
        ?>

    </div>

    <script>document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll('.project-card').forEach(card => {
                const details = card.querySelector('.project-details');
                if (details) {
                    details.classList.add('hidden');
                }
                card.classList.remove('expanded');
            });
        });

        // toggleReadMore fonksiyonunu global hale getir
        window.toggleReadMore = function(projectId) {
            var projectCard = document.getElementById(projectId);
            if (!projectCard) return; // Eğer proje kartı bulunamazsa fonksiyondan çık

            var details = projectCard.querySelector('.project-details');
            var dots = projectCard.querySelector("#dots-" + projectId);
            var moreText = projectCard.querySelector("#more-" + projectId);
            var btnText = projectCard.querySelector("#readmore_btn-" + projectId);

            // Önceden açılmış olanları kapat
            document.querySelectorAll('.project-card').forEach(card => {
                if (card !== projectCard) {
                    const otherDetails = card.querySelector('.project-details');
                    if (otherDetails) otherDetails.classList.add('hidden');
                    card.classList.remove('expanded');

                    const otherBtn = card.querySelector('.more-btn');
                    if (otherBtn) otherBtn.innerHTML = "Daha Fazla";

                    const otherDots = card.querySelector('[id^="dots-"]');
                    const otherMoreText = card.querySelector('[id^="more-"]');
                    const otherReadMoreBtn = card.querySelector('[id^="readmore_btn-"]');

                    if (otherDots) otherDots.style.display = "inline";
                    if (otherMoreText) otherMoreText.style.display = "none";
                    if (otherReadMoreBtn) otherReadMoreBtn.innerHTML = "Daha Fazla";
                }
            });

            // Eğer detaylar açıksa kapat, kapalıysa aç
            if (details && details.classList.contains('hidden')) {
                details.classList.remove('hidden');
                projectCard.classList.add('expanded');
                if (btnText) btnText.innerHTML = "Daha Az";
                if (moreText) moreText.style.display = "inline";
                if (dots) dots.style.display = "none";
            } else {
                if (details) details.classList.add('hidden');
                projectCard.classList.remove('expanded');
                if (btnText) btnText.innerHTML = "Daha Fazla";
                if (moreText) moreText.style.display = "none";
                if (dots) dots.style.display = "inline";
            }
        };
    </script>

</section>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        setTimeout(() => {
            document.getElementById('projects').classList.add('visible');

            document.querySelectorAll('.project-card').forEach((card, index) => {
                setTimeout(() => {
                    card.classList.add('visible');
                }, index * 200); // Her kartı 200ms gecikmeli aç
            });

        }, 300);
    });


</script>
</body>
</html>
