@extends('layouts.user')

@section('content')
<body>
   
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
@endsection