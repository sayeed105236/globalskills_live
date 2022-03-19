<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Course;

class UserEnrollment extends Model
{
    use HasFactory;
    protected $table ="user_enrollments";

    public function users(){

        return $this->belongsTo(User::class,'user_id');
    }
    public function course(){

        return $this->belongsTo(Course::class,'course_id');
    }
    

}
