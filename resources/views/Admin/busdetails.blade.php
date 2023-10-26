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
    <div style="justify-content: center; text-align: center; align-items:center; margin-top:2rem; margin-bottom:-3rem">
        <div class="admin-box-text">
            <a href="{{url('/')}}/admin/addbus" class="button"><i class="uil uil-bus-school button__icon"></i>Add New Bus</a>
        </div>
    </div>

    <div class="dashboard__container">
        <div class="dashboard__details" id="bus_details">
            <table class="dash__table">
                <caption style="margin: 10px">All Bus Details</span></caption>
                <tr class="dash__table-heading">
                    <th>S. No</th>
                    <th>Bus Number</th>
                    <th>Route</th>
                    <th>Incharge</th>
                </tr>
                @foreach ($bus_data  as $index => $bus)
                    <tr>                            
                        <td>{{$index + 1}}.</td>
                        <td>{{ $bus->bus_no }}</td>
                        <td>{{ $bus->route_name }}</td>
                        <td>{{ optional($bus->incharge)->name }}</td>
                    </tr>
                @endforeach
            </table>
        </div>

    </div>
</body>
</html>