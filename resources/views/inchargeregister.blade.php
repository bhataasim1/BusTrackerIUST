<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{asset ('images/favicon.ico')}}" type="image/x-icon">
    <title>Incharge register</title>
</head>
<body>
    <section class="student__login">
        <div class="input__container">
            <form action="{{url('/')}}/inchargeregister" method="POST">
                @csrf
                <x-student-login type="text" name="reg__no" label="Registration Number" placeholder="Enter Registration Number"/>
                <x-student-login type="name" name="name" label="Name" placeholder="Enter Name"/>
                
                <label for="bus_no" class="std__title">Select Bus Route:</label>
                <select name="bus_no" id="bus_no" class="std__input">
                    <option value="" class="std__input">Select a bus route</option>
                    @foreach ($busRoutes as $busRoute)
                        <option value="{{ $busRoute->bus_no . '|' . $busRoute->route_name }}">({{ $busRoute->bus_no }}): {{ $busRoute->route_name }}</option>
                    @endforeach
                </select>
                
                <x-student-login type="email" name="email" label="E-mail ID" placeholder="Enter Email ID"/>
                <x-student-login type="password" name="password" label="Password" placeholder="Enter Password"/>
                <x-student-login type="password" name="confirm_password" label="Confirm Password" placeholder="Confirm Password"/>
                
                <div class="session__status">
                    {{session('status')}}
                </div>
                <button type="submit" class="button">Register</button>
            </form>
        </div>
    </section>
</body>
</html>