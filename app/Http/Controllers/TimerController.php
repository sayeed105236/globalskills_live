<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Timer;
use App\Models\Course;
use Carbon\Carbon;

class TimerController extends Controller
{
    public function create()
    {
        $course=Course::all();
        $timer=Timer::all();
        return view('backend.pages.timer.create',compact('timer','course'));
    }
   public function storeTimer(Request $request)
   {
    Timer::insert([
        'course_id'=>$request->course_id,
        'time' => $request->timer,
        'status'=>1,
        'created_at' => Carbon::now(),
    ]);

    $notification=array(
        'message'=>'Success',
        'alert-type'=>'success'
    );
    return Redirect()->back()->with($notification);
   }
   public function deleteTimer($id){


    Timer::findOrFail($id)->delete();
    $notification=array(
     'message'=>'Delete Success',
     'alert-type'=>'success'
 );
 return Redirect()->back()->with($notification);
 }
}
