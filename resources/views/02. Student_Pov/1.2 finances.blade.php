<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Finances</title>
  <link rel="stylesheet" href="../../../public/Styles/Student_POV.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <script src="../../../public/Styles/style.js"></script>
</head>
</head>

<body>
  <nav class="navbar">
    <div class="logo">
      <img src="../../../public/Assets/Images/logo.png" alt="Logo" class="logo-img">
    </div>
    <div class="container">

      <button class="menu-btn">
        <i class="fas fa-bars"></i>
      </button>

      <ul class="nav-links">
        <li><a href="1.1 home.blade.php">Home</a></li>
        <li><a href="1.2 finances.blade.php">Finance</a></li>
        <li><a href="1.3 courses.blade.php">Courses</a></li>
        <li><a href="1.4 petition.blade.php">Petition</a></li>
        <li><a href="1.5 FAQ.blade.php">FAQ</a></li>
      </ul>
    </div>

    <div class="search-wrapper">
      <div class="search-container">
        <input type="text" placeholder="Search...">
        <button type="submit"><i class="fas fa-search"></i></button>
      </div>
    </div>
  </nav>

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