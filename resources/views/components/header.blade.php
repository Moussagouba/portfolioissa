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

            <button id="hamburger" class="md:hidden text-white">
                <svg id="hamburger-icon" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <div id="mobile-menu" class="hidden md:flex items-center space-x-8 flex-col md:flex-row space-y-4 md:space-y-0 absolute top-full left-0 right-0 bg-gray-800 p-4 md:p-0 md:bg-transparent md:relative md:top-auto md:left-auto md:right-auto">
                <a href="{{ route('home') }}" class="text-white hover:text-brand-green transition-colors">Accueil</a>
                <a href="{{ route('portfolio.index') }}" class="text-white hover:text-brand-green transition-colors">Portfolio</a>
                <a href="{{ route('about') }}" class="text-white hover:text-brand-green transition-colors">À Propos</a>
                <a href="{{ route('service.index') }}" class="text-white hover:text-brand-green transition-colors">Services</a>
                <a href="{{ route('skill.index') }}" class="text-white hover:text-brand-green transition-colors">Compétences</a>
                <a href="{{ route('contact.index') }}" class="text-white hover:text-brand-green transition-colors">Contact</a>
                <a href="{{ route('service.quote') }}" class="bg-brand-green text-black px-4 py-2 rounded-full font-medium hover:bg-opacity-90 transition-colors md:hidden">Demander un devis</a>
            </div>

            <div class="hidden md:block">
                <a href="{{ route('service.quote') }}" class="bg-brand-green text-black px-4 py-2 rounded-full font-medium hover:bg-opacity-90 transition-colors">Demander un devis</a>
            </div>
        </nav>
    </header>
