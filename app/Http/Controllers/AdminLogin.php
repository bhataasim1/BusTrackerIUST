<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\BusRoute;
use App\Rules\EmailValidation;

class AdminLogin extends Controller
{
    //
    public function Admin_Login()
    {
        return view('Admin.adminlogin');
    }

    public function AdminDashboard(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', new EmailValidation],
            'password' => 'required|min:5|max:12'

        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        $data = DB::table('admins')->where('email', $email)->first();
        if ($data) {
            if (Hash::check($password, $data->password)) {
                $request->session()->put('email', $data->email);
                return redirect('admin/dashboard');
            } else {
                return redirect('admin/login')->with('status', 'Invalid email or password');
            }
        } else {
            return redirect('admin/login')->with('status', 'Invalid email or password');
        }
    }

    public function Dashboard()
    {
        // Fetch admin details
        $data = DB::table('admins')->where('email', session('email'))->first();
        $data = compact('data');
        
        //fetch all the students details
        // $student_data = DB::table('students')->get();
        // $student_data = compact('student_data');

        return view('Admin.admindashboard')->with($data);
    }

    public function getBusDetails()
    {
        // Getting Bus details with incharge details
        $bus_data = BusRoute::with('incharge')->get();
        $bus_data = compact('bus_data');
        return view('Admin.busdetails')->with($bus_data);

        // $bus_data = DB::table('busroutes')->get();
        // $bus_data = compact('bus_data');
        // return view('Admin.busdetails')->with($bus_data);
    }

    public function getStudentDetails()
    {
        $student_data = DB::table('students')->get();
        $student_data = compact('student_data');
        return view('Admin.studentdetails')->with($student_data);
    }

    public function addBus()
    {
        return view('Admin.addbus');
    }

    public function addBusSuccess(Request $request)
    {
        $request->validate([
            'bus_no' => 'required',
            'route_name' => 'required',
        ]);

        $bus_no = $request->input('bus_no');
        $route_name = $request->input('route_name');

        //before inserting data into db check if the bus no already exists
        $bus_no_exists = DB::table('busroutes')->where('bus_no', $bus_no)->first();


        if ($bus_no_exists) {
            return redirect('admin/addbus')->with('status', 'Bus no already exists');
        }
        else{
            $add_bus = new BusRoute([
                'bus_no' => $bus_no,
                'route_name' => $route_name
            ]);
        }
        $add_bus->save();
        return redirect('admin/busdetails')->with('status', 'Bus details added successfully');
    }

    public function AdminLogout()
    {
        session()->forget('email');
        return redirect('admin/login');
        // if (session()->has('email')) {
        //     session()->pull('email');
        //     return redirect('admin/login');
        // }
    }
}
