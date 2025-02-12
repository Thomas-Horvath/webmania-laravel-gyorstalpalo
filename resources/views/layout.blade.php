<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Quicksand&display=swap" rel="stylesheet">
    <title>AI eszközök listája</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
</head>

<body>
    <header>
        <img src="{{asset('logo.png')}}" alt="logo">
        <nav>
            <ul>
<li><a href="{{route('aitools.index')}}">AI eszközök</a></li>
<li><a href="{{route('categories.index')}}">Kategóriák</a></li>
<li><a href="{{route('categories.create')}}">Új kategóriák</a></li>

            </ul>
        </nav>
    </header>
    <main>

        @yield('content')
    </main>
    <footer>
        <p>&copy; 2025 Webmania - ThomasHorvath</p>
    </footer>
</body>

</html>
