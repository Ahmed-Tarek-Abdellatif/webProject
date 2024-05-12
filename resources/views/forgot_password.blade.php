@extends('layouts.app')

@section('content')

  <body>
    <div class="reset-password-container">
      <form class="reset-password-form" id="reset-password-form">
        <h2>Reset Password</h2>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required />
        </div>
        <button type="submit">Request Reset Link</button>
        <div class="reset-status" id="reset-status"></div>
      </form>
    </div>
  </body>
</html>
@endsection