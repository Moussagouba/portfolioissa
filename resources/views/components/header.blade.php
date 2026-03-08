<header class="relative z-10">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center">
                    <svg class="h-8 w-8 text-brand-green" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                </a>
            </div>

            <button id="hamburger" class="md:hidden text-white p-2 hover:bg-brand-green hover:bg-opacity-10 rounded-lg transition-colors duration-200">
                <svg id="hamburger-icon" class="h-6 w-6 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <!-- Overlay pour mobile -->
            <div id="mobile-overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden md:hidden z-40 transition-opacity duration-300" onclick="toggleMenu()"></div>

            <!-- Menu Mobile -->
            <div id="mobile-menu" class="md:flex items-start space-x-8 flex-col md:flex-row space-y-6 md:space-y-0 fixed top-0 left-0 w-80 h-full bg-gradient-to-b from-slate-900 to-slate-950 border-r border-brand-green border-opacity-20 transform -translate-x-full transition-transform duration-300 ease-out md:relative md:top-auto md:left-auto md:w-auto md:h-auto md:translate-x-0 md:bg-transparent md:border-none z-50 md:z-auto p-6 md:p-0 shadow-2xl md:shadow-none">
                <!-- Fermer le menu -->
                <button onclick="toggleMenu()" class="md:hidden absolute top-6 right-6 text-white hover:text-brand-green transition-colors duration-200">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <!-- Logo sur mobile -->
                <div class="md:hidden mb-8">
                    <a href="{{ route('home') }}" class="flex items-center" onclick="toggleMenu()">
                        <svg class="h-6 w-6 text-brand-green" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="ml-2 font-bold text-white">Issa Cissé</span>
                    </a>
                </div>

                <!-- Liens navigation -->
                <a href="{{ route('home') }}" onclick="toggleMenu()" class="text-white hover:text-brand-green transition-colors duration-200 text-lg md:text-base block md:inline">Accueil</a>
                <a href="{{ route('portfolio.index') }}" onclick="toggleMenu()" class="text-white hover:text-brand-green transition-colors duration-200 text-lg md:text-base block md:inline">Portfolio</a>
                <a href="{{ route('about') }}" onclick="toggleMenu()" class="text-white hover:text-brand-green transition-colors duration-200 text-lg md:text-base block md:inline">À Propos</a>
                <a href="{{ route('service.index') }}" onclick="toggleMenu()" class="text-white hover:text-brand-green transition-colors duration-200 text-lg md:text-base block md:inline">Services</a>
                <a href="{{ route('skill.index') }}" onclick="toggleMenu()" class="text-white hover:text-brand-green transition-colors duration-200 text-lg md:text-base block md:inline">Compétences</a>
                <a href="{{ route('contact.index') }}" onclick="toggleMenu()" class="text-white hover:text-brand-green transition-colors duration-200 text-lg md:text-base block md:inline">Contact</a>

                <!-- CTA mobile -->
                <div class="md:hidden w-full mt-8 pt-6 border-t border-brand-green border-opacity-20">
                    <a href="{{ route('service.quote') }}" onclick="toggleMenu()" class="w-full block text-center bg-brand-green text-black px-4 py-3 rounded-lg font-medium hover:bg-opacity-90 transition-all duration-200">Demander un devis</a>
                </div>
            </div>

            <div class="hidden md:block">
                <a href="{{ route('service.quote') }}" class="bg-brand-green text-black px-4 py-2 rounded-full font-medium hover:bg-opacity-90 transition-colors">Demander un devis</a>
            </div>
        </nav>
    </header>
