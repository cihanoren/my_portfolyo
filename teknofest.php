<div class="project-card" id="kaya_dusme">
    <img src="assets/kaya_dusme.png" alt="Kaya Düşme Projesi" class="project-img1">
    <div class="project-info">
        <h3 class="project-title">Teknofest Kaya Düşme Projesi</h3>
        <p>
            Cyber Soldiers ekibi olarak geliştirdiğimiz bu proje, Artvin'in Seyitler Köyü yolunda sıkça meydana gelen kaya düşmelerine karşı
            teknolojik bir çözüm sunmayı amaçlamaktadır. Seyitler Köyü yolu, Artvin Çoruh Üniversitesi'nin Seyitler kampüsüne erişim sağlayan
            yüzlerce öğrenci ve personelin yanı sıra köy halkı tarafından da yoğun olarak kullanılmaktadır.
            <span id="dots-kaya_dusme">...</span>
        </p>
        <div id="more-kaya_dusme" style="display: none;">
            <p>
                Özellikle mevsim geçişleri ve yağışlı havalarda yaşanan kaya düşmeleri, can ve mal kayıpları açısından büyük bir risk oluşturmaktadır.
                Proje kapsamında, yol güvenliğini artırarak olası kazaları önlemek ve kullanıcıların güvenliğini sağlamak hedeflenmektedir.
                <br><br>
                Bu doğrultuda, ekip tarafından geliştirilen otonom uçuş yapabilen özel bir drone (uçan göz) ile düşme riski taşıyan
                kayaların görüntüleri kaydedilecek ve analiz için sunucuya aktarılacaktır. Sunucuda işlenen bu veriler, uzmanlara iletilerek
                kritik bölgelerde önceden önlem alınmasını sağlayacaktır.
                <br><br>
                Bunun yanı sıra, kaya düşmeleri sırasında yol üzerindeki sürücü ve yayaları anında uyarmak için,
                dağ yamaçlarına yerleştirilecek titreşim sensörleri kullanılacaktır. Bu sensörler, algıladıkları hareketlere bağlı olarak
                uyarı lambalarını aktive edecek ve erken uyarı mekanizması oluşturacaktır.
                <br><br>
                Proje kapsamında geliştirilecek sistem iki ana bileşenden oluşacaktır:
                <strong>Uçan Göz Devriye Sistemi</strong> ve <strong>Erken Uyarı Sistemi</strong>.
                Otonom olarak önceden belirlenen kalkış noktasından havalanan drone, düşme riski taşıyan bölgeleri
                tarayarak üzerindeki Raspberry Pi bilgisayarına bağlı kamera ile görüntü toplayacaktır.
                Toplanan veriler, drone'un iniş yaptığı noktadaki sunucuya SSH protokolü üzerinden kablosuz olarak aktarılacaktır.
                Sunucuda çalışan web tabanlı yazılım sayesinde, uzmanlar bu görüntüleri inceleyerek risk taşıyan kayaları tespit edebilecektir.
                <br><br>
                Uçan gözün tasarımında Pixhawk uçuş kontrol kartı, güçlü motorlar, güç dağıtım kartları ve karbon fiber gövde kullanılacaktır.
                Bu yenilikçi sistem, Artvin'in Seyitler Köyü yolunda yaşanan kaya düşme sorununa etkin bir çözüm sunarak, can ve mal kayıplarını
                en aza indirmeyi amaçlamaktadır.
            </p>
        </div>

        <div class="project-details hidden">
            <img src="assets/kaya_dusme.png" class="detail-img">
            <img src="assets/kaya_dusme_2.png" class="detail-img">
            <img src="assets/genel_sema.png" class="detail-img">
            <img src="assets/sunucu.png" class="detail-img">
            <img src="assets/teknofest_drone.jpg" class="detail-img">
            <img src="assets/tenofest_mac.jpg" class="detail-img">
            <img src="assets/teknofest_masa.jpg" class="detail-img">
            <img src="assets/teknofest_toplu.jpg" class="detail-img">
        </div>

        <button class="btn more-btn" onclick="toggleReadMore('kaya_dusme')" id="readmore_btn-kaya_dusme">Daha Fazla</button>
    </div>

</div>