function toggleProjectDetails(projectId) {
    const projectCard = document.getElementById(projectId);
    const details = projectCard.querySelector('.project-details');
    const moreBtn = projectCard.querySelector('.more-btn');
    const closeBtn = projectCard.querySelector('.close-btn');
    const allProjects = document.querySelectorAll('.project-card');

    // Diğer projelerin detaylarını kapat
    allProjects.forEach(proj => {
        if (proj !== projectCard) {  // Tıklanan proje dışındaki projeler
            const projDetails = proj.querySelector('.project-details');
            const projMoreBtn = proj.querySelector('.more-btn');
            const projCloseBtn = proj.querySelector('.close-btn');
            projDetails.classList.add('hidden');
            proj.classList.remove('expanded');
            if (projMoreBtn) projMoreBtn.style.display = 'inline-block';
            if (projCloseBtn) projCloseBtn.style.display = 'none';
        }
    });

    // Tıklanan projenin detaylarını aç
    if (details.classList.contains('hidden')) {
        details.classList.remove('hidden');
        projectCard.classList.add('expanded');
        moreBtn.style.display = 'none';
        closeBtn.style.display = 'inline-block';
    } else {
        details.classList.add('hidden');
        projectCard.classList.remove('expanded');
        moreBtn.style.display = 'inline-block';
        closeBtn.style.display = 'none';
    }
}

// Sayfa yüklendiğinde tüm proje detaylarını kapalı hale getir
window.onload = function () {
    document.querySelectorAll('.project-details').forEach(detail => detail.classList.add('hidden'));
    document.querySelectorAll('.close-btn').forEach(btn => btn.style.display = 'none');
};
