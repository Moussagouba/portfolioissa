@extends('layouts.dark')

@section('content')
    <x-header />

    <!-- About Section -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <!-- Hero -->
                <div class="text-center mb-16">
                    <h1 class="text-5xl md:text-6xl font-bold mb-6">
                        À <span class="text-brand-green">Propos</span>
                    </h1>
                    <p class="text-xl text-gray-400">
                        Graphiste & Designer passionné
                    </p>
                </div>

                <!-- Story -->
                <div class="mb-16">
                    <h2 class="text-3xl font-bold mb-6">Mon Histoire</h2>
                    <div class="space-y-4 text-gray-300 leading-relaxed">
                        <p>
                            Bonjour, je suis <span class="text-white font-medium">Issa Cissé Ngahama</span>, graphiste et designer basé en Guinée.
                            Passionné par le design graphique et l'identité visuelle, je transforme les idées en créations visuelles percutantes.
                        </p>
                        <p>
                            Avec plusieurs années d'expérience dans le domaine du design, j'ai eu l'opportunité de travailler avec
                            des clients variés, des startups aux entreprises établies, en créant des identités de marque mémorables
                            et des designs qui racontent une histoire.
                        </p>
                        <p>
                            Ma philosophie est simple : chaque projet est unique et mérite une approche personnalisée.
                            Je crois fermement que le bon design peut transformer une entreprise et créer des connexions
                            émotionnelles durables avec son public.
                        </p>
                    </div>
                </div>

                <!-- Skills Highlight -->
                <div class="mb-16">
                    <h2 class="text-3xl font-bold mb-6">Mes Expertises</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-gray-800/50 rounded-xl p-6 border border-gray-700">
                            <h3 class="text-xl font-bold mb-3 text-brand-green">Design Graphique</h3>
                            <p class="text-gray-300">
                                Création d'identités visuelles, logos, affiches, et supports de communication imprimés et numériques.
                            </p>
                        </div>
                        <div class="bg-gray-800/50 rounded-xl p-6 border border-gray-700">
                            <h3 class="text-xl font-bold mb-3 text-brand-green">Branding</h3>
                            <p class="text-gray-300">
                                Développement de stratégies de marque complètes, de la conception à l'implémentation.
                            </p>
                        </div>
                        <div class="bg-gray-800/50 rounded-xl p-6 border border-gray-700">
                            <h3 class="text-xl font-bold mb-3 text-brand-green">UI/UX Design</h3>
                            <p class="text-gray-300">
                                Conception d'interfaces utilisateur intuitives et d'expériences utilisateur engageantes.
                            </p>
                        </div>
                        <div class="bg-gray-800/50 rounded-xl p-6 border border-gray-700">
                            <h3 class="text-xl font-bold mb-3 text-brand-green">Illustration</h3>
                            <p class="text-gray-300">
                                Création d'illustrations digitales personnalisées pour divers supports et médias.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- CTA -->
                <div class="text-center bg-gradient-to-r from-brand-green/10 to-transparent rounded-2xl p-12 border border-brand-green/20">
                    <h2 class="text-3xl font-bold mb-4">Travaillons Ensemble</h2>
                    <p class="text-gray-300 mb-8 max-w-2xl mx-auto">
                        Vous avez un projet en tête ? Discutons de la façon dont je peux vous aider à donner vie à votre vision.
                    </p>
                    <div class="flex flex-wrap justify-center gap-4">
                        <a href="{{ route('contact.index') }}" class="bg-brand-green text-black px-8 py-3 rounded-full font-medium hover:bg-opacity-90 transition-all">
                            Me Contacter.
                        </a>
                        <a href="{{ route('portfolio.index') }}" class="border border-brand-green text-brand-green px-8 py-3 rounded-full font-medium hover:bg-brand-green hover:text-black transition-all">
                            Voir Mon Portfolio
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-footer />
@endsection
