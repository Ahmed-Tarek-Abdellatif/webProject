@extends('layouts.user')

@section('content')

<body>

  <div class="signup-container">
    <form class="signup-form">
      <h2>Payment order</h2>
      <div class="form-group">
        <label for="first name">First name</label>
        <input type="text" id="first name" name="first name" required />
        <label for="last name">Last name</label>
        <input type="text" id="last name" name="last name" required />
        <label for="ID">Student ID</label>
        <input type="text" id="ID" name="ID" required />
        <label for="hours">Credit hours</label>
        <select id="hours" name="hours" required>
          <option value="hours">13 hour</option>
          <option value="hours">14 hour</option>
          <option value="hours">15 hour</option>
          <option value="hours">16 hour</option>
          <option value="hours">17 hour</option>
          <option value="hours">18 hour</option>
          <option value="hours">19 hour</option>
          <option value="hours">20 hour</option>
          <option value="hours">21 hour</option>
        </select>
      </div>
      <button type="submit">Submit</button>
    </form>
  </div>
</body>

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
@endsection