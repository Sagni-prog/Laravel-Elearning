<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Video;

class HomeController extends Controller
{
    

    public function all(){ 
        // $datas = Teacher::where('isApproved','=',1)->get();
        // $data = Course::join('teachers','teachers.teacher_id','=','courses.teacher_id')
        //                ->join('videos','videos.course_id','=','courses.course_id')
        //                ->where('teachers.isApproved','=',1)
        //                ->where('courses.courseChecked','=',1)
        //                ->get();

        $teacher = Teacher::where('isApproved','=',1)->get();
        $course = Course::join('teachers','teachers.teacher_id','=','courses.teacher_id')
                        ->where('courses.courseChecked','=',1)
                        ->where('teachers.isApproved','=',1)
                        ->get();
        $coursem = Course::join('teachers','teachers.teacher_id','=','courses.teacher_id')
                      ->where('courses.courseChecked','=',1)
                      ->where('courses.course_catagory','=','Music')
                      ->where('teachers.isApproved','=',1)
                      ->get();

         $coursep = Course::join('teachers','teachers.teacher_id','=','courses.teacher_id')
                      ->where('courses.courseChecked','=',1)
                      ->where('courses.course_catagory','=','Programming')
                      ->where('teachers.isApproved','=',1)
                      ->get();

         $coursea = Course::join('teachers','teachers.teacher_id','=','courses.teacher_id')
                      ->where('courses.courseChecked','=',1)
                      ->where('courses.course_catagory','=','Art')
                      ->where('teachers.isApproved','=',1)
                      ->get();

        // $course = Course::where('courseChecked','=',1)->get();
                      
             return view("welcome",['course'=>$course,'coursem'=>$coursem,
             'coursep'=>$coursep,'coursea'=>$coursea,'teacher'=>$teacher]);
      }

}
