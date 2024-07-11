<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Review for Anime') }} {{ $id }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="card">
            <form action="{{ route('review.store', ['id' => $id]) }}" method="POST">
                @csrf
                <div style="text-align: center;">
                    <!-- Espaço em branco para a foto -->
                    <div class="anime-image"></div>
                    <label for="review">Review</label>
                    <textarea id="review" name="review" rows="4" class="block w-full mt-1"></textarea>
                </div>
                <div class="mt-4" style="text-align: center;">
                    <button type="submit" class="button">Submit Review</button>
                </div>
            </form>
        </div>
    </div>

    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .card {
            background-color: #2d2d2d;
            color: white;
            padding: 20px;
            box-sizing: border-box;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 50%;
            
        }

        .anime-image {
            height: 200px; /* Ajuste conforme necessário */
            background-color: #555; /* Cor de fundo temporária */
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            text-align: left;
        }

        textarea {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: vertical;
            color: black;
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
