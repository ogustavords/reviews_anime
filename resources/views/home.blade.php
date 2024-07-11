<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Recommended Animes') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="card">
            <div class="card-title">Anime 1</div>
            <div class="card-description">Description of Anime 1</div>
            <a href="{{ route('anime.details', ['id' => 1]) }}" class="button">View Details</a>
        </div>
        <div class="card">
            <div class="card-title">Anime 2</div>
            <div class="card-description">Description of Anime 2</div>
            <a href="{{ route('anime.details', ['id' => 2]) }}" class="button">View Details</a>
        </div>
        <div class="card">
            <div class="card-title">Anime 3</div>
            <div class="card-description">Description of Anime 3</div>
            <a href="{{ route('anime.details', ['id' => 3]) }}" class="button">View Details</a>
        </div>
    </div>
</x-app-layout>
