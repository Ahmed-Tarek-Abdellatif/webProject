@extends('layouts.app')

@section('content')



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
          <a href="{{route('forgot_password')}}">Forgot Password?</a>
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