@extends('layouts.admin')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-5 gap-6 mb-8">
        <!-- Statistiques des services -->
        <div class="bg-white rounded-xl shadow-sm p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-100 text-blue-500 mr-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-gray-500 text-sm">Services</p>
                    <h3 class="text-2xl font-bold">{{ $services }}</h3>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('admin.services') }}" class="text-blue-500 text-sm hover:underline">Voir tous les services →</a>
            </div>
        </div>

        <!-- Statistiques des compétences -->
        <div class="bg-white rounded-xl shadow-sm p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-purple-100 text-purple-500 mr-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-gray-500 text-sm">Compétences</p>
                    <h3 class="text-2xl font-bold">{{ $skills }}</h3>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('admin.skills.index') }}" class="text-purple-500 text-sm hover:underline">Gérer les compétences →</a>
            </div>
        </div>

        <!-- Statistiques des projets -->
        <div class="bg-white rounded-xl shadow-sm p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-indigo-100 text-indigo-500 mr-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-gray-500 text-sm">Projets</p>
                    <h3 class="text-2xl font-bold">{{ $projects }}</h3>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('admin.projects.index') }}" class="text-indigo-500 text-sm hover:underline">Gérer les projets →</a>
            </div>
        </div>

        <!-- Statistiques des témoignages -->
        <div class="bg-white rounded-xl shadow-sm p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-yellow-100 text-yellow-500 mr-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-gray-500 text-sm">Témoignages</p>
                    <h3 class="text-2xl font-bold">{{ $testimonials }}</h3>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('admin.testimonials.index') }}" class="text-yellow-500 text-sm hover:underline">Gérer les témoignages →</a>
            </div>
        </div>

        <!-- Statistiques des demandes de devis -->
        <div class="bg-white rounded-xl shadow-sm p-6">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-100 text-green-500 mr-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div>
                    <p class="text-gray-500 text-sm">Demandes de devis</p>
                    <h3 class="text-2xl font-bold">{{ $quotes }}</h3>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('admin.quotes') }}" class="text-green-500 text-sm hover:underline">Voir toutes les demandes →</a>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <!-- Graphique des demandes de devis par mois -->
        <div class="bg-white rounded-xl shadow-sm p-6">
            <h3 class="font-bold mb-4">Demandes de devis par mois</h3>
            <canvas id="quoteChart" width="400" height="200"></canvas>
        </div>

        <!-- Services les plus demandés -->
        <div class="bg-white rounded-xl shadow-sm p-6">
            <h3 class="font-bold mb-4">Services les plus demandés</h3>
            @if($topServices->count() > 0)
                <div class="space-y-4">
                    @foreach($topServices as $service)
                        <div>
                            <div class="flex justify-between mb-1">
                                <span class="text-sm font-medium">{{ $service->service }}</span>
                                <span class="text-sm text-gray-500">{{ $service->count }} demandes</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-neonGreen h-2.5 rounded-full" style="width: {{ ($service->count / $quotes) * 100 }}%"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-gray-500">Aucune donnée disponible.</p>
            @endif
        </div>
    </div>

    <!-- Actions rapides -->
    <div class="bg-white rounded-xl shadow-sm p-6 mb-8">
        <h3 class="font-bold mb-4">Actions rapides</h3>
        <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
            <a href="{{ route('admin.services.create') }}" class="flex flex-col items-center justify-center p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                <svg class="w-8 h-8 text-blue-500 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                <span class="text-sm font-medium">Ajouter un service</span>
            </a>

            <a href="{{ route('admin.skills.create') }}" class="flex flex-col items-center justify-center p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                <svg class="w-8 h-8 text-purple-500 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                <span class="text-sm font-medium">Ajouter une compétence</span>
            </a>

            <a href="{{ route('admin.projects.create') }}" class="flex flex-col items-center justify-center p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                <svg class="w-8 h-8 text-indigo-500 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                <span class="text-sm font-medium">Ajouter un projet</span>
            </a>

            <a href="{{ route('admin.testimonials.create') }}" class="flex flex-col items-center justify-center p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                <svg class="w-8 h-8 text-yellow-500 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                <span class="text-sm font-medium">Ajouter un témoignage</span>
            </a>

            <a href="{{ route('home') }}" target="_blank" class="flex flex-col items-center justify-center p-4 bg-gray-50 rounded-lg hover:bg-gray-100 transition-colors">
                <svg class="w-8 h-8 text-gray-500 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                </svg>
                <span class="text-sm font-medium">Voir le site</span>
            </a>
        </div>
    </div>

    <!-- Dernières demandes de devis -->
    <div class="bg-white rounded-xl shadow-sm p-6">
        <h3 class="font-bold mb-4">Dernières demandes de devis</h3>

        @if($recentQuotes->count() > 0)
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nom</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Service</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($recentQuotes as $quote)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">{{ $quote->name }}</div>
                                    <div class="text-sm text-gray-500">{{ $quote->email }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $quote->service }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $quote->created_at->format('d/m/Y') }}</div>
                                    <div class="text-sm text-gray-500">{{ $quote->created_at->format('H:i') }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($quote->isProcessed())
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Traité
                                        </span>
                                    @else
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                            En attente
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="{{ route('admin.quotes.show', $quote) }}" class="text-blue-600 hover:text-blue-900 mr-3">Voir</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-4 text-right">
                <a href="{{ route('admin.quotes') }}" class="text-blue-500 text-sm hover:underline">Voir toutes les demandes →</a>
            </div>
        @else
            <p class="text-gray-500">Aucune demande de devis récente.</p>
        @endif
    </div>

    <!-- Script pour le graphique -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Graphique des demandes de devis par mois
            var ctx = document.getElementById('quoteChart').getContext('2d');
            var quoteChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: {!! json_encode($months) !!},
                    datasets: [{
                        label: 'Demandes de devis',
                        data: {!! json_encode($quoteCounts) !!},
                        backgroundColor: '#9eff00',
                        borderColor: '#9eff00',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                precision: 0
                            }
                        }
                    }
                }
            });
        });
    </script>
@endsection
