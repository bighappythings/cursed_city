<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursed City</title>

    @vite(['resources/css/app.css'])
</head>

<body class="text-center px-8 py-12">
    <h1>Cursed City</h1>
    <p>Click the button below to view the full list of enemies.</p>
    <a class="btn mt-4 inline-block" href="/enemies" class="btn">Find Enemies</a>
</body>

</html>