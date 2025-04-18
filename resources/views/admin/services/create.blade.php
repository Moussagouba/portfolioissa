@extends('layouts.admin')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Ajouter un service</h2>
        <a href="{{ route('admin.services') }}" class="text-gray-600 hover:text-gray-900">
            Retour à la liste
        </a>
    </div>
    
    <div class="bg-white rounded-xl shadow-sm p-6">
        <form action="{{ route('admin.services.store') }}" method="POST">
            @csrf
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Titre *</label>
                    <input type="text" name="title" id="title" value="{{ old('title') }}" required
                           class="w-full rounded-md border-gray-300 shadow-sm focus:border-neonGreen focus:ring focus:ring-neonGreen focus:ring-opacity-50">
                    @error('title')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label for="slug" class="block text-sm font-medium text-gray-700 mb-1">Slug</label>
                    <input type="text" name="slug" id="slug" value="{{ old('slug') }}"
                           class="w-full rounded-md border-gray-300 shadow-sm focus:border-neonGreen focus:ring focus:ring-neonGreen focus:ring-opacity-50">
                    <p class="mt-1 text-sm text-gray-500">Laissez vide pour générer automatiquement à partir du titre</p>
                    @error('slug')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            
            <div class="mb-6">
                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description *</label>
                <textarea name="description" id="description" rows="4" required
                          class="w-full rounded-md border-gray-300 shadow-sm focus:border-neonGreen focus:ring focus:ring-neonGreen focus:ring-opacity-50">{{ old('description') }}</textarea>
                @error('description')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700 mb-1">URL de l'image</label>
                    <input type="text" name="image" id="image" value="{{ old('image') }}"
                           class="w-full rounded-md border-gray-300 shadow-sm focus:border-neonGreen focus:ring focus:ring-neonGreen focus:ring-opacity-50">
                    @error('image')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
                
                <div>
                    <label for="price_label" class="block text-sm font-medium text-gray-700 mb-1">Étiquette de prix *</label>
                    <input type="text" name="price_label" id="price_label" value="{{ old('price_label') }}" required
                           class="w-full rounded-md border-gray-300 shadow-sm focus:border-neonGreen focus:ring focus:ring-neonGreen focus:ring-opacity-50">
                    <p class="mt-1 text-sm text-gray-500">Ex: "À partir de 500€", "Sur devis", etc.</p>
                    @error('price_label')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            
            <div class="mb-6">
                <label for="order" class="block text-sm font-medium text-gray-700 mb-1">Ordre d'affichage</label>
                <input type="number" name="order" id="order" value="{{ old('order') }}"
                       class="w-full rounded-md border-gray-300 shadow-sm focus:border-neonGreen focus:ring focus:ring-neonGreen focus:ring-opacity-50">
                <p class="mt-1 text-sm text-gray-500">Laissez vide pour ajouter à la fin</p>
                @error('order')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label class="block text-sm font-medium text-gray-700 mb-2">Caractéristiques</label>
                
                <div id="features-container">
                    <div class="mb-2 flex">
                        <input type="text" name="features[]" placeholder="Caractéristique"
                               class="flex-1 rounded-md border-gray-300 shadow-sm focus:border-neonGreen focus:ring focus:ring-neonGreen focus:ring-opacity-50">
                        <button type="button" class="ml-2 text-red-500 hover:text-red-700 feature-remove hidden">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <button type="button" id="add-feature" class="mt-2 text-sm text-blue-500 hover:text-blue-700">
                    + Ajouter une caractéristique
                </button>
            </div>
            
            <div class="flex justify-end">
                <button type="submit" class="bg-neonGreen text-black px-4 py-2 rounded-lg font-medium hover:bg-opacity-90 transition-all">
                    Créer le service
                </button>
            </div>
        </form>
    </div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const featuresContainer = document.getElementById('features-container');
            const addFeatureButton = document.getElementById('add-feature');
            
            // Fonction pour ajouter un champ de caractéristique
            addFeatureButton.addEventListener('click', function() {
                const featureDiv = document.createElement('div');
                featureDiv.className = 'mb-2 flex';
                featureDiv.innerHTML = `
                    <input type="text" name="features[]" placeholder="Caractéristique"
                           class="flex-1 rounded-md border-gray-300 shadow-sm focus:border-neonGreen focus:ring focus:ring-neonGreen focus:ring-opacity-50">
                    <button type="button" class="ml-2 text-red-500 hover:text-red-700 feature-remove">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                `;
                featuresContainer.appendChild(featureDiv);
                
                // Afficher le bouton de suppression sur le premier champ s'il y a plus d'un champ
                if (featuresContainer.children.length > 1) {
                    const firstRemoveButton = featuresContainer.children[0].querySelector('.feature-remove');
                    if (firstRemoveButton) {
                        firstRemoveButton.classList.remove('hidden');
                    }
                }
            });
            
            // Gérer la suppression des champs de caractéristique
            featuresContainer.addEventListener('click', function(e) {
                if (e.target.closest('.feature-remove')) {
                    e.target.closest('.mb-2').remove();
                    
                    // Cacher le bouton de suppression sur le premier champ s'il n'y a qu'un seul champ
                    if (featuresContainer.children.length === 1) {
                        const firstRemoveButton = featuresContainer.children[0].querySelector('.feature-remove');
                        if (firstRemoveButton) {
                            firstRemoveButton.classList.add('hidden');
                        }
                    }
                }
            });
            
            // Générer automatiquement le slug à partir du titre
            const titleInput = document.getElementById('title');
            const slugInput = document.getElementById('slug');
            
            titleInput.addEventListener('blur', function() {
                if (slugInput.value === '') {
                    slugInput.value = titleInput.value
                        .toLowerCase()
                        .replace(/[^\w\s-]/g, '')
                        .replace(/[\s_-]+/g, '-')
                        .replace(/^-+|-+$/g, '');
                }
            });
        });
    </script>
@endsection
