// Fonctions interactives pour le site

// Fonction pour les accordéons FAQ
document.addEventListener('DOMContentLoaded', function() {
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
