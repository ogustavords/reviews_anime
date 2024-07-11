<x-app-layout>

    <div class="container">
        <h3>Suas reviews</h3>
        <div class="card">
            <div class="card-title">Review 1</div>
            <div class="card-description">Review exemplo...</div>
        </div>
        <div class="card">
            <div class="card-title">Review 2</div>
            <div class="card-description">Review exemplo...</div>
        </div>
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
    </style>
</x-app-layout>
