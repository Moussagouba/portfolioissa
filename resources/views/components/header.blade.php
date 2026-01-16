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

            <div id="mobile-menu" class="hidden md:flex items-start space-x-8 flex-col md:flex-row space-y-6 md:space-y-0 fixed top-0 left-0 w-80 h-full bg-darkBg transform -translate-x-full transition-transform duration-300 md:relative md:top-auto md:left-auto md:w-auto md:h-auto md:translate-x-0 md:bg-transparent z-50 md:z-auto p-6 md:p-0">
                <button onclick="toggleMenu()" class="md:hidden self-end text-white text-2xl mb-4">&times;</button>
                <a href="{{ route('home') }}" class="text-white hover:text-brand-green transition-colors text-lg md:text-base">Accueil</a>
                <a href="{{ route('portfolio.index') }}" class="text-white hover:text-brand-green transition-colors text-lg md:text-base">Portfolio</a>
                <a href="{{ route('about') }}" class="text-white hover:text-brand-green transition-colors text-lg md:text-base">À Propos</a>
                <a href="{{ route('service.index') }}" class="text-white hover:text-brand-green transition-colors text-lg md:text-base">Services</a>
                <a href="{{ route('skill.index') }}" class="text-white hover:text-brand-green transition-colors text-lg md:text-base">Compétences</a>
                <a href="{{ route('contact.index') }}" class="text-white hover:text-brand-green transition-colors text-lg md:text-base">Contact</a>
                <a href="{{ route('service.quote') }}" class="bg-brand-green text-black px-4 py-2 rounded-full font-medium hover:bg-opacity-90 transition-colors md:hidden text-lg md:text-base mt-4">Demander un devis</a>
            </div>

            <div class="hidden md:block">
                <a href="{{ route('service.quote') }}" class="bg-brand-green text-black px-4 py-2 rounded-full font-medium hover:bg-opacity-90 transition-colors">Demander un devis</a>
            </div>
        </nav>
    </header>
