<!doctype html>
<html lang="ru">
<head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Привет мир!</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('stas', ['nomer' => '50']) }}">TestLink-50</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('stas', ['nomer' => '150']) }}">TestLink-150</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('stas', ['nomer' => '250']) }}">TestLink-250</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('stas', ['nomer' => '350']) }}">TestLink-350</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('stas', ['nomer' => '450']) }}">TestLink-450</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('stas', ['nomer' => '550']) }}">TestLink-550</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('stas', ['nomer' => '650']) }}">TestLink-650</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('stas', ['nomer' => '750']) }}">TestLink-750</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('stas', ['nomer' => '850']) }}">TestLink-850</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('stas', ['nomer' => '950']) }}">TestLink-950</a>
            </li>
            </ul>
    </nav>
</div>
<div class="container">
    <h1>
<?php echo $_GET['nomer'];?>
    </h1>
</div>



</body>
</html>
