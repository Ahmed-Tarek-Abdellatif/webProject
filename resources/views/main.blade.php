@extends('layouts.user')

@section('content')



<body>
    <div class="container">

        <div class="student-info">
            <div class="info">
                <h2>Student Information</h2>
                <p><strong>Name:</strong> {{ $student->{'First name'} }} {{ $student->{'Last name'} }}</p>
                <p><strong>ID:</strong> {{ $student->{'id'} }}</p>
                <p><strong>Cohort:</strong> Spring 2024</p>
                <p><strong>Faculty:</strong> {{ $student->Faculty }}</p>
                <p><strong>Major:</strong> {{ $student->Major }}</p>
                <p><strong>GPA:</strong> {{ $student->GPA }}</p>
            </div>
            <div class="student-image">
                <img src="{{asset('Assets/images/Mazen.jpg')}}" alt="Student Image">
            </div>
        </div>


        <div class="container">
            <div class="divider"></div>
            <h2>Schedule</h2>
            <table>
                <tr>
                    <td>Date</td>
                    <td>Sunday</td>
                    <td>Monday</td>
                    <td>Tuesday</td>
                    <td>wednesday</td>
                    <td>Thursday</td>
                    <td>Saturday</td>
                </tr>
                <tr>
                    <td>8:00 am</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>9:00 am</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>10:00 am</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>11:00 am</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>12:00 pm</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>1:00 pm</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2:00 pm</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>3:00 pm</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>4:00 pm</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
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