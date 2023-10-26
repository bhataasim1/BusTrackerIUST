<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{asset ('images/favicon.ico')}}" type="image/x-icon">
    <title>Student Dashboard</title>
</head>
<body>
    <div class="dashboard__container">
        <div class="dashboard__img">
            <i class="uil uil-user-circle" id="dash__icon"></i>
            <h2>Welcome <h2 class="dash__student-name">{{$data -> name}}</h2></h2>
            {{-- <img src="#" alt=""> --}}
        </div>
        <div class="dashboard__details">
            <table class="dash__table">
                <caption style="margin: 10px">Your Details</caption>
                <tr class="dash__table-heading">
                    <th>Registration Number</th>
                    <th>Email ID</th>
                    <th>Bus Number</th>
                    <th>Bus Name</th>
                    <th>Track Bus</th>
                </tr>
                <tr>
                    <td>{{$data -> reg__no}}</td>
                    <td>{{$data -> email}}</td>
                    <td>{{$data -> bus_no}}</td>
                    <td>{{$data -> route_name}}</td>
                    <td><a href="{{ route('track.bus', ['bus_no' => $data->bus_no]) }}" class="button">Track Bus<i class="uil uil-arrow-up-right button__icon"></i></a></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>