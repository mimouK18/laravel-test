<div class="container mx-auto p-4">
    <!-- Titre -->
    <h2 class="text-2xl font-semibold mb-4">Gérer les réservations</h2>

    <!-- Formulaire de réservation -->
    <div class="mb-6">
        <label for="propertyName" class="block text-sm font-medium text-gray-700">Nom de la propriété</label>
        <input type="text" id="propertyName" wire:model="propertyName" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Nom de la propriété">

        <!-- Affichage en temps réel du nom de la propriété -->
        <p class="mt-2 text-gray-600">Propriété : {{ $propertyName }}</p>
    </div>

    <!-- Formulaire pour entrer les détails de réservation -->
    <div class="mb-6">
        <label for="guestName" class="block text-sm font-medium text-gray-700">Nom de l'invité</label>
        <input type="text" id="guestName" wire:model="guestName" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Nom de l'invité">
    </div>

    <!-- Affichage en temps réel du nom de l'invité -->
    <p class="mt-2 text-gray-600">Invité : {{ $guestName }}</p>

    <!-- Bouton pour réserver -->
    <div class="mt-4">
        <button wire:click="reserveProperty" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
            Réserver maintenant
        </button>
    </div>

    <!-- Message flash après la réservation -->
    @if (session()->has('message'))
        <div class="mt-4 p-4 bg-green-100 text-green-800 rounded-md">
            {{ session('message') }}
        </div>
    @endif
</div>