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
    <title>Incharge Dashboard</title>
</head>
<body>
    <div class="dashboard__container">
        <div class="dashboard__img">
            <i class="uil uil-user-circle" id="dash__icon"></i>
            <h2>Welcome {{$data -> name}}</h2>
            {{-- <img src="#" alt=""> --}}
        </div>
        <div class="dashboard__details">
            <table class="dash__table">
                <caption style="margin: 2px">Student Details of <span id="incharge_dash">BUS No: {{$data->bus_no}}</span></caption>
                <tr class="dash__table-heading">
                    <th>S. No</th>
                    <th>Name</th>
                    <th>Registration Number</th>
                    <th>Email ID</th>
                </tr>
                @foreach ($student_data as $index => $std_data)
                    <tr>
                        <td>{{$index + 1}}.</td>
                        <td>{{ $std_data->name }}</td>
                        <td>{{ $std_data->reg__no }}</td>
                        <td>{{ $std_data->email }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>