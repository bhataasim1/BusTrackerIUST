<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    {{-- Favicon --}}
    <link rel="shortcut icon" href="{{asset ('images/favicon.ico')}}" type="image/x-icon">
    <title>Admin Login</title>
</head>
<body>
    <section class="student__login"> 
        <div class="input__container">
            <form action="{{url('/')}}/admin/login" method="POST">
                @csrf
                <x-student-login type="email" name="email" label="Email ID" placeholder="Enter Email"/>
                <x-student-login type="password" name="password" label="Password" placeholder="Enter Password"/>
                <div class="session__status">
                    {{session('status')}}
                </div>
                <button type="submit" class="button">Login</button>
            </form>
        </div>
    </section>
</body>
</html>