@extends('layouts.admin')

@section('content')
    <div class="mb-6">
        <a href="{{ route('admin.skills.index') }}" class="text-blue-600 hover:text-blue-900 text-sm">
            ← Retour à la liste
        </a>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-6">
        <h2 class="text-2xl font-bold mb-6">Ajouter une Compétence</h2>

        <form action="{{ route('admin.skills.store') }}" method="POST">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Nom -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nom de la compétence *</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-neonGreen focus:border-transparent">
                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Catégorie -->
                <div>
                    <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Catégorie *</label>
                    <select name="category" id="category" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-neonGreen focus:border-transparent">
                        <option value="">Sélectionnez une catégorie</option>
                        <option value="Design" {{ old('category') == 'Design' ? 'selected' : '' }}>Design</option>
                        <option value="Développement" {{ old('category') == 'Développement' ? 'selected' : '' }}>Développement</option>
                        <option value="Marketing" {{ old('category') == 'Marketing' ? 'selected' : '' }}>Marketing</option>
                        <option value="Autre" {{ old('category') == 'Autre' ? 'selected' : '' }}>Autre</option>
                    </select>
                    @error('category')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Pourcentage -->
                <div>
                    <label for="percentage" class="block text-sm font-medium text-gray-700 mb-2">Niveau de maîtrise (%) *</label>
                    <input type="number" name="percentage" id="percentage" min="0" max="100" value="{{ old('percentage', 80) }}" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-neonGreen focus:border-transparent">
                    @error('percentage')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Icône -->
                <div>
                    <label for="icon" class="block text-sm font-medium text-gray-700 mb-2">Icône (classe CSS)</label>
                    <input type="text" name="icon" id="icon" value="{{ old('icon') }}" placeholder="ri-palette-line"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-neonGreen focus:border-transparent">
                    <p class="mt-1 text-xs text-gray-500">Ex: ri-palette-line, ri-code-line, etc.</p>
                    @error('icon')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Ordre -->
                <div>
                    <label for="order" class="block text-sm font-medium text-gray-700 mb-2">Ordre d'affichage</label>
                    <input type="number" name="order" id="order" value="{{ old('order', 0) }}" min="0"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-neonGreen focus:border-transparent">
                    <p class="mt-1 text-xs text-gray-500">Laissez vide pour un ordre automatique</p>
                    @error('order')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Description -->
            <div class="mt-6">
                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description *</label>
                <textarea name="description" id="description" rows="4" required
                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-neonGreen focus:border-transparent">{{ old('description') }}</textarea>
                @error('description')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Boutons -->
            <div class="mt-6 flex justify-end space-x-3">
                <a href="{{ route('admin.skills.index') }}" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                    Annuler
                </a>
                <button type="submit" class="px-4 py-2 bg-neonGreen text-black rounded-lg font-medium hover:bg-opacity-90">
                    Créer la compétence
                </button>
            </div>
        </form>
    </div>
@endsection
