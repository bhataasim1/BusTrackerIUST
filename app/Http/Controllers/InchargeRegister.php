<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Incharge;
use App\Rules\EmailValidation;
use Illuminate\Validation\Rules\Password; //this is built in laravel 8 above
use App\Rules\RegNoUniqueAcrossDB;
use App\Models\BusRoute;

class InchargeRegister extends Controller
{
    public function Incharge_Register()
    {
        $busRoutes = BusRoute::all();
        return view('inchargeregister', compact('busRoutes'));
    }

    public function RegisterSuccess(Request $request){
        $request->validate([
            'reg__no' => ['required', 'unique:incharge,reg__no', 'regex:/^IUST\d{10}$/', 'min:14', 'max:14', new RegNoUniqueAcrossDB],
            'name' => 'required | min:5| max:30 | regex:/^[a-zA-Z\s]+$/',
            'email' => ['required', 'email', 'unique:students,email', new EmailValidation],
            'password' => ['required', 'max:12', Password::min(5)->letters()->mixedCase()->numbers()->symbols()->uncompromised()],
            'confirm_password' => 'required|same:password|min:5|max:12'
        ]);

        $reg__no = $request->input('reg__no');
        $name = $request->input('name');
        $bus_no = $request->input('bus_no');
        $route_name = $request->input('route_name');
        list($bus_no, $route_name) = explode('|', $bus_no);
        $email = $request->input('email');
        $password = $request->input('password');
        $confirm_password = $request->input('confirm_password');

        //check if user is already registered then redirect to login page otherwise register the user
        $data = DB::table('incharge')->where('reg__no', $reg__no)->first();

        if ($data) {
            // User already registered, redirect to login
            return redirect('incharge/login')->with('status', 'User already registered');
        } else {
            if ($password == $confirm_password) {
                $incharge = new Incharge([
                    'reg__no' => $reg__no,
                    'name' => $name,
                    'bus_no' => $bus_no, //this is the foreign key of bus route table
                    'route_name' => $route_name,
                    'email' => $email,
                    'password' => Hash::make($password)
                ]);
                $incharge->save();
                return redirect('incharge/login')->with('status', 'Registration Successful');
            } else {
                return redirect('register/inchargeregister')->with('status', 'Password and Confirm Password do not match');
            }
        }  
    }
}
