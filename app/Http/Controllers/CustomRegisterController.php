<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterStoreRequest;

class CustomRegisterController extends Controller
{
    public function registerFormShow(){
        return view('custom auth.register');
    }
    public function registerUser(RegisterStoreRequest $request){
        // dd($request->all());
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>Hash::make($request->password)

        ]);
        
    }
}
