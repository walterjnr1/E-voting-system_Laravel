<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPasswordMail;
use App\Models\activity_log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('admin.auth.login', ['page_name' => 'Login Form']);
    }

    public function loginPost(Request $request)
    {
         $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
            'status' => Rule::in([1]), // check if status is 1
        ]);


        // Inside the loginPost function
        $user = User::where('username', $request->username)->first();

        if ($user !== null && $user->status != 1) {
            //Add to activity log

            $request->username;
            activity_log::create([
                'task' => $request->username . ' Attempted to Logged in on ' . NOW(),
            ]);
            //End of activity log

            return back()->withErrors(['username' => 'Your provided credentials is not Active. Contact the Administrator',
                ])
                ->onlyInput('username');
        }

        if (Auth::attempt($credentials)) {

            //Add to activity log
            $id = Auth::user()->id;
            $row = User::find($id);
            $db_fullname = $row->fullname;

            activity_log::create([
                'task' => $db_fullname . ' Logged in on ' . NOW(),
            ]);
            //End of activity log

            $request->session()->regenerate();
            return redirect()
                ->intended('/')
                ->withSuccess('');
        }

        return back()
            ->withErrors([
                'username' => 'Your provided credentials do not match in our records.',
            ])
            ->onlyInput('username');
    }

    public function AdminRegistrationView()
    {
        return view('admin.auth.add_user', ['page_name' => 'Registration Form']);
    }
    public function AdminRegistrationPost(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:15|unique:users',
            'fullname' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:6',
        ]);

        user::create([
            'username' => $request->username,
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => $request->password,
            'photo' => 'uploadImage/Profile/default.png',
            'status' => 1,
        ]);

        //Add to activity log
        $id = Auth::user()->id;
        $row = User::find($id);
        $db_fullname = $row['fullname'];

        activity_log::create([
            'task' => $db_fullname . ' Added New Admin on ' . NOW(),
        ]);
        //End of activity log

        // return redirect()->route('registration.view')
        // ->withSuccess('You have successfully registered new User');

        return back()->withSuccess('You have successfully registered new Admin ');
    }
    public function Admin_recordView()
    {
        $data = User::all();
        return view('admin.auth.Admin_record', ['page_name' => 'Admin Records', 'data' => $data]);
    }
    public function DeleteAdmin($id)
    {
        $deldata = User::find($id);
        $deldata->delete();

        //Add to activity log
        $did = Auth::user()->id;
        $row = User::find($did);
        $db_fullname = $row->fullname;

        activity_log::create([
            'task' => $db_fullname . ' Deleted an Admin from database on ' . NOW(),
        ]);
        //End of activity log

        return back()->withSuccess('Admin Deleted Successfully ');
           }
    // end method

    public function enable_disable_Admin($id)
    {
        $user = User::find($id);

        if ($user->status == 1) {
            $user->status = 0;
        } else {
            $user->status = 1;
        }

        $user->save();

        //Add to activity log
        $id = Auth::user()->id;
        $row = User::find($id);
        $db_fullname = $row['fullname'];

        activity_log::create([
            'task' => $db_fullname . ' Disable_Enable an Admin on ' . NOW(),
        ]);
        //End of activity log

        return back()->withSuccess('Admin Status Changed Successfully ');
    }
    public function forgotView()
    {
        return view('admin.auth.forgot', ['page_name' => 'Forgot Password']);
    }
    public function forgotPost(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user) {
            $user->remember_token = str::random(40);
            $user->save();

            // Send an email using the 'send' method provided by the Mail class
            //Mail::send(new ForgotPasswordMail($user));
            return back()->withSuccess('Please check your E-mail Address and Reset your Password.');
        } else {
            return back()->withErrors('We cannot find an Admin with that E-mail Address.');
        }
    }

    public function ResetPasswordView($token)
    {
        $user = User::where('remember_token', $token)->first();
        if ($user) {
            $data['user'] = $user;
            return view('admin.auth.resetpassword', ['page_name' => 'Reset Password', 'data' => $data]);
        } else {
            abort(404);
        }
    }
    public function ResetPasswordPost(Request $request, $token)
    {
        $user = User::where('remember_token', $token)->first();
        if ($user) {
            if ($request->password == $request->cpassword) {
               // $user->password = Hash::make($request->password);
               $user->password = ($request->password);
            if (empty($user->email_verified_at)) {
                $user->email_verified_at = date('Y-m-d H:i:s');
            }
            $user->remember_token = str::random(40);
            $user->save();
            return redirect()->intended('/login')->withSuccess('Password Reset Was Succesful');
        } else {
            return back()->withErrors('Password and Confirm Password Does not match');
        }
    } else {
    abort(404);
}
}
}
