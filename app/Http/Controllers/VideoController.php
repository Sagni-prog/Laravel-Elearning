<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Course;
use App\Models\Teacher;
use DB;
use Session;

class VideoController extends Controller
{

      public function view($id){

  
          
          // $data = Course::join('teachers','teachers.teacher_id','=','courses.teacher_id')
          // ->join('videos','videos.course_id','=','courses.course_id')
          // ->where('courses.course_id','=',$id)
          // ->get();

               $course = Course::join('teachers','teachers.teacher_id','=','courses.teacher_id')
                                 ->where('courses.course_id','=',$id)
                                 ->first();
               $data = Video::where('course_id','=',$id)->get();
              //  $no = $data->course_no;

                $count = $data->count();
               return view("Home.view",['course'=>$course,'data'=>$data,'counts'=>$count]);

      }

            public function showVideo($vid_id){

                 if(Session::has('loginId') && 
                      Session::get('student') == 2 &&
                         Session::get('status') == 1){ 
                  //  if ((Session::get('role') == 2) && (Session::get('status') == 1)){
                    // echo session::get('loginId');
                    // echo "<br>";
                    // echo session::get('student');
                    // echo "<br>";
                    // echo session::get('status');
                    // echo "<br>";

          $data = Course::join('teachers','teachers.teacher_id','=','courses.teacher_id')
                        ->join('videos','videos.course_id','=','courses.course_id')
                        ->where('videos.vid_id','=',$vid_id)
                        ->where('teachers.isApproved','=',1)
                        ->where('courses.courseChecked','=',1)
                        ->first();
                 return view('Home.show',compact('data'));
  
           }
           else{
                 return redirect('student/login');
           }
       }
        

      // public function all(){ 
      //   $datas = Teacher::where('isApproved','=',1)->get();
      //   $data = Course::join('teachers','teachers.teacher_id','=','courses.teacher_id')
      //                  ->join('videos','videos.course_id','=','courses.course_id')
      //                  ->get();
      //       return view("welcome",['data'=>$data,'datas'=>$datas]);
      // }

    
        public function notApproved(){

        $data = Video::where('isChecked','=',0)->get();
        // return view("Home.view",compact('data'))

      }

      public function Approved(){

        $data = Video::where('isChecked','=',1)->get();
        // return view("Home.view",compact('data'))
      }  
}
