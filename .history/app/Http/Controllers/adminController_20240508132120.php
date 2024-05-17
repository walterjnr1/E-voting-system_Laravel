<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\activity_log;


class AdminController extends Controller
{
    public function logout(Request $request) 
    {

 //Add to activity log
 $id=Auth::user()->id;
 $row=User::find($id);
 $db_fullname = $row['fullname'];

 activity_log::create([
 'task' => $db_fullname. ' Logout on '.NOW(),
]);
//End of activity log
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
  

    public function profileView()
    {
   
        //fetch user details uisng id field
        $id=Auth::user()->id;
        $profileData=User::find($id);
        return view ('admin.profile.profile',['page_name' => 'User Profile Page'],compact('profileData'));

    }
    public function profilePost(Request $request){

        $id=Auth::user()->id;
        $row=User::find($id);
       
     
        $row['fullname']=$request->fullname;
        $row['email']=$request->email;
  
        //upload image file
        if ($request->file('photo')) {
        $file  = $request->file('photo');    
        @unlink(public_path('uploadImage/Profile/'.$row['photo']));
        $filename  = 'uploadImage/Profile/'.date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('uploadImage/Profile'),$filename);
        $row['photo']=$filename;
  
        }
        $row->save();
  
        //return redirect()->route('profile.view')
        //->withSuccess('Your Profile was Changed successfully ');

//Add to activity log
$id=Auth::user()->id;
$row=User::find($id);
$db_fullname = $row['fullname'];

activity_log::create([
'task' => $db_fullname. ' Changed Profile '.NOW(),
]);
//End of activity log

return back() ->withSuccess('Your Profile was Changed successfully .....');

     }
     public function changePasswordView(){
      
        $id=Auth::user()->id;
        $profileData=User::find($id);
  
        return view('admin.profile.changepassword',['page_name' => 'Change Password'],compact('profileData'));
     }// end method
    
     public function changePasswordPost(Request $request){

        //validation
         $request->validate([
         'old_password'=> 'required',
         'new_password'=> 'required|confirmed'
         ]);
   
         //match the old password
         if(!Hash::check($request->old_password,auth::user()->password)){
          
            return redirect()->route('changePassword.view')
            ->withErrors('Old Password does not Match');
   
         }
         //update new password
         User::whereId(auth()->user()->id)->update([
            'password'=>Hash::make($request->new_password)
         ]);
   
//Add to activity log
$id=Auth::user()->id;
$row=User::find($id);
$db_fullname = $row['fullname'];

activity_log::create([
'task' => $db_fullname. ' Changed Password '.NOW(),
]);
//End of activity log

      
return back() ->withSuccess('Your Password was Changed successfully ');
}// end method
    
}
