@extends('layouts.dark')

@section('content')
    <x-header />

    <!-- Hero Section -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h1 class="text-5xl md:text-6xl font-bold mb-6">
                    Mon <span class="text-brand-green">Portfolio</span>
                </h1>
                <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                    Découvrez une sélection de mes projets les plus récents et significatifs
                </p>
            </div>

            @if($featuredProjects->count() > 0)
                <!-- Projets Vedettes -->
                <div class="mb-20">
                    <h2 class="text-3xl font-bold mb-8">Projets Vedettes</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        @foreach($featuredProjects as $project)
                            <a href="{{ route('portfolio.show', $project->slug) }}" class="group relative overflow-hidden rounded-2xl aspect-video bg-gray-800">
                                @if($project->image)
                                    <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                @endif
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex flex-col justify-end p-6">
                                    <span class="text-brand-green text-sm font-medium mb-2">{{ $project->category }}</span>
                                    <h3 class="text-2xl font-bold mb-2">{{ $project->title }}</h3>
                                    @if($project->client)
                                        <p class="text-gray-300">Client: {{ $project->client }}</p>
                                    @endif
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- Tous les Projets -->
            <div>
                <h2 class="text-3xl font-bold mb-8">Tous les Projets</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @forelse($projects as $project)
                        <a href="{{ route('portfolio.show', $project->slug) }}" class="group relative overflow-hidden rounded-xl aspect-square bg-gray-800">
                            @if($project->image)
                                <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            @endif
                            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                <span class="text-brand-green text-sm font-medium mb-2">{{ $project->category }}</span>
                                <h3 class="text-xl font-bold">{{ $project->title }}</h3>
                            </div>
                        </a>
                    @empty
                        <div class="col-span-3 text-center py-20">
                            <p class="text-gray-400 text-lg">Aucun projet pour le moment.</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    <x-footer />
@endsection
