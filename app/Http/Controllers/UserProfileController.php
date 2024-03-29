<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use PDF;
use App\Models\Evolution;
use Carbon\Carbon;

class UserProfileController extends Controller
{
  public function user_profile()
  {

    if (Auth::check()) {
      $users= User::with('user_enrollments')->where('id',Auth::id())->first();
      //dd($users);
        return view('frontend.pages.user_profile',compact('users'));

    }else {
      return Redirect('login');
    }


  }
  public function EditProfile($id)
  {

    $users= User::find($id);

    return view('frontend.pages.user_profile_edit',compact('users'));
  }
  public function changePassStore(Request $request){
    $request->validate([
        'old_password' => 'required',
        'new_password' => 'required|min:5',
        'password_confirmation' => 'required|min:5',
    ]);
    $db_pass = Auth::user()->password;
    $current_password = $request->old_password;
    $newpass = $request->new_password;
    $confirmpass = $request->password_confirmation;

   if (Hash::check($current_password,$db_pass)) {
    if ($newpass === $confirmpass) {
        User::findOrFail(Auth::id())->update([
          'password' => Hash::make($newpass)
        ]);

        Auth::logout();
        $notification=array(
          'message'=>'Your Password Change Success. Now Login With New Password',
          'alert-type'=>'success'
      );
      return Redirect()->route('login')->with($notification);

    }else {

      $notification=array(
          'message'=>'New Password And Confirm Password Not Same',
          'alert-type'=>'error'
      );
      return Redirect()->back()->with($notification);
    }
 }else {
  $notification=array(
      'message'=>'Old Password Not Match',
      'alert-type'=>'error'
  );
  return Redirect()->back()->with($notification);
 }
}
public function DownloadPdf($id)
{
  //dd($id);
  $evolution= Evolution::find($id);

  $pdf= PDF::loadview('certificate',compact('evolution'));
  return $pdf->download('certificate.pdf');
}
//================================Image upload==========================
    public function changeImage()
    {
        return view('frontend.pages.change_image');
    }

    public function imageStore(Request $request)
    {
        $old_image = $request->old_image;

        if (Auth::user()->image == 'frontend/media/avatar.png') {

            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('frontend/media/' . $name_gen);
            $save_url = 'frontend/media/' . $name_gen;
            User::findOrFail(Auth::id())->Update([
                'image' => $save_url
            ]);
            $notification = array(
                'message' => 'Image Successfully Updated',
                'alert-type' => 'success'
            );
            return Redirect()->route('user_profile')->with($notification);
        } else {
            //unlink($old_image);
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('frontend/media/' . $name_gen);
            $save_url = 'frontend/media/' . $name_gen;
            User::findOrFail(Auth::id())->Update([
                'image' => $save_url
            ]);
            $notification = array(
                'message' => 'Image Successfully Updated',
                'alert-type' => 'success'
            );
            return Redirect()->route('user_profile')->with($notification);
        }
    }



    //==============================EDIT PROFILE========================
   

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => ['required','email'],
            'phone' => ['required','min:10','max:11']
        ]);
        $id = $request->id;
        User::findOrFail($id)->Update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'linkedin' => $request->linkedin,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'updated_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Profile successfully updated',
            'alert-type' => 'success',
        );
        return Redirect()->route('user_profile')->with($notification);
    }

}
