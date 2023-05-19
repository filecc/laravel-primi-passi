<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Chicco Primi Passi</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body class="antialiased">
    <header>
        <nav class="p-2">
            <ul class="d-flex list-unstyled gap-2">
                    @foreach ($links as $key => $link)
                        <li><a href={{$link}}>{{ucfirst($key)}}</a></li>
                    @endforeach
                <li></li>
            </ul>
        </nav>
    </header>
    <main class="p-2">
        <h1>Benvenuto nella pagina Contatti</h1>
    </main>

</body>

</html>
