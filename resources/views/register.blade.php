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
    <title>Register Here</title>
</head>
<body>
    <section class="register__box-back">
        <div class="container__register">
            <i class="uil uil-user buses__icon" id="register__icon"></i>
            <a href="{{url('/')}}/register/studentregister" class="button"><i class="uil uil-user button__icon"></i>Student Register</a>
        </div>

        {{-- <div class="container__register">
            <i class="uil uil-user buses__icon" id="register__icon"></i>
            <a href="{{url('/')}}/register/inchargeregister" class="button"><i class="uil uil-user button__icon"></i>Incharge Register</a>
        </div> --}}
    </section>
</body>
</html>