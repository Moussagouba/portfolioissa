@extends('layouts.dark')

@section('content')
    <!-- Navigation -->
    <x-service-nav />

    <!-- Service Detail Hero -->
    <section class="px-6 md:px-12 py-16 md:py-24">
        <div class="flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">{{ $service->title }}</h1>
                <p class="text-xl text-grayText mb-8">{{ $service->description }}</p>

                <div class="mb-8">
                    <h3 class="text-xl font-bold mb-4">Caractéristiques</h3>
                    <ul class="space-y-3">
                        @foreach($service->features as $feature)
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-neonGreen mt-1 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <span>{{ $feature->feature }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="mb-8">
                    <h3 class="text-xl font-bold mb-2">Prix</h3>
                    <p class="text-2xl text-neonGreen">{{ $service->price_label }}</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('service.quote') }}" class="bg-neonGreen text-black px-6 py-3 rounded-full font-medium hover:bg-opacity-90 transition-all text-center">
                        Demander un devis
                    </a>
                    <a href="{{ route('service.index') }}" class="border border-white/20 px-6 py-3 rounded-full font-medium hover:border-neonGreen hover:text-neonGreen transition-all text-center">
                        Voir tous les services
                    </a>
                </div>
            </div>

            <div class="md:w-1/2">
                <div class="relative">
                    <div class="absolute -inset-4 bg-gradient-to-r from-neonGreen/20 to-transparent rounded-xl blur-xl"></div>
                    <img src="{{ $service->image }}" alt="{{ $service->title }}" class="relative z-10 rounded-xl w-full">
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="px-6 md:px-12 py-16 bg-black/30">
        <h2 class="text-3xl font-bold mb-12 text-center">Mon Processus de {{ $service->title }}</h2>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <!-- Process Step 1 -->
            <div class="bg-darkCard rounded-xl p-6 relative">
                <div class="absolute -top-4 -left-4 w-8 h-8 rounded-full bg-neonGreen text-black flex items-center justify-center font-bold">1</div>
                <h3 class="text-xl font-bold mb-3 mt-2">Consultation</h3>
                <p class="text-grayText">
                    Je discute de vos besoins, objectifs et attentes pour comprendre parfaitement votre projet.
                </p>
            </div>

            <!-- Process Step 2 -->
            <div class="bg-darkCard rounded-xl p-6 relative">
                <div class="absolute -top-4 -left-4 w-8 h-8 rounded-full bg-neonGreen text-black flex items-center justify-center font-bold">2</div>
                <h3 class="text-xl font-bold mb-3 mt-2">Conception</h3>
                <p class="text-grayText">
                    Je crée des concepts et des maquettes basés sur vos exigences et votre identité de marque.
                </p>
            </div>

            <!-- Process Step 3 -->
            <div class="bg-darkCard rounded-xl p-6 relative">
                <div class="absolute -top-4 -left-4 w-8 h-8 rounded-full bg-neonGreen text-black flex items-center justify-center font-bold">3</div>
                <h3 class="text-xl font-bold mb-3 mt-2">Révisions</h3>
                <p class="text-grayText">
                    J'affine les designs en fonction de vos retours jusqu'à obtenir le résultat parfait.
                </p>
            </div>

            <!-- Process Step 4 -->
            <div class="bg-darkCard rounded-xl p-6 relative">
                <div class="absolute -top-4 -left-4 w-8 h-8 rounded-full bg-neonGreen text-black flex items-center justify-center font-bold">4</div>
                <h3 class="text-xl font-bold mb-3 mt-2">Livraison</h3>
                <p class="text-grayText">
                    Je livre les fichiers finaux dans tous les formats nécessaires pour votre projet.
                </p>
            </div>
        </div>
    </section>

    <!-- Related Services -->
    <section class="px-6 md:px-12 py-16">
        <h2 class="text-3xl font-bold mb-12 text-center">Services Complémentaires</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($relatedServices as $relatedService)
            <div class="bg-darkCard rounded-xl p-6 transition-all duration-300 card-hover">
                <div class="bg-darkBg w-12 h-12 rounded-full flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-neonGreen" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                    </svg>
                </div>
                <h3 class="text-white text-xl font-bold mb-3">{{ $relatedService->title }}</h3>
                <p class="text-grayText mb-4">
                    Découvrez mon service de {{ $relatedService->title }} pour compléter votre projet.
                </p>
                <a href="{{ route('service.show', $relatedService) }}" class="inline-flex items-center text-neonGreen font-medium">
                    En savoir plus
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                    </svg>
                </a>
            </div>
            @endforeach
        </div>
    </section>

    <!-- CTA Section -->
    <x-service-cta />

    <!-- Footer -->
    <x-service-footer />
@endsection
