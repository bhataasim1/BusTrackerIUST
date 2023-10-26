<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{asset ('images/favicon.ico')}}" type="image/x-icon">
    <title>Add Bus</title>
</head>
<body>
    <section class="student__login">
        <div class="input__container">
            <form action="{{url('/')}}/admin/addbus" method="POST">
                @csrf
                <x-student-login type="text" name="bus_no" label="Bus Number" placeholder="Enter Bus Number"/>
                <x-student-login type="name" name="route_name" label="Route Name" placeholder="Enter Route Name"/>
                <div class="session__status">
                    {{session('status')}}
                </div>
                <button type="submit" class="button">Add Bus</button>
            </form>
        </div>
    </section>

    <script src="{{asset('/js/main.js')}}"></script>
</body>
</html>