
@extends('layouts.TA')

@section('content')


    <div class="container">
        
        <div class="student-info">
            <div class="info">
                <h2>Advisor Information</h2>
                <p><strong>Name:</strong> {{ $ta->{'First name'} }} {{ $ta->{'Last name'} }}</p>
                <p><strong>ID:</strong> {{ $ta->{'id'} }}</p>
                <p><strong>Faculty:</strong> {{ $ta->Faculty }}</p>
            </div>
            <div class="student-image">
                <img src="../Assets/Images/Mazen.jpg" alt="Student Image">
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

@endsection