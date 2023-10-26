<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{asset ('images/favicon.ico')}}" type="image/x-icon">
    <title>Bus Details</title>
</head>
<body>
    <div class="dashboard__container">
        <div class="dashboard__details" id="bus_details">
            <table class="dash__table">
                <caption style="margin: 5px; font-size: 1.5rem;">Student Details</span></caption>
                <tr class="dash__table-heading">
                    <th>S. No</th>
                    <th>Registration Number</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Bus Number</th>
                </tr>
                @foreach ($student_data as $index => $std)
                    <tr>                            
                        <td>{{$index + 1}}.</td>
                        <td>{{ $std->reg__no }}</td>
                        <td>{{ $std->name }}</td>
                        <td>{{ $std->email }}</td>
                        <td>{{ $std->bus_no }}</td>
                    </tr>
                @endforeach
            </table>
        </div>

    </div>
</body>
</html>