@extends('layouts.admin')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Détails de la demande de devis</h2>
        <a href="{{ route('admin.quotes') }}" class="text-gray-600 hover:text-gray-900">
            Retour à la liste
        </a>
    </div>
    
    <div class="bg-white rounded-xl shadow-sm p-6">
        <div class="flex justify-between items-start mb-6">
            <div>
                <h3 class="text-lg font-medium">Demande #{{ $quote->id }}</h3>
                <p class="text-gray-500">Reçue le {{ $quote->created_at->format('d/m/Y à H:i') }}</p>
            </div>
            
            <div>
                @if($quote->isProcessed())
                    <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                        Traité
                    </span>
                @else
                    <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                        En attente
                    </span>
                @endif
            </div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
                <h4 class="text-sm font-medium text-gray-500 mb-1">Informations client</h4>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="mb-2"><span class="font-medium">Nom :</span> {{ $quote->name }}</p>
                    <p class="mb-2"><span class="font-medium">Email :</span> {{ $quote->email }}</p>
                    @if($quote->phone)
                        <p><span class="font-medium">Téléphone :</span> {{ $quote->phone }}</p>
                    @endif
                </div>
            </div>
            
            <div>
                <h4 class="text-sm font-medium text-gray-500 mb-1">Informations projet</h4>
                <div class="bg-gray-50 p-4 rounded-lg">
                    <p class="mb-2"><span class="font-medium">Service demandé :</span> {{ $quote->service }}</p>
                    @if($quote->budget)
                        <p><span class="font-medium">Budget :</span> {{ $quote->budget }}</p>
                    @endif
                </div>
            </div>
        </div>
        
        <div class="mb-6">
            <h4 class="text-sm font-medium text-gray-500 mb-1">Description du projet</h4>
            <div class="bg-gray-50 p-4 rounded-lg">
                <p class="whitespace-pre-line">{{ $quote->message }}</p>
            </div>
        </div>
        
        <div class="flex justify-end space-x-4">
            @if(!$quote->isProcessed())
                <form action="{{ route('admin.quotes.process', $quote) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-lg font-medium hover:bg-green-600 transition-all">
                        Marquer comme traité
                    </button>
                </form>
            @endif
            
            <form action="{{ route('admin.quotes.delete', $quote) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg font-medium hover:bg-red-600 transition-all" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette demande de devis ?')">
                    Supprimer
                </button>
            </form>
        </div>
    </div>
@endsection
