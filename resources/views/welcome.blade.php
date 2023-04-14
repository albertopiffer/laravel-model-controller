<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>laravel-model-controller</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    
    <main>
        <div class="cards-container">
            @foreach ($movies as $movie)
                <ul class="card-movie">                
                        <li>id: {{ $movie->id }}</li>
                        <li>title: {{ $movie->title }}</li>
                        <li>nationality: {{ $movie->nationality }}</li>
                        <li>date: {{ $movie->date }}</li>
                        <li>vote: {{ $movie->vote }}</li>
                </ul>
            @endforeach
        </div>
    </main>

</body>

</html>