<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Services\AuthService;
use Auth;
use Illuminate\Http\Request;
use Session;

class AuthController extends Controller
{
    public $user;
    public function __construct(AuthService $user)
    {
        $this->user = $user;
    }
    //login page
    public function Login(){
        return view('auth.login');
    }
    //register function
    public function Register(){
        return view('auth.register');
    }


    //Register function
    public function DoRegister(RegisterRequest $request){
        $user = $this->user->store($request);
        if($user){
            Session::flash('success','Registration completed successfully');
            return redirect()->route('login');
        }
            
    }

    //login
    public function DoLogin(LoginRequest $request){
       
        $result = $this->user->Login($request);

        if(!$result){
            Session::flash('error','Email and Password donot match');
            return redirect()->route('login');
        }
        //successfull login
        if(Auth::user()->isAdmin()){
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('user.dashboard');

    }


    //logout
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
