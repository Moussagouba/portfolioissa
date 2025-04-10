@extends('layouts.dark')

@section('content')
    <!-- Navigation -->
    <x-service-nav />

    <!-- Success Message Section -->
    <section class="px-6 md:px-12 py-24 md:py-32">
        <div class="max-w-3xl mx-auto text-center">
            <div class="bg-darkCard rounded-xl p-12 relative overflow-hidden">
                <!-- Success Icon -->
                <div class="w-20 h-20 bg-neonGreen/20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-neonGreen" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                
                <h1 class="text-3xl md:text-4xl font-bold mb-4">Demande Envoyée avec Succès !</h1>
                
                <p class="text-xl text-grayText mb-8">
                    Merci pour votre demande de devis. Nous l'avons bien reçue et nous vous contacterons dans les plus brefs délais.
                </p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('home') }}" class="bg-neonGreen text-black px-6 py-3 rounded-full font-medium hover:bg-opacity-90 transition-all">
                        Retour à l'accueil
                    </a>
                    <a href="{{ route('service.index') }}" class="border border-white/20 px-6 py-3 rounded-full font-medium hover:border-neonGreen hover:text-neonGreen transition-all">
                        Explorer nos services
                    </a>
                </div>
                
                <!-- Decorative Elements -->
                <div class="absolute top-0 right-0 w-32 h-32 bg-neonGreen/5 rounded-bl-full"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-neonGreen/5 rounded-tr-full"></div>
            </div>
            
            <div class="mt-12">
                <h2 class="text-2xl font-bold mb-4">Que se passe-t-il ensuite ?</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                    <div class="bg-darkCard p-6 rounded-xl">
                        <div class="w-12 h-12 bg-darkBg rounded-full flex items-center justify-center mb-4 mx-auto">
                            <span class="text-neonGreen font-bold">1</span>
                        </div>
                        <h3 class="font-bold mb-2 text-center">Analyse</h3>
                        <p class="text-grayText text-center">
                            Nous analysons votre demande et préparons une proposition adaptée à vos besoins.
                        </p>
                    </div>
                    
                    <div class="bg-darkCard p-6 rounded-xl">
                        <div class="w-12 h-12 bg-darkBg rounded-full flex items-center justify-center mb-4 mx-auto">
                            <span class="text-neonGreen font-bold">2</span>
                        </div>
                        <h3 class="font-bold mb-2 text-center">Contact</h3>
                        <p class="text-grayText text-center">
                            Nous vous contactons sous 48h pour discuter des détails de votre projet.
                        </p>
                    </div>
                    
                    <div class="bg-darkCard p-6 rounded-xl">
                        <div class="w-12 h-12 bg-darkBg rounded-full flex items-center justify-center mb-4 mx-auto">
                            <span class="text-neonGreen font-bold">3</span>
                        </div>
                        <h3 class="font-bold mb-2 text-center">Proposition</h3>
                        <p class="text-grayText text-center">
                            Vous recevez un devis détaillé et personnalisé pour votre projet.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <x-service-footer />
@endsection
