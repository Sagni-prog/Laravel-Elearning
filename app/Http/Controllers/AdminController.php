<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Video;
use App\Models\Student;
use Hash;
use DB;
use Session;
use App\Mail\Notification;
use Mail;
use File;

class AdminController extends Controller
   

{ 

            //function to display add admin page

            public function displayAddAdmin(){
               if(Session::has('loginId') && Session::has('admin') && session::has('super')){
                 if(session::get('super') == 1){
                    return view('Admin.addAdmin');
                 }
                }
            }

             //method to add admin
            public function AddAdmin(Request $request){
                 if(session::has('loginId') && 
                     session::has('admin') && 
                        session::has('super')){
                          if(session::get('super') == 1){
              $request->validate([
                'first_name'=>'required',
                'email'=>'required|email|unique:admins|unique:teachers',
                'username'=>'required|unique:admins|unique:teachers',
                'password'=>'required'
    
           ]);
    
           $admin = new Admin;
         
           $reset_password = random_int(100000, 999999);
    
           if($request->password == $request->password2) 
              {
                
                    $admin->first_name = $request->first_name;
                    $admin->middle_name = $request->middle_name;
                    $admin->email = $request->email;
                    $admin->username = $request->username;
                    $admin->password = Hash::make($request->password);
                    $admin->role = 1;
                    $admin->isSuper = 0;
                    $admin->reset_password = $reset_password;
                    $res = $admin->save();

                    // if($res){
                    //   $data = [
                    //     'username'=>$admin->username,
                    //     'password'=>$request->password,
                    //     'first_name'=>$admin->first_name,
                    //     'middle_name'=>$admin->middle_name
                        
                    // ];
              
                      // Mail::to($teacher->email)->send(new Notification($data));
                      // return "thanks for receiving";
                  //  }
               
        }else{
            return back()->with('fail','Password mismatch');
                 } 

              }

           }

        }

          //function to approve teachers request
    public function approveTeacher($teacher_id){
      if(Session::has('admin') && Session::has('loginId')){
        
        DB::update('update teachers set isApproved = ? where teacher_id = ?',[1,$teacher_id]);

        // Teacher::where('teacher_id','=',$teacher_id)
        //         ->update(['isApproved'=>1]);
        // return back()->with('success','You have approved teacher');

        $teacher =Teacher::where('teacher_id','=',$teacher_id)->first();

        $data = [
          'username'=>$teacher->username,
          'password'=>$teacher->password,
          'first_name'=>$teacher->first_name,
          'middle_name'=>$teacher->middle_name
          
      ];

        Mail::to($teacher->email)->send(new Notification($data));
        return "thanks for receiving";
        }
         
    }
           // method to delete the teacher
    public function deleteTeacher($teacher_id){
      

        if(Session::has('admin') && Session::has('loginId')){
        
               $teacher = Teacher::where('teacher_id','=',$teacher_id)->first();
               $teacherDel = Teacher::where('teacher_id','=',$teacher_id);
               $course = Course::where('teacher_id','=',$teacher_id)->first();
               $courseDel = Course::where('teacher_id','=',$teacher_id);
               $video = Video::where('course_id','=',$course->course_id)->first();
               $videoDel = Video::where('course_id','=',$course->course_id);

               $videoDel->delete();
               $courseDel->delete();
               $teacherDel->delete();
              // echo $teacher->profile;
              // $dest = 'teacher/'.$teacher->profile; 
              // if(File::exists($dest)){
              //   File::delete($dest);
               
              // }
              // else{
               
              // }
       
               return redirect()->back();
        }
    }

    public function notification(){

      if(Session::has('admin') && Session::has('loginId')){

        $data = Teacher::where('isApproved','=',0)->get();
        $count = $data->count();


        return view('Admin.notification',['data'=>$data,'count'=>$count]);
      }
    }
  public function notify(){
    if(Session::has('admin') && Session::has('loginId')){
      return redirect('notification');
    }
  }  

  public function teacher(){
    if(Session::has('loginId') && Session::has('admin'))
    
    
    $data = Teacher::where('isApproved','=',1)->get();


      return view('Admin.teacherstable',compact('data'));
    
  }

  public function showTeachers(){
    if(Session::has('admin')){
      return redirect('Admin/teachers');
    }
  }
     
     //method to show all existing courses
  public function showCourses(){
    if(session::has('loginId') && session::has('admin')){
      $courses = Course::where('courseChecked',1)
                        ->get();
                  return view('Admin.courses',compact('courses'));
      }
   }

  public function showCoursePage(){
       
    return redirect('Admin/Courses');
  }

  public function showStudents(){

    $students = Student::all();

    return view('Admin.studentList',compact('students'));
  }

  public function studentsPage(){

    return redirect('Admin/Students');
  }
    

     //methed to search courses
  public function searchCourse(Request $request){

    $search = $request->search;
    if($search == ''){
       $courses = Course::all();
       return view('Admin.courses',compact('courses'));
    }
    else{
      $courses = Course::where('course_name','LIKE','%'.$search.'%')->get();
                      
      return view('Admin.courses',compact('courses'));
    }
    
  }


       //method to search students
  public function searchTeacher(Request $request){
            $search = $request->search;
            if($search == ''){
              $data = Teacher::all();
              return view('Admin.teacherstable',compact('data'));
            }
            else{
              $data = Teacher::where('first_name','LIKE','%'.$search.'%')->get();
                              
              return view('Admin.teacherstable',compact('data'));
           }
          }

              //method to search students
  public function searchStudent(Request $request){
    $search = $request->search;
    if($search == ''){
      $students = Student::all();
      return view('Admin.studentList',compact('students'));
    }
    else{
      $students = Student::where('first_name','LIKE','%'.$search.'%')->get();
                      
      return view('Admin.studentList',compact('students'));
            }

      }
}
