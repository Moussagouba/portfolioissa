@extends('layouts.dark')

@section('content')
    <!-- Navigation -->
    <x-service-nav />

    <!-- Quote Form Section -->
    <section class="px-6 md:px-12 py-16 md:py-24">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Demande de Devis</h1>
                <p class="text-xl text-grayText">Parlez-nous de votre projet et recevez un devis personnalisé</p>
            </div>

            <div class="bg-darkCard rounded-xl p-8">
                <form action="{{ route('service.quote.submit') }}" method="POST">
                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="name" class="block text-sm font-medium mb-2">Nom complet *</label>
                            <input type="text" id="name" name="name" class="w-full bg-darkBg border border-darkCard rounded-lg p-3 text-white focus:outline-none focus:border-neonGreen" required>
                            @error('name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium mb-2">Email *</label>
                            <input type="email" id="email" name="email" class="w-full bg-darkBg border border-darkCard rounded-lg p-3 text-white focus:outline-none focus:border-neonGreen" required>
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="phone" class="block text-sm font-medium mb-2">Téléphone</label>
                            <input type="tel" id="phone" name="phone" class="w-full bg-darkBg border border-darkCard rounded-lg p-3 text-white focus:outline-none focus:border-neonGreen">
                            @error('phone')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="service" class="block text-sm font-medium mb-2">Service souhaité *</label>
                            <select id="service" name="service" class="w-full bg-darkBg border border-darkCard rounded-lg p-3 text-white focus:outline-none focus:border-neonGreen" required>
                                <option value="">Sélectionnez un service</option>
                                @foreach($services as $service)
                                <option value="{{ $service->title }}" {{ $selectedService && $selectedService->id === $service->id ? 'selected' : '' }}>{{ $service->title }}</option>
                                @endforeach
                                <option value="Autre">Autre</option>
                            </select>
                            @error('service')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-6">
                        <label for="budget" class="block text-sm font-medium mb-2">Budget estimé</label>
                        <select id="budget" name="budget" class="w-full bg-darkBg border border-darkCard rounded-lg p-3 text-white focus:outline-none focus:border-neonGreen">
                            <option value="">Sélectionnez un budget</option>
                            <option value="Moins de 500€">Moins de 500€</option>
                            <option value="500€ - 1000€">500€ - 1000€</option>
                            <option value="1000€ - 2000€">1000€ - 2000€</option>
                            <option value="2000€ - 5000€">2000€ - 5000€</option>
                            <option value="Plus de 5000€">Plus de 5000€</option>
                        </select>
                        @error('budget')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-8">
                        <label for="message" class="block text-sm font-medium mb-2">Description du projet *</label>
                        <textarea id="message" name="message" rows="6" class="w-full bg-darkBg border border-darkCard rounded-lg p-3 text-white focus:outline-none focus:border-neonGreen" required></textarea>
                        @error('message')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex justify-center">
                        <button type="submit" class="bg-neonGreen text-black px-8 py-3 rounded-full font-medium hover:bg-opacity-90 transition-all">
                            Envoyer ma demande
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <x-service-faq />

    <!-- Footer -->
    <x-service-footer />
@endsection
