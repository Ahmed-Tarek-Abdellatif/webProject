@extends('layouts.user')

@section('content')

<body>

  <div class="petition-container">
    <form class="petition-form">
      <h2>Petition</h2>
      <div class="form-group">
        <label for="first name">First name</label>
        <input type="text" id="first name" name="first name" required />
        <label for="last name">Last name</label>
        <input type="text" id="last name" name="last name" required />
        <label for="ID">Student ID</label>
        <input type="text" id="ID" name="ID" required />
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required />
        <label for="mobile">Mobile number</label>
        <input type="text" id="mobile" name="mobile" required />
        <label for="Cohort">Cohort</label>
        <input type="text" id="cohort" name="cohort" required />
        <label for="Faculty">Faculty</label>
        <input type="text" id="Faculty" name="Faculty" required />
        <label for="Major">Major</label>
        <input type="text" id="Major" name="Major" required />
        <label for="reason">Petition purpose</label>
        <input type="text" id="reason" name="reason" required />
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