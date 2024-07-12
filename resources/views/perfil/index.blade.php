<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Reviews') }}
        </h2>
    </x-slot>

    <div class="container">
        @foreach ($reviews as $review)
        <div class="card">
            <div class="card-title">Review {{ $loop->iteration }}</div>
            <div class="card-description">{{ $review['content'] }}</div>
            <div class="text-right">
                <a href="{{ route('review.edit', ['id' => $review['id']]) }}" class="button mr-2">Edit</a>
                <form action="{{ route('review.destroy', ['id' => $review['id']]) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="button">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>

    <style>
        .container {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-top: 20px;
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

        .text-right {
            text-align: right;
        }
    </style>
</x-app-layout>
