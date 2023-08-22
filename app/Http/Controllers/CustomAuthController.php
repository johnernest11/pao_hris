<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Hash;


class CustomAuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12',
        ]); 
        $user = User::where('email', '=', $request->email)->first();
        if($user){
            
            if (Hash::check($request->password, $user->password)){
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
                return back()->with('success', 'You have Login successfuly');
            }else{
                return back()->with('fail', 'Password is incorrect');
            }

        }else{
            return back()->with('fail', 'This email is not registered');
        }
    }


    public function forgot_passsword()
    {
        return view('auth.forgot-password');
    }


    public function forgot_passsword_request(Request $request){
        $request->validate([
            'email'=>'required|email|exists:users,email'
        ]);

        $token = \Str::random(64);
        \DB::table('password_resets')->insert([
              'email'=>$request->email,
              'token'=>$token,
              'created_at'=>Carbon::now(),
        ]);
        
        $action_link = route('reset.password.form',['token'=>$token,'email'=>$request->email]);
        $body = "We are received a request to reset the password for <b>Your app Name </b> account associated with ".$request->email.". You can reset your password by clicking the link below";

       \Mail::send('auth.email-forgot',['action_link'=>$action_link,'body'=>$body], function($message) use ($request){
             $message->from('noreply@example.com','PAO HRIS');
             $message->to($request->email,'Your name')
                     ->subject('Reset Password');
       });

       return back()->with('success', 'We have e-mailed your password reset link!');
   }

    public function showResetForm(Request $request, $token = null){
        return view('auth.reset')->with(['token'=>$token,'email'=>$request->email]);
    }


    public function registration()
        {
            return view("auth.registration");
        }

        //Registration Function
    public function registerUser(Request $request)
    {
        //Validate Data
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'username'=>'required|string|regex:/\w*$/|max:255|unique:users',
            'password'=>'required|min:5|max:12',
        ]); 
        //Insert Data to Database
        $user = new User();  
        $user->name =$request->name;
        $user->email =$request->email;
        $user->username =$request->username;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if($res) {
            return back()->with('success', 'You have registerd successfuly');
        }else {
            return back()->with('fail', 'Something wrong');
        }
    }

    public function resetPassword(Request $request){
        $request->validate([
            'email'=>'required|email|exists:users,email',
            'password'=>'required|min:5|confirmed',
            'password_confirmation'=>'required',
        ]);

        $check_token = \DB::table('password_resets')->where([
            'email'=>$request->email,
            'token'=>$request->token,
        ])->first();

        if(!$check_token){
            return back()->withInput()->with('fail', 'Invalid token');
        }else{

            User::where('email', $request->email)->update([
                'password'=>\Hash::make($request->password)
            ]);

            \DB::table('password_resets')->where([
                'email'=>$request->email
            ])->delete();

            // return back()->with('success', 'We have e-mailed your password reset link!');
            return redirect()->route('login')->with('success', 'Your password has been changed! You can login with your new password')->with('verifiedEmail', $request->email);
        }
    }

    public function logout()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('login');
    }
}
