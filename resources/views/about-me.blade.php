<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/style.scss', 'resources/js/app.js'])
    <title>Laravel_Primi_Passi</title>
</head>
<body>
    <nav>
        <ul>
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="/about">About</a>
            </li>
            <li>
                <a href="/contact">Contact</a>
            </li>
        </ul>
    </nav>
    <header>
        <h1>About Me</h1>
        <h3>La persona sullo sfondo é {{ $name }}... ed a breve avverrà {{ $generate }}</h3>
    </header>
</body>
</html>