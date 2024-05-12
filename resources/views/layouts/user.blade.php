<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="{{ asset('Styles/Student_POV.css') }}" rel="stylesheet">
    <script src="{{ asset('Styles/style.js') }}"></script>
</head>

<body>
<nav class="navbar">
        <div class="logo">
            <img src="{{asset('Assets/images/logo.png')}}" alt="Logo" class="logo-img">
        </div>
        <div class="container">

            <button class="menu-btn">
                <i class="fas fa-bars"></i>
            </button>

            <ul class="nav-links">
                <li><a href="{{ route('main') }}">Home</a></li>
                <li><a href="{{ route('finances') }}">Finance</a></li>
                <li><a href="{{ route('courses') }}">Courses</a></li>
                <li><a href="{{ route('petition') }}">Petition</a></li>
                <li><a href="{{ route('faq') }}">FAQ</a></li>
                <li><a href="{{ route('logout') }}">Logout</a></li>
            </ul>
        </div>

        <div class="search-wrapper">
            <div class="search-container">
                <input type="text" placeholder="Search...">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>
        </div>

    </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
