<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Mail\ForgetPasswordMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class LoginController extends Controller
{

    public function loginPage()
    {
        if (Auth::check()) {
            return $this->dashboard();
        }
        return view('auth.login');
    }

    public function loginAuth(LoginRequest $request)
    {
        $remember = !empty($request->remember) ? true : false;
        $auth = Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember);
        if ($auth) {

            $notification = [
                'message' => 'Welcome ' . Auth::user()->name,
                'alert-type' => 'success'
            ];

            if (Auth::user()->user_type === ADMIN || Auth::user()->user_type === SUPARADMIN) {
                return redirect()->route('admin.dashboard')->with($notification);
            } elseif (Auth::user()->user_type === TEACHER) {
                return redirect()->route('teacher.dashboard')->with($notification);
            } elseif (Auth::user()->user_type === STUDENT) {
                return redirect()->route('student.dashboard')->with($notification);
            } elseif (Auth::user()->user_type === PARENTS) {
                return redirect()->route('parent.dashboard')->with($notification);
            }
        } else {
            $notification = [
                'message' => 'Please enter currect email and password',
                'alert-type' => 'error'
            ];
            return back()->with($notification);
        }
    }

    public function  forgetPassword()
    {
        if (Auth::check()) {
            return $this->dashboard();
        }

        return view('auth.forget-password');
    }
    public function PostforgetPassword(Request $request)
    {
        if (Auth::check()) {
            return $this->dashboard();
        }

        $user = User::getEmailCheck($request->email);
        if (!empty($user)) {
            $user->remember_token = Str::random(30);
            $user->save();
            Mail::to($user->email)->send(new ForgetPasswordMail($user));

            $notification = [
                'message' => 'Please check you email and reset password',
                'alert-type' => 'success'
            ];
            return back()->with($notification);
        } else {
            $notification = [
                'message' => 'Email Not Found',
                'alert-type' => 'error'
            ];
            return back()->with($notification);
        }
    }

    public function  resetPassword($remember_token)
    {
        if (Auth::check()) {
            return $this->dashboard();
        }

        $user = User::getTokenSingle($remember_token);
        if (!empty($user)) {
            return view('auth.reset-password', compact('user'));
        } else {
            abort(404);
        }
    }

    public function resetPost($remember_token, Request $request)
    {
        if (Auth::check()) {
            return $this->dashboard();
        }

        if ($request->password === $request->cpassword) {
            $user = User::getTokenSingle($remember_token);
            $user->password = Hash::make($request->password);
            $user->remember_token = Str::random(30);
            $user->save();

            Auth::logout();

            $notification = [
                'message' => 'Password Successfully Rest.',
                'alert-type' => 'success'
            ];
            return redirect()->route('login')->with($notification);
        } else {
            $notification = [
                'message' => 'Password and confirm password does not match',
                'alert-type' => 'error'
            ];
            return back()->with($notification);
        }
    }


    function dashboard()
    {
        if (Auth::user()->user_type === ADMIN || Auth::user()->user_type === SUPARADMIN) {
            return redirect()->route('admin.dashboard');
        } elseif (Auth::user()->user_type === TEACHER) {
            return redirect()->route('teacher.dashboard');
        } elseif (Auth::user()->user_type === STUDENT) {
            return redirect()->route('student.dashboard');
        } elseif (Auth::user()->user_type === PARENTS) {
            return redirect()->route('parent.dashboard');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect(url(''));
    }
}
