// Fonctions interactives pour le site

// Fonction pour le menu hamburger
function toggleMenu() {
    const menu = document.getElementById('mobile-menu');
    const icon = document.getElementById('hamburger-icon');
    if (menu.classList.contains('hidden')) {
        icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />';
    } else {
        icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />';
    }
    menu.classList.toggle('hidden');
}

// Fonction pour les accordéons FAQ
document.addEventListener('DOMContentLoaded', function() {
    // Event listener pour le hamburger
    const hamburger = document.getElementById('hamburger');
    if (hamburger) {
        hamburger.addEventListener('click', toggleMenu);
    }

    // Simple toggle pour les éléments FAQ
    document.querySelectorAll('.border-b').forEach(item => {
        item.addEventListener('click', event => {
            const content = item.querySelector('div:nth-child(2)');
            const arrow = item.querySelector('svg');

            if (content.style.display === 'none' || content.style.display === '') {
                content.style.display = 'block';
                arrow.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>';
            } else {
                content.style.display = 'none';
                arrow.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>';
            }
        });
    });

    // Animation pour les cartes
    document.querySelectorAll('.card-hover').forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.transform = 'translateY(-10px)';
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = 'translateY(0)';
        });
    });
});
