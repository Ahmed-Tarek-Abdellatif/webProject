<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Courses</title>
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

    <div class="container">

        <button class="add-button">Add Courses</button>
        <button class="drop-button">Drop Courses</button>

        <table>
            <thead>
                <tr>
                    <th>Course Name</th>
                    <th>Doctor</th>
                    <th>TA</th>
                    <th>Credit Hours</th>
                    <th></th> <!-- Empty header for checkboxes -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Course 1</td>
                    <td>Dr. Smith</td>
                    <td>TA 1</td>
                    <td>3</td>
                    <td class="checkbox-container"><input type="checkbox"></td> <!-- Add checkbox -->
                </tr>
                <tr>
                    <td>Course 2</td>
                    <td>Dr. Johnson</td>
                    <td>TA 2</td>
                    <td>4</td>
                    <td class="checkbox-container"><input type="checkbox"></td> <!-- Add checkbox -->
                </tr>
                <tr>
                    <td>Course 3</td>
                    <td>DR.Dalia ezzat</td>
                    <td>TA 2</td>
                    <td>3</td>
                    <td class="checkbox-container"><input type="checkbox"></td> <!-- Add checkbox -->
                </tr>
                <tr>
                    <td>Course 2</td>
                    <td>DR Nada</td>
                    <td>TA 2</td>
                    <td>3</td>
                    <td class="checkbox-container"><input type="checkbox"></td> <!-- Add checkbox -->
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

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