<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Controller;


//**************for test************//
Route::get('content',function(){
    return view('content');
});

Route::get('contents/{title}',[Controller::class,'contents']);
//**************for test************//

Route::post('student-registration',[StudentController::class,'studentRegistration']);
Route::get('student/login',[AuthController::class,'showStudentLogin']);
Route::post('Student/login',[AuthController::class,'studentLogin'])->name('login-student');


 Route::get('/',[HomeController::class,'all']);


Route::post('upload-video',[TeacherController::class,'upload']);

Route::post('add-course',[TeacherController::class,'addCourse']);

Route::get('courses',[TeacherController::class,'showCourse']);

Route::get('view-courses/{id}',[TeacherController::class,'courses']);
Route::get('view/{vid_id}',[VideoController::class,'view']);

Route::get('show/{vid_id}',[VideoController::class,'showVideo']);


    Route::get('Admin/logout',[AuthController::class,'logoutAdmin']);
    Route::get('Teacher/logout',[AuthController::class,'logoutTeacher']);
    Route::get('student/logout',[AuthController::class,'logoutStudent']);
    Route::get('/login',[AuthController::class,'login']);
    Route::get('Teacher/login',[AuthController::class,'login']);
    Route::get('signup',[AuthController::class,'signUp']);
    Route::get('register',[AuthController::class,'register']);

    Route::get('teacher-registration',[TeacherController::class,'registerTeacher']);


        Route::get('forgot',[AuthController::class,'forgotPassword']);
        Route::post('reset-password',[AuthController::class,'resetPassword']);
        Route::get('pin',[AuthController::class,'pinShow']);
        Route::post('pin-checker',[AuthController::class,'pinChecker'])->name('pin-checker');



    Route::post('login-user',[AuthController::class,'loginUser'])->name('login-user');
    Route::post('approve-teacher',[AdminController::class,'approveTeacher'])->name('register-teacher');
    Route::post('register-admin',[AuthController::class,'AdminRegistration'])->name('register-admin');

    Route::post('teacherRegistration',[TeacherController::class,'saveTeacher'])->name('teacherRegistration');

    Route::group(['middleware'=>['isLoggedIn']],function(){

        // Route::get('upload', function () {
        //     return view('Teacher.upload');
        // });

        Route::get('upload',[TeacherController::class,'showUploader']);

    Route::get('welcome',[AdminController::class,'home']);

    Route::get('Admin/add-admin',[AdminController::class,'displayAddAdmin']);
    Route::post('add-admin',[AdminController::class,'AddAdmin'])->name('addAdmin');

    Route::get('Admin/dashboard',[AuthController::class,'adminDashboard']);
    Route::get('Admin/notification',[AdminController::class,'notification']);
    Route::get('approve/{teacher_id}',[AdminController::class,'approveTeacher']);
    Route::get('Admin/teachers',[AdminController::class,'teacher']);
    Route::get('teachers-profile/{teacher_id}',[TeacherController::class,'teacherProfile']);
    Route::get('delete-teacher/{teacher_id}',[AdminController::class,'deleteTeacher']);

    Route::get('setNewPassword',[AuthController::class,'showChangePassword']);
    Route::post('change-password',[AuthController::class,'changePassword'])->name('change-password');

    Route::get('teacher-dashboard',[AuthController::class,'teacherDashboard']);

    Route::get('Admin/Courses',[AdminController::class,'showCourses']);
    Route::get('Courses',[AdminController::class,'showCoursePage']);

    Route::get('Admin/Students',[AdminController::class,'showStudents']);
    // Route::get('student',[AdminController::class,'studentsPage']);

    Route::post('Admin/search-course',[AdminController::class,'searchCourse'])->name('search-course');
    Route::post('Admin/search-teacher',[AdminController::class,'searchTeacher'])->name('search-teacher');
    Route::post('Admin/search-student',[AdminController::class,'searchStudent'])->name('search-student');
   
});