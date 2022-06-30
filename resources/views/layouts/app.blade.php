<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{ route('homepage') }}">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('comic.index') }}">Lista Comic <span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('comic.create') }}">Crea Comic <span class="sr-only"></span></a>
            </li>
          </ul>
        </div>
      </nav>

</header>

<body>
    <main>
        @yield('main')
    </main>
</body>
</html>