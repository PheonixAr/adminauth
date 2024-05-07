<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //

    public function index()
    {
        return view('registeration');
    }

    public function register(Request $req)
    {
        // dd(!empty($req->all()));

        if (!empty($req->all())) {
            $validator = $req->validate(
                [
                    'firstname' => 'required |alpha',
                    'lastname' => 'required |alpha',
                    'password' => 'required',
                    'confirmpass' => 'required',
                    'phone' => 'required|numeric|digits:10',
                    'dob' => 'required',
                    'state' => 'required',
                    'country' => 'required',
                    'city' => 'required',
                    'email' => 'required | email',
                    'profile_pic' => [File::types(['pdf', 'doc', 'docx', 'rtf'])->min(512)->max(12 * 1024)]
                ]
            );
            return 'success';
            // dd($validator);
            echo '<pre>';
            print_r($req->all());
        }
        $register = new users();
        $register->firstname = $req->firstname;
        $register->lastname =  $req->lastname;
        $register->email = $req->email;
        $register->phone = $req->phone;
        $register->password = Hash::make($req->password);
        // $register->dob = $req->dob;
        // $register->gender = $req->gender;
        // $register->country = $req->country;
        // $register->state = $req->state;
        // $register->city = $req->city;
        // $register->profile_pic = $req->profile_pic;

        // return back()->with('error', 'Error Email or Password');

        return back()->with('success', 'Register successfully');
    }


    public function registerPost(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('success', 'Register successfully');
    }

    public function login()
    {
        return view('login');
    }


    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($credetials)) {
            return redirect('/home')->with('success', 'Login Success');
        }

        return back()->with('error', 'Error Email or Password');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
