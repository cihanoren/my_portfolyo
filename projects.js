function toggleProjectDetails(projectId) {
    const projectCard = document.getElementById(projectId);
    const details = projectCard.querySelector('.project-details');
    const btn = projectCard.querySelector('.more-btn');

    // Eğer proje detayları görünürse, gizle ve butonu "Daha Fazla"ya dönüştür
    if (details.style.display === "block" || projectCard.classList.contains('expanded')) {
        details.style.display = "none";
        projectCard.classList.remove('expanded');
        btn.innerHTML = "Daha Fazla";
    } else {
        // Eğer proje detayları gizliyse, göster ve butonu "Kapat" olarak değiştir
        details.style.display = "block";
        projectCard.classList.add('expanded');
        btn.innerHTML = "Kapat";
    }
}

// Sayfa yüklendiğinde tüm proje detaylarını kapalı hale getir
window.onload = function () {
    document.querySelectorAll('.project-card').forEach(card => {
        const details = card.querySelector('.project-details');
        details.style.display = "none"; // Detayları gizle
        card.classList.remove('expanded'); // 'expanded' sınıfını kaldır
    });
};
