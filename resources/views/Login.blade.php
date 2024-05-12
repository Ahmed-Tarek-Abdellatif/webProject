@extends('layouts.app')

@section('content')

<!DOCTYPE html>
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

  <body>
    <div class="login-container">
    <form class="login-form" action="{{ route('login') }}" method="POST">
        @csrf <!-- CSRF token -->
        <h2>Log in</h2>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" id="email" name="email" required />
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required />
        </div>
        <div class="forgot-password">
          <a href="forgot_password.blade.php">Forgot Password?</a>
        </div>
        <div class="form-group">
          <label for="role">Role</label>
          <select id="role" name="role" required>
            <option value="">Select Role</option>
            <option value="student">Student</option>
            <option value="ta">TA</option> <!-- Changed 'instructor' to 'ta' -->
          </select>
        </div>
        <button type="submit">Sign In</button>
      </form>
    </div>
  </body>
</html>
@endsection