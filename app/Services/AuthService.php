<?php
namespace App\Services;

use App\Models\User;
use Auth;
use Hash;

class AuthService{

    //store user
    public function store($request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;

        $user->password = Hash::make($request->password);
        $user->mobile = $request->mobile;
        $user->save();
        return $user;
    }

    //login user
    public function Login($request){
      

        if (Auth::attempt($request->validated())) {
            $request->session()->regenerate();
            return true;
        }
        return false;

    }
}

?>