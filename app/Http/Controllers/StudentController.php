<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Hash;

class StudentController extends Controller
{
    public function studentRegistration(Request $request){

        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email|unique:admins|unique:teachers|unique:students',
            'password'=>'required'

       ]);

       $student = new Student;

       $reset_password = random_int(100000, 999999);
       $profile = "/student/me.jpg";

       if($request->password == $request->password2) 
       {
             $student->first_name = $request->first_name;
             $student->last_name = $request->last_name;
             $student->email = $request->email;
             $student->password = Hash::make($request->password);
             $student->reset_password = $reset_password;
             $student->role = 2;
             $student->profile = $profile;
             $student->status = 1;
             $res = $student->save();

        }
    }

}
