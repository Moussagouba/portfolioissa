@extends('layouts.dark')

@section('content')
    <x-header />

    <!-- Project Detail -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <!-- Breadcrumb -->
            <div class="mb-8">
                <a href="{{ route('portfolio.index') }}" class="text-gray-400 hover:text-brand-green transition-colors">← Retour au portfolio</a>
            </div>

            <!-- Project Header -->
            <div class="mb-12">
                <span class="text-brand-green font-medium">{{ $project->category }}</span>
                <h1 class="text-4xl md:text-5xl font-bold mt-2 mb-4">{{ $project->title }}</h1>
                <div class="flex flex-wrap gap-6 text-gray-400">
                    @if($project->client)
                        <div>
                            <span class="text-white font-medium">Client:</span> {{ $project->client }}
                        </div>
                    @endif
                    @if($project->date)
                        <div>
                            <span class="text-white font-medium">Date:</span> {{ $project->date }}
                        </div>
                    @endif
                </div>
            </div>

            <!-- Project Image -->
            @if($project->image)
                <div class="mb-12 rounded-2xl overflow-hidden">
                    <img src="{{ str_starts_with($project->image, 'http') ? $project->image : asset('storage/' . $project->image) }}" alt="{{ $project->title }}" class="w-full">
                </div>
            @else
                <div class="mb-12 rounded-2xl overflow-hidden bg-gradient-to-br from-gray-800 to-gray-900 aspect-video flex items-center justify-center">
                    <svg class="w-32 h-32 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
            @endif

            <!-- Project Description -->
            <div class="max-w-3xl mb-16">
                <h2 class="text-2xl font-bold mb-4">À propos du projet</h2>
                <div class="text-gray-300 leading-relaxed">
                    {!! nl2br(e($project->description)) !!}
                </div>
            </div>

            <!-- Related Projects -->
            @if($relatedProjects->count() > 0)
                <div>
                    <h2 class="text-3xl font-bold mb-8">Projets Similaires</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        @foreach($relatedProjects as $related)
                            <a href="{{ route('portfolio.show', $related->slug) }}" class="group relative overflow-hidden rounded-xl aspect-square bg-gray-800">
                                @if($related->image)
                                    <img src="{{ str_starts_with($related->image, 'http') ? $related->image : asset('storage/' . $related->image) }}" alt="{{ $related->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                @else
                                    <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-800 to-gray-900">
                                        <svg class="w-16 h-16 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                @endif
                                <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-6">
                                    <span class="text-brand-green text-sm font-medium mb-2">{{ $related->category }}</span>
                                    <h3 class="text-xl font-bold">{{ $related->title }}</h3>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>

    <x-footer />
@endsection
