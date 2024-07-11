<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Anime Details') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="card-details">
            <div class="card-title">Anime {{ $id }}</div>
            <!-- Espaço para a foto -->
            <div class="anime-image"></div>
            <div class="card-description">Description: [No description available]</div>
            <a href="{{ route('review.create', ['id' => $id]) }}" class="button">Write a Review</a>
        </div>

        
        <div class="card">
            <div class="card-title">User Review 1</div>
            <div class="card-description">Review text...</div>
        </div>
        <div class="card">
            <div class="card-title">User Review 2</div>
            <div class="card-description">Review text...</div>
        </div>
    </div>

    <style>
        .container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .card-details {
            background-color: #2d2d2d;
            color: white;
            padding: 20px;
            box-sizing: border-box;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center; /* Centraliza o conteúdo */
        }

        .anime-image {
            height: 300px; /* Ajuste conforme necessário */
            background-color: #555; /* Cor de fundo temporária */
            margin-bottom: 20px;
        }

        .card {
            background-color: #2d2d2d;
            color: white;
            padding: 20px;
            box-sizing: border-box;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card-title {
            background-color: #555;
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
