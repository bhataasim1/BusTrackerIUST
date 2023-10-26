<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Incharge;
use App\Models\Students;

class InchargeLogin extends Controller
{
    public function Incharge_Login()
    {
        return view('inchargelogin');
    }

    public function InchargeDashboard(Request $request)
    {
        $data = request()->validate([
            'reg__no' => 'required|regex:/^IUST\d{10}$/ | min:14|max:14',
            'password' => 'required|min:5|max:12'
        ]);

        $reg__no = $request->input('reg__no');
        $password = $request->input('password');

        $data = DB::table('incharge')->where('reg__no', $reg__no)->first();
        if ($data) {
            if (Hash::check($password, $data->password)) {
                $request->session()->put('reg__no', $data->reg__no);
                return redirect('incharge/dashboard');
            } else {
                return redirect('incharge/login')->with('status', 'Invalid Registration Number or password');
            }
        } else {
            return redirect('incharge/login')->with('status', 'Invalid Registration Number or password');
        }
    }

    public function Dashboard()
    {
        // Fetch incharge details
    $data = DB::table('incharge')->where('reg__no', session('reg__no'))->first();
    $data = compact('data');

    //Here check the condition if bus_no of incharge and student are equal then fetch the details of those students
    $bus_no = $data['data']->bus_no;
    $student_data = DB::table('students')->where('bus_no', $bus_no)->get();
    $student_data = compact('student_data');

    // Pass both sets of data to the view
    return view('incharge-dashboard')->with($data)->with($student_data);
    }
}
