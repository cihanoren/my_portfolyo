document.addEventListener("DOMContentLoaded", function () {
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
