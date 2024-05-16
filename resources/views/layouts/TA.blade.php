<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="{{ asset('Styles/TA_POV.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="{{ asset('Styles/style.js') }}"></script>
</head>
</head>

<body>
    <nav class="navbar">
        <div class="logo">
            <img src="../Assets/Images/logo.png" alt="Logo" class="logo-img">
        </div>
        <div class="container">

            <button class="menu-btn">
                <i class="fas fa-bars"></i>
            </button>

            <ul class="nav-links">
                <li><a href="{{ route('TAmain') }}">Home</a></li>
                <li><a href="{{ route('TAcourses') }}">Courses</a></li>
                <li><a href="{{ route('Regstd') }}">Register Student</a></li>
                <li><a href="{{ route('students.index') }}">Edit Student</a></li>
                <li><a href="{{ route('TAfaq') }}">FAQ</a></li>
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

    <footer class="footer">
        <div class="container">
            <div class="footer-links">
                <ul>
                    <li><a href="https://www.facebook.com/ciccairo"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com/cic_cairo"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/user/ciccairo"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="https://vm.tiktok.com/ZM8t8uHUh/"><i class="fab fa-tiktok"></i></a></li>
                    <li><a href="https://discord.gg/6wPdfBrXYP"><i class="fab fa-discord"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>

</html>