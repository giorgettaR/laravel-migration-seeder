<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-light">
        <div class="container">
           <div class="row">
                <div class="col-12 p-2">
                    <h1>Treni di oggi</h1>
                </div>
                @foreach ($trains as $train)
                <div class="col-3">
                    <ul>
                        <li class="fw-bold">{{ $train->company}}</li>
                        <li>{{ $train->departure_station }}</li>
                        <li>{{ $train->arrival_station }}</li>
                        <li>{{ $train->departure_time }}</li>
                        <li>{{ $train->arrival_time }}</li>
                    </ul>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12"></div>
            </div>
        </div>
    </main>

</body>

</html>