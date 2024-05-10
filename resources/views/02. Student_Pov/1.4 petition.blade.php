<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Petition</title>
  <link rel="stylesheet" href="../../../public/Styles/Student_POV.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <script src="../../../public/Styles/style.js"></script>
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