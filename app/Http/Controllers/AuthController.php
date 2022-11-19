<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Teacher;
use App\Models\Student;
use Hash;
use DB;
use Session;
use App\Mail\ResetPassword;
use Mail;

class AuthController extends Controller
{  
    //funtion to dispaly login page
    public function login(){
        return view('Auth.login');

    }
    //function to dispaly registration page
    public function register(){
      
        return view('Auth.register-teacher');

    }
     //funtion to display sign up page
    public function signUp(){
      
        return view('Auth.signup');
    }

    public function showStudentLogin(){
        return view('Auth.studentLogin');
    }

   public function adminDashboard(){
       $data = array();
       if(Session::has('loginId') && Session::has('admin')){
    //   echo session::get('loginId');
        $data = Admin::where('admin_id','=',Session::get('loginId'))->first();
        return view('Admin.adminDashboard',compact('data'));
       }
   }

   public function teacherDashboard(){
    if(Session::has('loginId') && Session::has('teacher')){
       
       $data = Teacher::where('teacher_id','=',session::get('loginId'))->first();
       return view('Teacher.teacherdashboard',compact('data'));
     }
   }

         //function for admin registration
    public function AdminRegistration(Request $request){
        $request->validate([
            'first_name'=>'required',
            'email'=>'required|email|unique:admins|unique:teachers',
            'username'=>'required|unique:admins|unique:teachers',
            'password'=>'required'

       ]);

       $admin = new Admin;
       $ad = Admin::all();
       $count = $ad->count();
       $reset_password = random_int(100000, 999999);

       if($request->password == $request->password2) 
          {
              if($count == 0){
                $admin->first_name = $request->first_name;
                $admin->middle_name = $request->middle_name;
                $admin->email = $request->email;
                $admin->username = $request->username;
                $admin->password = Hash::make($request->password);
                $admin->role = 1;
                $admin->isSuper = 1;
                $admin->reset_password = $reset_password;
                $res = $admin->save();
              }else{
                  return back()->with('fail','you are not authenticated to be admin');
              }
    }else{
        return back()->with('fail','Password mismatch');
        } 
    }

           //function for login
    public function loginUser(Request $request){

        $request->validate([
            
            'username'=>'required'
            // 'password'=>'required'
       ]);

       $name = $request->username;
       
        $admin = Admin::where('username','=',$request->username)->first();
        $teacher =Teacher::where('username','=',$request->username)->first();

           //if the user is admin
       if($admin){
          if(Hash::check($request->password,$admin->password)){
              Session()->put('loginId',$admin->admin_id);
              Session()->put('admin',$admin->role);
              Session()->put('super',$admin->isSuper);
              //if super admin
              if($admin->isSuper == 1){
                 $response = [
                     'username' => $request->username,
                     'password' => $request->password
                 ];
                 return response()->json($admin);
                // echo "you are super admin oops";
                // echo session::get('loginId');
                // return redirect('Admin/dashboard');
                //if normal admin
              }else{
                return redirect('dashboard');
                // echo "you are normal admin";
                // echo session::get('loginId');
              }
          }
          else{
              return "Wrong password and username";
          }
        }
        //if the user is teacher
        else if($teacher)
        {
            if(Hash::check($request->password,$teacher->password)){
            Session()->put('loginId',$teacher->teacher_id);
            Session()->put('teacher',$teacher->role);
            Session()->put('approved',$teacher->isApproved);

            if($teacher->isApproved == 1){
                return redirect('teacher-dashboard');
                }
            }
            else{
                return "wrong password and username";
            }
        }
        else{
            return back()->with('fail','Wrong password and email');  
          }   
       }

         //function for student login

         public function studentLogin(Request $request){

            $request->validate([
            
                'email'=>'required|email',
                  'password'=>'required'
           ]);

            $student = Student::where('email',$request->email)->first();

       if($student){
        if(Hash::check($request->password,$student->password)){
            Session()->put('loginId',$student->student_id);
            Session()->put('student',$student->role);
            Session()->put('status',$student->status);


             return redirect('/');

         }
         else{
             return back()->with('fail','Wrong password and email');
         }
        }
     }
       public function forgotPassword(){
           return view('Auth.forget');
       }

       public function resetPassword(Request $request){

        $request->validate([
            
            'email'=>'required|email'
       ]);
        $admin = Admin::where('email','=',$request->email)->first();
        $teacher =Teacher::where('email','=',$request->email)->first();

        if($admin){
            Session()->put('email',$admin->email);
            
            $data = [
                'pin'=>$admin->reset_password
                
            ];
            Mail::to($request->email)->send(new ResetPassword($data));

            // echo session::get('email');
            // echo '<a href="pin">pin</a>';
            return redirect('pin');

            // return $admin->reset_password;
        }
        else if($teacher){
            Session()->put('email',$teacher->email);
            echo session::get('email');
            $data = [
                'pin'=>$teacher->reset_password
                
            ];
            Mail::to($request->email)->send(new ResetPassword($data));
            // echo '<a href="pin">pin</a>';
            return redirect('pin');
            // return "thanks for receiving";
        }
        else{
            echo "email not found";
           }
       }

       public function pinShow(){
           return view('Auth.pin');
       }

       public function pinChecker(Request $request){

        $request->validate([
            
            'pin'=>'required'
       ]);

      $pin = $request->pin;

           if(session::has('email')){

        $admin = Admin::where('email','=',session::get('email'))->first();
        $teacher =Teacher::where('email','=',session::get('email'))->first();
            //    DB::select('select reset_password from teachers')

            if($admin){
                if($pin == $admin->reset_password){
                    Session()->put('pin',$admin->reset_password);
                    
                    return redirect('setNewPassword');
                }
                else{
                    echo "not equal";
                }
            }
            else if($teacher){
                if($pin == $teacher->reset_password){
                    Session()->put('pin',$teacher->reset_password);
                    return redirect('setNewPassword');
                }
                else{
                    echo "not equal";
                }
            }
            else{

             }   
          }
       }

       public function showChangePassword(){
           return view('Auth.resetter');

       }
             //method to change the password
       public function changePassword(Request $request){

        $request->validate([
            
            'password'=>'required',
            'password2'=>'required'
       ]);

       $admin = Admin::where('email','=',session::get('email'))->first();
       $teacher =Teacher::where('email','=',session::get('email'))->first();

       // DB::update('update teachers set isApproved = ? where teacher_id = ?',[1,$teacher_id]);
       $password1 = $request->password;
       $password2 = $request->password2;
       $reset_password = random_int(100000, 999999);

          if($password1 == $password2){

                   $password = Hash::make($password1);
              if(session::has('email') && session::has('pin')){
                  if($admin){
                    DB::update('update admins set password = ?,reset_password = ? where email = ?',[$password,$reset_password,session::get('email')]);
                  }
                  else if($teacher){
                    DB::update('update teachers set password = ?,reset_password = ? where email = ?',[$password,$reset_password,session::get('email')]);
                  }
              }
          }
          else{
              echo "password mismatch";
          }
       }

       //function for logout
       public function logoutAdmin(){
        if(Session::has('loginId')){
           session::pull('loginId'); 
            return redirect('Admin/login');
        }
    }

    public function logoutTeacher(){
        if(Session::has('loginId')){
           session::pull('loginId'); 
            return redirect('Teacher/login');
        }
    }

    
    
    public function logoutStudent(){
        if(Session::has('loginId')){
           session::pull('loginId'); 
            return redirect('student/login');
        }
    }
}
