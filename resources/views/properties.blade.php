@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h2 class="text-2xl font-semibold mb-4">Propriétés disponibles</h2>

        <!-- Exemple d'utilisation du composant de carte -->
        <x-property-card 
            :imageUrl="'https://example.com/image.jpg'"
            :title="'Maison à louer'"
            :description="'Une maison moderne avec trois chambres, un jardin et une piscine.'"
        />

        <!-- Exemple d'utilisation du composant de bouton -->
        <x-button>
            Réserver maintenant
        </x-button>
    </div>
@endsection
