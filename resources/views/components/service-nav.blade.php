<nav class="px-6 py-4 md:px-12 flex justify-between items-center">
    <div class="flex items-center">
        <a href="{{ route('home') }}" class="flex items-center">
            <svg class="w-8 h-8 text-neonGreen" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-2 text-xl font-bold">Issa cisse</span>
        </a>
    </div>

    <div class="hidden md:flex space-x-8">
        <a href="{{ route('home') }}" class="text-grayText hover:text-neonGreen transition-colors">Accueil</a>
        <a href="#" class="text-grayText hover:text-neonGreen transition-colors">À propos</a>
        <a href="#" class="text-grayText hover:text-neonGreen transition-colors">Portfolio</a>
        <a href="{{ route('service.index') }}" class="{{ request()->routeIs('service.*') ? 'text-neonGreen' : 'text-grayText hover:text-neonGreen' }} transition-colors">Services</a>
        <a href="{{ route('skill.index') }}" class="{{ request()->routeIs('skill.*') ? 'text-neonGreen' : 'text-grayText hover:text-neonGreen' }} transition-colors">Compétences</a>
        <a href="#" class="text-grayText hover:text-neonGreen transition-colors">Contact</a>
    </div>

    <a href="{{ route('service.quote') }}" class="bg-neonGreen text-black px-5 py-2 rounded-full font-medium hover:bg-opacity-90 transition-all">
        Demander un devis
    </a>
</nav>
