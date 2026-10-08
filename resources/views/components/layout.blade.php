<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursed City</title>

    <link rel="stylesheet" href="resources/css/app.css">
    @vite(['resources/css/app.css'])
</head>

<body>
    @if (session('success'))
        <div id="flash" class="p-4 text-center bg-green-50 text-green-500 font-bold">
            {{ session('success') }}
        </div>
    @endif

    <header>
        <nav>
            <h1>Cursed City</h1>
            <a class="btn btn-red" href="{{ route('enemies.index') }}"> All Enemies</a>
            <a class="btn btn-red" href="{{ route('enemies.create') }}">Create a new enemy</a>

            <a class="btn btn-red" href="{{ route('heroes.index') }}"> All Heroes</a>
            <a class="btn btn-red" href="{{ route('heroes.create') }}">Create a new hero</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>

</body>

</html>