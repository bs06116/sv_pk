<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\ImageHelper;
use App\Models\User;
use Toastr;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    public function profile()
    {
        $profile = Auth::user();

        return view('admin.profile',compact('profile'));
    }

    public function profileUpdate(Request $request)
    {

        // return $request->all();

        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            
        ]);
   
            $email=Auth::user()->email;
        $id=User::where('email',$email)->value('id');
        $user=User::where('id',$id)
        ->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'number'=>$request->number,
            'image'=>$request->image,
        ]);
        if (!(Hash::check($request->get('password'), Auth::user()->password))) {

            Toastr::error('message', 'Your current password does not matches with the password you provided! Please try again.');
            return redirect()->back();
        }
        
            $user = new User;

            $user= User ::where("email",$request->input('email'))->first();
            $password=$request->input('newpassword');
            $user->password=Hash::make($request->input('newpassword'));
             
            if(Hash::check($password,$user->password))
    
            {
              
              $user->save();
              
              Toastr::success('Password changed successfully.');
        return redirect()->back();
              
            }
        Toastr::success('Profile Setting Change Successfully.');
        return back();
    }



    public function changePassword()
    {
        return view('admin.password');

    }
     

    public function changePasswordUpdate(Request $request)
    {
        if (!(Hash::check($request->get('currentpassword'), Auth::user()->password))) {

            Toastr::error('message', 'Your current password does not matches with the password you provided! Please try again.');
            return redirect()->back();
        }
        
        $user = new User;

            // $user= User ::where("email",$request->input('email'))->first();
            $password=$request->input('password');
            $user->password=Hash::make($request->input('password'));
             
            if(Hash::check($password,$user->password))
    
            {
              
              $user->save();
              
              Toastr::success('Password changed successfully.');
        return redirect()->back();
              
            }
        }
    //     if(strcmp($request->get('currentpassword'), $request->get('newpassword')) == 0){

    //         Toastr::error('message', 'New Password cannot be same as your current password! Please choose a different password.');
    //         return redirect()->back();
    //     }

    //     $this->validate($request, [
    //         'currentpassword' => 'required',
    //         'newpassword' => 'required|string|min:6|confirmed',
    //     ]);

    //     $user = Auth::user();
    //     $user->password = Hash::make($request->input('newpassword'));
    //     if(Hash::check($password,$user->password))
    //     {
    //     $user->save();

    //     Toastr::success('Password changed successfully.');
    //     return redirect()->back();
    // }
    // function passwordChange(Request $req)
    //    {
       
    //     $user = new User;

    //     $user= User ::where("email",$req->input('email'))->first();
    //     $password=$req->input('newPassword');
    //     $user->password=Hash::make($req->input('newPassword'));
         
    //     if(Hash::check($password,$user->password))

    //     {
          
    //       $user->save();
          
    //      $req->session()->flash('status','Password Changed Successfully');
    //      return redirect('/');
          
    //     }
    // public function changePasswordUpdate(Request $request)
    // {
    //     if (!(Hash::check($request->get('currentpassword'), Auth::user()->password))) {

    //         Toastr::error('message', 'Your current password does not matches with the password you provided! Please try again.');
    //         return redirect()->back();
    //     }
    //     if(strcmp($request->get('currentpassword'), $request->get('newpassword')) == 0){

    //         Toastr::error('message', 'New Password cannot be same as your current password! Please choose a different password.');
    //         return redirect()->back();
    //     }

       
    //         // return $request->all();
    //         $pasword=Hash::make($request->newpassword);
    //         // return $pasword;
    //     $user = Auth::user();
    //     $user->password = $pasword;
    //     $user->save();

    //     Toastr::success('message', 'Password changed successfully.');
    //     return redirect()->back();
    // }


}
