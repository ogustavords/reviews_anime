<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Animes Recomendados') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="card">
            <div class="card-title">Anime 1</div>
            <div class="card-description">Descrição do anime 1</div>
            <a href="{{ route('anime.details', ['id' => 1]) }}" class="button">Ver detalhes</a>
        </div>
        <div class="card">
            <div class="card-title">Anime 2</div>
            <div class="card-description">Descrição do anime 2</div>
            <a href="{{ route('anime.details', ['id' => 2]) }}" class="button">Ver detalhes</a>
        </div>
        <div class="card">
            <div class="card-title">Anime 3</div>
            <div class="card-description">Descrição do anime 3</div>
            <a href="{{ route('anime.details', ['id' => 3]) }}" class="button">Ver detalhes</a>
        </div>
    </div>

    <style>
        .container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card {
            background-color: #2d2d2d;
            color: white;
            padding: 20px;
            width: calc(33.33% - 20px);
            box-sizing: border-box;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-description {
            font-size: 1rem;
            line-height: 1.4;
            margin-bottom: 15px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #9370DB;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #CD853F;
        }
    </style>
</x-app-layout>
