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
    <title>Admin Dashboard</title>
</head>
<body>

    <section class="admin_sections">
        <div class="inner_admin-boxes">

            <div class="admin-box">
                <div class="admin-box-icon">
                    <i class="uil uil-user"></i>
                </div>
                <div class="admin-box-text">
                    {{-- <h3>Student Details</h3> --}}
                    <a href="{{url('/')}}/admin/studentdetails" class="button"><i class="uil uil-user button__icon"></i>Student Details</a>
                </div>
            </div>

            <div class="admin-box">
                <div class="admin-box-icon">
                    <i class="uil uil-bus"></i>
                </div>
                <div class="admin-box-text">
                    <a href="{{url('/')}}/admin/busdetails" class="button"><i class="uil uil-bus-school button__icon"></i>Bus Details</a>
                </div>
            </div>

            <div class="admin-box">
                <div class="admin-box-icon">
                    <i class="uil uil-user-md"></i>
                </div>
                <div class="admin-box-text">
                    <a href="{{url('/')}}/register/inchargeregister" class="button"><i class="uil uil-user-md button__icon"></i>Incharge register</a>
                </div>
            </div>

            <div class="admin-box">
                <div class="admin-box-icon">
                    <i class="uil uil-signout"></i>
                </div>
                <div class="admin-box-text">
                    <a href="{{url('/')}}/admin/logout" class="button"><i class="uil uil-signout button__icon"></i>Logout</a>
                </div>
            </div>

        </div>
    </section>
</body>
</html>