<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('about') }}">About</a>
    </nav>

    <main>
        <h1>Welcome to My Laravel Website</h1>
        <p>This is the home page built using Laravel routes, controllers, and Blade views.</p>
    </main>
</body>
</html>