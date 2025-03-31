<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projelerim</title>
    <link rel="stylesheet" href="projects_page.css">
    <script defer src="projects.js"></script>
</head>
<body>
<header id="main-header">
    <nav>
        <ul>
            <li><a href="index.php">Ana Sayfa</a></li>
            <li><a href="about.php">Hakkımda</a></li>
            <li><a href="contact.php">İletişim</a></li>
        </ul>
    </nav>
</header>

<section id="projects">
    <h2 class="section-title">Projelerim</h2>
    <div class="projects-container">

        <div class="project-card" id="project1">
            <img src="play_store.png" alt="Tale Maker" class="project-img1">
            <div class="project-info">
                <h3 class="project-title">Tale Maker</h3>
                <p class="project-description short">"Tale Maker ile yaratıcılığın sınırlarını keşfedin! Masallar, bilmeceler ve eğlenceli oyunlarla..."</p>
                <button class="btn more-btn" onclick="toggleProjectDetails('project1')">Daha Fazla</button>
                <div class="project-details hidden">
                    <p class="full-description">"Tale Maker ile yaratıcılığın sınırlarını keşfedin! Masallar, bilmeceler ve eğlenceli oyunlarla dolu bu uygulama..."</p>
                    <img src="" class="detail-img">
                    <img src="tale_maker_2.png" class="detail-img">
                    <button class="btn close-btn" onclick="toggleProjectDetails('project1')">Kapat</button>
                </div>
            </div>
        </div>

        <div class="project-card" id="project2">
            <img src="project2.jpg" alt="Proje 2" class="project-img">
            <div class="project-info">
                <h3 class="project-title">Proje 2</h3>
                <p class="project-description short">Web tabanlı bir uygulama geliştirdim, kullanıcıların verilerini kolayca yönetebilmelerini sağlıyor...</p>
                <button class="btn more-btn" onclick="toggleProjectDetails('project2')">Daha Fazla</button>
                <div class="project-details hidden">
                    <p class="full-description">Web tabanlı bir uygulama geliştirdim, kullanıcıların verilerini kolayca yönetebilmelerini sağlıyor. Daha detaylı özellikler...</p>
                    <img src="project2_1.jpg" class="detail-img">
                    <button class="btn close-btn" onclick="toggleProjectDetails('project2')">Kapat</button>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>

css dosyasında project-img ler karışıyor onlar ayarlanacak