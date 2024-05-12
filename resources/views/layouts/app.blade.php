    <<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Stylish and cool login page" />
    <meta name="keywords" content="login, sign in, authentication" />
    <meta
      name="author"
      content="Canadian International College Advising System"
    />
    <title>Login</title>
    <link href="{{ asset('Styles/Login_style.css') }}" rel="stylesheet">
  </head>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
