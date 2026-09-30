<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }}</title>

    <style>
        .about-text {
            max-width: 700px;
            line-height: 1.6;
        }
    </style>
</head>

<body>

    <h1>{{ $title }}</h1>

    <p class="about-text">{{ $description }}</p>

    <nav>
        <a href="/">Home</a> |
        <a href="/about">About</a> |
        <a href="/contact">Contact</a>
    </nav>

</body>

</html>