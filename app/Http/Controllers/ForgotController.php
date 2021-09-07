<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ForgotController extends Controller
{
    public function sendVerification(Request $request)
    {
        // dd($request);
        $user = User::where('email', $request->email)->first();
        if ($user) {
            $user->code = rand(111111, 999999);
            $user->save();
            $this->sendMail($user);
            toastr()->info('Verification code sent');
            return view('auth.reset');
        } else {
            toastr()->error('Invalid email');
            return redirect()->back();
        }
    }

    private function sendMail($user)
    {
        $data = ['code' => $user->code];
        Mail::send('mail', $data, function ($message) use ($user) {
            $message->from('webportal@support.com', 'Portal');
            $message->to($user->email, $user->name)
                ->subject('Reset Password');
        });
    }
    public function resetPassword(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if ($user->code == $request->code) {
                $user->password = $request->password;
                $user->code = null;
                $user->save();
            } else {
                toastr()->error('Invalid code please try again');
                return redirect()->back();
            }
        } else {
            return redirect()->back();
            toastr()->error('Invalid email please try again');
        }
        toastr()->success('Password reset successfuly');
        return redirect()->route('login');
    }
}
