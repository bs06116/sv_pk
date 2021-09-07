<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Toastr;

class AuthController extends Controller
{
    public function login(Request $request){
        $credentials =[
            'email' => $request->email,
            'password' => $request->password,
        ];
      
        $email=$request->email;
        $user=User::where('email',$email)->first();
        if( Auth::attempt($credentials)){
        if ($user->status==1){
            
        Auth::attempt($credentials);
                return redirect()->intended('dashboard');
            }else
            toastr()->error('credentials does not match');
           return redirect()->back();
        }

      else{
        // toastr()->success('added');
      toastr()->error('credentials does not match');
       return redirect()->back();
      }
           
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}

