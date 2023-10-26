<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Students;

class StudentLogin extends Controller
{
    public function Student_Login()
    {
        return view('stdlogin');
    }

    public function StudentDashboard (Request $request)
    {
        $request->validate([
            'reg__no' => 'required|regex:/^IUST\d{10}$/ | min:14|max:14',
            'password' => 'required|min:5|max:12'

        ]);

        $reg__no = $request->input('reg__no');
        $password = $request->input('password');

        $data = DB::table('students')->where('reg__no', $reg__no)->first();
        if ($data) {
            if (Hash::check($password, $data->password)) {
                $request->session()->put('reg__no', $data->reg__no);
                return redirect('student/dashboard');
            } else {
                return redirect('student/login')->with('status', 'Invalid Registration Number or password');
            }
        } else {
            return redirect('student/login')->with('status', 'Invalid Registration Number or password');
        }
    }

    public function Dashboard()
    {
        $data = DB::table('students')->where('reg__no', session('reg__no'))->first();
        $data = compact('data');
        return view('student-dashboard')->with($data);
    }
}
