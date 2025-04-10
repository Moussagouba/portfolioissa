<header class="relative z-10">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center">
                    <svg class="h-8 w-8 text-brand-green" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="ml-2 font-bold text-white">Issa Cissé</span>
                </a>
            </div>

            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-white hover:text-brand-green transition-colors">Accueil</a>
                <a href="#" class="text-white hover:text-brand-green transition-colors">Portfolio</a>
                <a href="#" class="text-white hover:text-brand-green transition-colors">À Propos</a>
                <a href="{{ route('service.index') }}" class="text-white hover:text-brand-green transition-colors">Services</a>
                <a href="{{ route('skill.index') }}" class="text-white hover:text-brand-green transition-colors">Compétences</a>
                <a href="#" class="text-white hover:text-brand-green transition-colors">Contact</a>
            </div>

            <div>
                <a href="{{ route('service.quote') }}" class="bg-brand-green text-black px-4 py-2 rounded-full font-medium hover:bg-opacity-90 transition-colors">Demander un devis</a>
            </div>
        </nav>
    </header>