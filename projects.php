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
            <li><a href="projects.php">Projelerim</a></li>
            <li><a href="contact.php">İletişim</a></li>
        </ul>
    </nav>
</header>

<section id="projects">
    <h2 class="section-title">Projelerim</h2>
    <div class="projects-container">
        <div class="project-card" id="tale_maker">
            <img src="play_store_kapak.png" alt="Tale Maker" class="project-img1">
            <div class="project-info">
                <h3 class="project-title">Tale Maker</h3>
                <p class="project-description short">"Tale Maker ile yaratıcılığın sınırlarını keşfedin! Masallar, bilmeceler ve eğlenceli oyunlarla..."</p>
                <button class="btn more-btn" onclick="toggleProjectDetails('tale_maker')">Daha Fazla</button>
                <div class="project-details hidden">
                    <p class="full-description">
                        Tale Maker ile yaratıcılığın sınırlarını keşfedin! Masallar, bilmeceler ve eğlenceli oyunlarla dolu bu uygulama, hem çocuklar hem de yetişkinler için ilham verici bir deneyim sunar. Hayal gücünüzü harekete geçiren özelliklerle dolu Tale Maker, aynı zamanda öğrenmeyi ve eğlenmeyi bir araya getiriyor.
                    <h3>Özellikler:</h3>
                    <ul>
                        <li><strong>Masal Oluşturma:</strong> Hayal gücünüzü konuşturun! Seçtiğiniz kelimelerle yapay zekanın eşsiz masallar oluşturmasını sağlayın. Çocuklar için uyku öncesi hikayeler veya yaratıcı bir proje için harika bir araç!</li>
                        <li><strong>Bilmece Oluşturma ve Çözme:</strong> Eğlenceli bilmeceler oluşturun veya mevcut bilmecelerle zihninizi zorlayın. Cevapları görmek için kendinizi test edin ve arkadaşlarınızla eğlenceli yarışmalara katılın.</li>
                        <li><strong>Eğlenceli Oyunlar:</strong>
                            <ul>
                                <li>Bayrak Tahmin Oyunu: Rastgele bayraklarla ülkeyi tahmin edin! Yanlış tahminler ipucu açar ve o ülke hakkında ilginç bilgiler edinmenizi sağlar.</li>
                                <li>Mayın Tarlası: Strateji ve dikkat gerektiren klasik bir oyun. Tüm mayınları açmadan temizlemeye çalışın!</li>
                                <li>Adam Asmaca: Kelime tahmini yaparak eğlenin. Hem çocuklar hem de yetişkinler için mükemmel bir oyun.</li>
                            </ul>
                        </li>
                    </ul>
                    <h3>Neden TaleMaker?</h3>
                    <p>TaleMaker sadece bir uygulama değil, aynı zamanda yaratıcılığınızı geliştiren, öğrenirken eğlendiren ve ailenizle ya da arkadaşlarınızla keyifli vakit geçirmenizi sağlayan bir platform. Uygulamamız, kullanıcı dostu arayüzü ve eğlenceli özellikleriyle hayatınıza değer katacak!</p>
                    </p>
                    <img src="tale_maker_2.png" class="detail-img">
                    <button class="btn close-btn" onclick="toggleProjectDetails('tale_maker')">Kapat</button>
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


başka proje açıksa diğeri kapanmıyor aynı anda iki proje açılabiliyor daha fazla ile metin devam etmiyor