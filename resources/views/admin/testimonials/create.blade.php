@extends('layouts.admin')

@section('content')
    <div class="mb-6">
        <a href="{{ route('admin.testimonials.index') }}" class="text-blue-600 hover:text-blue-900 text-sm">
            ← Retour à la liste
        </a>
    </div>

    <div class="bg-white rounded-xl shadow-sm p-6">
        <h2 class="text-2xl font-bold mb-6">Ajouter un Témoignage</h2>

        <form action="{{ route('admin.testimonials.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Nom -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nom complet *</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-neonGreen focus:border-transparent">
                    @error('name')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Poste -->
                <div>
                    <label for="position" class="block text-sm font-medium text-gray-700 mb-2">Poste/Titre</label>
                    <input type="text" name="position" id="position" value="{{ old('position') }}" placeholder="CEO, Designer, etc."
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-neonGreen focus:border-transparent">
                    @error('position')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Entreprise -->
                <div>
                    <label for="company" class="block text-sm font-medium text-gray-700 mb-2">Entreprise</label>
                    <input type="text" name="company" id="company" value="{{ old('company') }}"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-neonGreen focus:border-transparent">
                    @error('company')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Avatar -->
                <div>
                    <label for="avatar" class="block text-sm font-medium text-gray-700 mb-2">Avatar</label>
                    <input type="file" name="avatar" id="avatar" accept="image/jpeg,image/jpg,image/png"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-neonGreen focus:border-transparent"
                           onchange="previewAvatar(event)">
                    <p class="mt-1 text-xs text-gray-500">Formats acceptés: JPG, PNG (Max: 1MB)</p>
                    @error('avatar')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                    
                    <!-- Aperçu de l'avatar -->
                    <div id="avatarPreview" class="mt-3 hidden">
                        <img src="" alt="Aperçu" class="w-24 h-24 rounded-full object-cover border-2 border-gray-300">
                    </div>
                </div>

                <!-- Note -->
                <div>
                    <label for="rating" class="block text-sm font-medium text-gray-700 mb-2">Note (sur 5) *</label>
                    <select name="rating" id="rating" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-neonGreen focus:border-transparent">
                        <option value="5" {{ old('rating', 5) == 5 ? 'selected' : '' }}>⭐⭐⭐⭐⭐ (5/5)</option>
                        <option value="4" {{ old('rating') == 4 ? 'selected' : '' }}>⭐⭐⭐⭐ (4/5)</option>
                        <option value="3" {{ old('rating') == 3 ? 'selected' : '' }}>⭐⭐⭐ (3/5)</option>
                        <option value="2" {{ old('rating') == 2 ? 'selected' : '' }}>⭐⭐ (2/5)</option>
                        <option value="1" {{ old('rating') == 1 ? 'selected' : '' }}>⭐ (1/5)</option>
                    </select>
                    @error('rating')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Ordre -->
                <div>
                    <label for="order" class="block text-sm font-medium text-gray-700 mb-2">Ordre d'affichage</label>
                    <input type="number" name="order" id="order" value="{{ old('order', 0) }}" min="0"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-neonGreen focus:border-transparent">
                    @error('order')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Témoignage vedette -->
                <div class="flex items-center md:col-span-2">
                    <input type="checkbox" name="featured" id="featured" value="1" {{ old('featured') ? 'checked' : '' }}
                           class="h-4 w-4 text-neonGreen focus:ring-neonGreen border-gray-300 rounded">
                    <label for="featured" class="ml-2 block text-sm text-gray-700">
                        Témoignage vedette (mis en avant sur la page d'accueil)
                    </label>
                </div>
            </div>

            <!-- Contenu du témoignage -->
            <div class="mt-6">
                <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Témoignage *</label>
                <textarea name="content" id="content" rows="5" required placeholder="Écrivez le témoignage du client..."
                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-neonGreen focus:border-transparent">{{ old('content') }}</textarea>
                @error('content')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Boutons -->
            <div class="mt-6 flex justify-end space-x-3">
                <a href="{{ route('admin.testimonials.index') }}" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                    Annuler
                </a>
                <button type="submit" class="px-4 py-2 bg-neonGreen text-black rounded-lg font-medium hover:bg-opacity-90">
                    Créer le témoignage
                </button>
            </div>
        </form>
    </div>

    <script>
        function previewAvatar(event) {
            const preview = document.getElementById('avatarPreview');
            const img = preview.querySelector('img');
            const file = event.target.files[0];
            
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    img.src = e.target.result;
                    preview.classList.remove('hidden');
                }
                reader.readAsDataURL(file);
            } else {
                preview.classList.add('hidden');
            }
        }
    </script>
@endsection
