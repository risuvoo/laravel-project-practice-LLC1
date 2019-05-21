<?php

namespace App\Http\Controllers;

use App\Models\User;
use validator;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginFrom(){
        return view('frontend.login');

    }

    public function processLoginFrom(Request $request){
        $this->validate($request,[
            'email'       => 'required|email',
            'password'    => 'required|min:6'
        ]);
        $credentials=$request->except(['_token']);
        if(auth()->attempt($credentials)){
            return redirect()->route('home');
        }
        $this->setErrorMessage('Invalid credentials');
        return redirect()->back();
    }

    public function logout(){
        auth()->logout();
        $this->setSuccessMessage('User has been logout');
        return redirect()->route('login');
    }




    public function showRegistrationFrom(){

        return view('frontend.register');

    }

    public function processRegistrationFrom(Request $request){

        $this->validate($request,[
            'full_name'   => 'required',
            'email'       => 'required|email|unique:users,email',
            'phone_number'=> 'required|min:6|max:13|unique:users,phone_number',
            'password'    => 'required|min:6|confirmed'
        ]);


        $data = [
           'full_name'    =>$request->input('full_name'),
           'email'        =>strtolower($request->input('email')),
           'phone_number' =>$request->input('phone_number'),
           'password'     =>bcrypt($request->input('password'))
        ];

        try{
            User::create($data);
            $this->setSuccessMessage('Registration successfully');
            return redirect()->route('login');
        }catch (Exception $e){
            $this->setErrorMessage($e->getMessage());
            return redirect()->back();
        }
    }
}
