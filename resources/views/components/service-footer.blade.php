<footer class="px-6 md:px-12 py-12 bg-darkBg border-t border-darkCard">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-10">
        <div>
            <h3 class="font-bold mb-4">Menu</h3>
            <ul class="space-y-2">
                <li><a href="{{ route('home') }}" class="text-grayText hover:text-neonGreen transition-colors">Accueil</a></li>
                <li><a href="#" class="text-grayText hover:text-neonGreen transition-colors">À propos</a></li>
                <li><a href="{{ route('service.index') }}" class="text-grayText hover:text-neonGreen transition-colors">Services</a></li>
                <li><a href="#" class="text-grayText hover:text-neonGreen transition-colors">Portfolio</a></li>
                <li><a href="{{ route('service.quote') }}" class="text-grayText hover:text-neonGreen transition-colors">Demande de devis</a></li>
            </ul>
        </div>

        <div>
            <h3 class="font-bold mb-4">À propos</h3>
            <ul class="space-y-2">
                <li><a href="#" class="text-grayText hover:text-neonGreen transition-colors">Biographie</a></li>
                <li><a href="#" class="text-grayText hover:text-neonGreen transition-colors">Équipe</a></li>
                <li><a href="#" class="text-grayText hover:text-neonGreen transition-colors">Carrière</a></li>
                <li><a href="#" class="text-grayText hover:text-neonGreen transition-colors">Témoignages</a></li>
                <li><a href="#" class="text-grayText hover:text-neonGreen transition-colors">FAQ</a></li>
            </ul>
        </div>

        <div>
            <h3 class="font-bold mb-4">Portfolio</h3>
            <ul class="space-y-2">
                <li><a href="#" class="text-grayText hover:text-neonGreen transition-colors">Projects</a></li>
                <li><a href="#" class="text-grayText hover:text-neonGreen transition-colors">Case Studies</a></li>
                <li><a href="#" class="text-grayText hover:text-neonGreen transition-colors">Clients</a></li>
                <li><a href="#" class="text-grayText hover:text-neonGreen transition-colors">Past Work</a></li>
                <li><a href="#" class="text-grayText hover:text-neonGreen transition-colors">Testimonials</a></li>
            </ul>
        </div>

        <div>
            <h3 class="font-bold mb-4">Services</h3>
            <ul class="space-y-2">
                <li><a href="{{ route('service.show', 'web-design') }}" class="text-grayText hover:text-neonGreen transition-colors">Web Design</a></li>
                <li><a href="{{ route('service.show', 'ui-ux-design') }}" class="text-grayText hover:text-neonGreen transition-colors">UI/UX Design</a></li>
                <li><a href="{{ route('service.show', 'mobile-design') }}" class="text-grayText hover:text-neonGreen transition-colors">Design Mobile</a></li>
                <li><a href="{{ route('service.show', 'branding') }}" class="text-grayText hover:text-neonGreen transition-colors">Branding</a></li>
                <li><a href="{{ route('service.show', 'graphic-design') }}" class="text-grayText hover:text-neonGreen transition-colors">Design Graphique</a></li>
            </ul>
        </div>
    </div>

    <div class="border-t border-darkCard pt-6 flex flex-col md:flex-row justify-between items-center">
        <p class="text-grayText text-sm mb-4 md:mb-0">© 2024 Issa Cissé. Tous droits réservés.</p>
        <div class="flex space-x-6">
            <a href="#" class="text-grayText text-sm hover:text-neonGreen transition-colors">Politique de confidentialité</a>
            <a href="#" class="text-grayText text-sm hover:text-neonGreen transition-colors">Conditions d'utilisation</a>
        </div>
    </div>
</footer>
